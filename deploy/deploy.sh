#!/usr/bin/env bash
set -euo pipefail

# =============================================
# JAKAMO Landing — Deploy Script (rsync + SSH)
# =============================================
# Użycie: ./deploy/deploy.sh

SSH_ALIAS="hostinger-serwer"   # alias z ~/.ssh/config
SSH_PORT="65002"
SSH_USER="u547469942"
SSH_HOST="92.113.19.229"
REMOTE_APP="~/domains/jakamo.pl/jakamo_landing"
BRANCH="main"
PHP="/opt/alt/php84/usr/bin/php"
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

echo "=> [2/5] Build frontend assets (Vite)..."
npm run build

echo "=> [3/5] Install Composer deps (no-dev)..."
composer install --no-dev --optimize-autoloader --no-interaction --quiet

echo "=> [4/5] Sync files to Hostinger (rsync)..."
rsync -avz --delete \
    -e "ssh -p ${SSH_PORT}" \
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
    ./ "${SSH_USER}@${SSH_HOST}:${REMOTE_APP}/"

echo "=> [5/5] Remote: migrate + cache..."
ssh "$SSH_ALIAS" bash << REMOTE
    set -e
    cd ~/domains/jakamo.pl/jakamo_landing

    chmod -R 775 storage bootstrap/cache

    $PHP artisan migrate --force

    $PHP artisan config:cache
    $PHP artisan route:cache
    $PHP artisan view:cache

    echo "=> Remote done."
REMOTE

echo ""
echo "═══════════════════════════════════════"
echo " DEPLOY OK // https://jakamo.pl"
echo "═══════════════════════════════════════"
