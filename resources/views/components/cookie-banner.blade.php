<!-- ═══════════════════════════════════════════
     COOKIE CONSENT BANNER
════════════════════════════════════════════ -->
<div
  id="cookie-banner"
  class="fixed bottom-0 left-0 right-0 z-[100] bg-[#131313] border-t border-cyan-500/20 px-6 py-5 shadow-[0_-4px_40px_rgba(0,0,0,0.6)]"
  style="display:none"
>
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-start md:items-center gap-5">
    <div class="flex-1 min-w-0">
      <div class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-1">// COOKIE_SETTINGS</div>
      <p class="text-xs text-on-surface-variant leading-relaxed">
        Używamy plików cookies. <strong class="text-on-surface">Niezbędne</strong> są zawsze aktywne (sesja, bezpieczeństwo formularza).
        <strong class="text-on-surface">Analityczne</strong> (Google Analytics, GTM) włączamy tylko za Twoją zgodą.
        Szczegóły w <a href="{{ route('privacy') }}" class="text-primary hover:underline">Polityce Prywatności</a>.
      </p>
    </div>
    <div class="flex flex-col gap-3 flex-shrink-0">
      <div class="flex gap-3">
        <button
          id="cookie-reject"
          class="text-[11px] font-label uppercase tracking-[0.15em] px-5 py-2 border border-outline-variant/40 text-on-surface-variant hover:border-primary/40 hover:text-on-surface transition-all"
        >
          Tylko niezbędne
        </button>
        <button
          id="cookie-accept"
          class="text-[11px] font-label font-bold uppercase tracking-[0.15em] px-5 py-2 bg-primary-container text-on-primary hover:shadow-[0_0_20px_rgba(0,212,255,0.3)] transition-all cta-main"
        >
          Akceptuj wszystkie
        </button>
      </div>
      <button
        id="cookie-customize-toggle"
        class="text-[10px] font-label uppercase tracking-[0.15em] text-on-surface-variant hover:text-primary transition-colors text-right"
      >
        Dostosuj ustawienia ▸
      </button>
      <!-- Panel dostosowania -->
      <div id="cookie-customize" class="hidden border border-outline-variant/20 bg-surface-container-lowest p-4 space-y-3">
        <div class="flex items-center justify-between">
          <div>
            <div class="text-[10px] font-label uppercase tracking-[0.15em] text-on-surface">Niezbędne</div>
            <div class="text-[9px] text-on-surface-variant">Sesja, bezpieczeństwo formularza</div>
          </div>
          <div class="text-[10px] font-label uppercase text-cyan-400">Zawsze aktywne</div>
        </div>
        <div class="border-t border-outline-variant/20"></div>
        <div class="flex items-center justify-between">
          <div>
            <div class="text-[10px] font-label uppercase tracking-[0.15em] text-on-surface">Analityczne</div>
            <div class="text-[9px] text-on-surface-variant">Google Analytics, GTM</div>
          </div>
          <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" id="cookie-analytics-toggle" class="sr-only peer">
            <div class="w-9 h-5 bg-outline-variant/40 rounded-full peer peer-checked:bg-cyan-400 transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:after:translate-x-4"></div>
          </label>
        </div>
        <button
          id="cookie-save-custom"
          class="w-full text-[11px] font-label font-bold uppercase tracking-[0.15em] px-5 py-2 border border-primary/40 text-primary hover:bg-primary/5 transition-all"
        >
          Zapisz ustawienia
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Link w stopce do zmiany ustawień -->
<template id="cookie-reopen-tpl">
  <button
    id="cookie-reopen"
    onclick="jakamoCookieReset()"
    class="text-[10px] font-label uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors"
  >
    Ustawienia cookies
  </button>
</template>

<script>
(function () {
  var STORAGE_KEY = 'jakamo_cookie_consent';
  var banner = document.getElementById('cookie-banner');

  function getConsent() {
    try { return JSON.parse(localStorage.getItem(STORAGE_KEY)); } catch(e) { return null; }
  }

  function saveConsent(analytics) {
    var data = { analytics: analytics, ts: Date.now() };
    localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
    return data;
  }

  function applyConsent(analytics) {
    var state = analytics ? 'granted' : 'denied';
    if (typeof gtag === 'function') {
      gtag('consent', 'update', {
        'analytics_storage': state,
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied'
      });
    }
  }

  function hideBanner() {
    banner.style.display = 'none';
    injectReopenLink();
  }

  function injectReopenLink() {
    var placeholder = document.getElementById('cookie-settings-link');
    if (!placeholder) return;
    var tpl = document.getElementById('cookie-reopen-tpl');
    if (tpl) placeholder.replaceWith(tpl.content.cloneNode(true));
  }

  function showBanner() {
    banner.style.display = 'block';
  }

  // Eksponuj reset dla stopki
  window.jakamoCookieReset = function () {
    localStorage.removeItem(STORAGE_KEY);
    showBanner();
  };

  // Sprawdź przy załadowaniu
  var existing = getConsent();
  if (existing === null) {
    showBanner();
  } else {
    applyConsent(existing.analytics);
    injectReopenLink();
  }

  document.getElementById('cookie-accept').addEventListener('click', function () {
    saveConsent(true);
    applyConsent(true);
    hideBanner();
  });

  document.getElementById('cookie-reject').addEventListener('click', function () {
    saveConsent(false);
    applyConsent(false);
    hideBanner();
  });

  // Dostosuj ustawienia
  var customizeBtn = document.getElementById('cookie-customize-toggle');
  var customizePanel = document.getElementById('cookie-customize');
  customizeBtn.addEventListener('click', function () {
    var isHidden = customizePanel.classList.contains('hidden');
    customizePanel.classList.toggle('hidden');
    customizeBtn.textContent = isHidden ? 'Ukryj ustawienia ▾' : 'Dostosuj ustawienia ▸';
  });

  document.getElementById('cookie-save-custom').addEventListener('click', function () {
    var analytics = document.getElementById('cookie-analytics-toggle').checked;
    saveConsent(analytics);
    applyConsent(analytics);
    hideBanner();
  });
})();
</script>
