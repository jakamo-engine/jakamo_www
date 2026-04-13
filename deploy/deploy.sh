#!/usr/bin/env bash
set -euo pipefail

# =============================================
# JAKAMO Landing — Deploy Script (rsync + SSH)
# =============================================
# Użycie: ./deploy/deploy.sh [--first-run]
#
# Przed pierwszym użyciem:
#   1. Ustaw SSH_HOST poniżej
#   2. Upewnij się że klucz SSH jest dodany do Hostingera
#   3. Uruchom z flagą --first-run dla pierwszego wdrożenia

SSH_HOST="u547469942@YOUR_HOST.hostinger.com"   # <-- zmień na właściwy hostname
REMOTE_APP="/domains/jakamo.pl/jakamo_landing"
REMOTE_WEB="/domains/jakamo.pl/public_html/landing"
BRANCH="main"
PHP="php8.2"
COMPOSER="/usr/local/bin/composer"

echo "═══════════════════════════════════════"
echo " JAKAMO // DEPLOY_ENGINE_v1.0"
echo "═══════════════════════════════════════"

# Sprawdź lokalne zmiany
if [[ $(git status --porcelain) ]]; then
    echo "[!] Uncommitted changes detected. Commit first."
    exit 1
fi

echo "=> [1/5] Pull latest from GitHub..."
git pull origin "$BRANCH"

echo "=> [2/5] Install Composer deps (no-dev)..."
composer install --no-dev --optimize-autoloader --no-interaction --quiet

echo "=> [3/5] Build frontend assets (Vite)..."
npm run build

echo "=> [4/5] Sync files to Hostinger (rsync)..."
rsync -avz --delete \
    --exclude='.env' \
    --exclude='.git' \
    --exclude='node_modules' \
    --exclude='storage/logs/*' \
    --exclude='storage/framework/cache/*' \
    --exclude='storage/framework/sessions/*' \
    --exclude='storage/framework/views/*' \
    --exclude='tests' \
    --exclude='deploy' \
    --exclude='jakamo-landing.html' \
    ./ "${SSH_HOST}:${REMOTE_APP}/"

echo "=> [5/5] Remote: migrate + cache..."
ssh "$SSH_HOST" bash << REMOTE
    set -e
    cd "$REMOTE_APP"

    # Uprawnienia
    chmod -R 775 storage bootstrap/cache

    # Migracje
    $PHP artisan migrate --force

    # Cache produkcyjny
    $PHP artisan config:cache
    $PHP artisan route:cache
    $PHP artisan view:cache

    echo "=> Remote done."
REMOTE

# Pierwsze uruchomienie: utwórz pliki w public_html/landing/
if [[ "${1:-}" == "--first-run" ]]; then
    echo "=> [FIRST_RUN] Setting up public_html/landing/..."
    ssh "$SSH_HOST" bash << SETUP
        mkdir -p "$REMOTE_WEB"
        echo "Pliki index.php i .htaccess wgraj ręcznie z katalogu deploy/"
SETUP
fi

echo ""
echo "═══════════════════════════════════════"
echo " DEPLOY OK // https://jakamo.pl/landing"
echo "═══════════════════════════════════════"
