<!-- ═══════════════════════════════════════════
     FOOTER
════════════════════════════════════════════ -->
<footer class="bg-surface-container-lowest border-t border-outline-variant/20 py-12 px-6">
  <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-3 gap-8 mb-10">
      <div>
        <div class="mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 462 72" fill="none" aria-label="JAKAMO ARCHITECT" class="h-7 w-auto">
            <defs>
              <filter id="ft-bracket-glow" x="-80%" y="-80%" width="260%" height="260%">
                <feGaussianBlur in="SourceGraphic" stdDeviation="4" result="blur"/>
                <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
              </filter>
              <filter id="ft-bracket-halo" x="-60%" y="-60%" width="220%" height="220%">
                <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur"/>
              </filter>
            </defs>
            <rect x="0.5" y="0.5" width="461" height="71" stroke="#00d4ff" stroke-width="0.75" stroke-opacity="0.2"/>
            <path d="M 22 11 L 11 11 L 11 61 L 22 61" stroke="#00d4ff" stroke-width="6" stroke-opacity="0.25" stroke-linecap="square" filter="url(#ft-bracket-halo)"/>
            <path d="M 22 11 L 11 11 L 11 61 L 22 61" stroke="#00d4ff" stroke-width="2.5" stroke-linecap="square" filter="url(#ft-bracket-glow)"/>
            <path d="M 440 11 L 451 11 L 451 61 L 440 61" stroke="#00d4ff" stroke-width="6" stroke-opacity="0.25" stroke-linecap="square" filter="url(#ft-bracket-halo)"/>
            <path d="M 440 11 L 451 11 L 451 61 L 440 61" stroke="#00d4ff" stroke-width="2.5" stroke-linecap="square" filter="url(#ft-bracket-glow)"/>
            <text x="34" y="45" font-family="'Space Grotesk', ui-sans-serif, sans-serif" font-weight="700" font-size="30" letter-spacing="6" fill="#ffffff">JAKAMO</text>
            <text x="198" y="45" font-family="'Space Grotesk', ui-sans-serif, sans-serif" font-weight="300" font-size="30" fill="#fb923c">//</text>
            <text x="240" y="45" font-family="'Space Grotesk', ui-sans-serif, sans-serif" font-weight="700" font-size="30" letter-spacing="4" fill="#e5e2e1">ARCHITECT</text>
          </svg>
        </div>
        <p class="text-xs text-on-surface-variant leading-relaxed">
          Buduję systemy dla firm, które chcą odejść od Excela – od magazynu po zarządzanie klientami.
        </p>
      </div>
      <div>
        <div class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant mb-3">MODUŁY</div>
        <ul class="space-y-2">
          <li><a href="/#modules" class="text-xs text-on-surface-variant hover:text-primary transition-colors">Magazyn</a></li>
          <li><a href="/#modules" class="text-xs text-on-surface-variant hover:text-primary transition-colors">CRM</a></li>
          <li><a href="/#modules" class="text-xs text-on-surface-variant hover:text-primary transition-colors">System Zleceń</a></li>
          <li><a href="/#modules" class="text-xs text-on-surface-variant hover:text-primary transition-colors">Custom</a></li>
        </ul>
      </div>
      <div>
        @php
          $phone = \App\Models\Setting::get('phone', '+48600952627');
          $digits = preg_replace('/\D/', '', $phone);
          $phoneDisplay = '+' . substr($digits, 0, 2) . ' ' . substr($digits, 2, 3) . ' ' . substr($digits, 5, 3) . ' ' . substr($digits, 8);
        @endphp
        <div class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant mb-3">KONTAKT</div>
        <ul class="space-y-2">
          <li class="text-xs text-on-surface font-medium">Kamil Jabłoński</li>
          <li><a href="tel:{{ $phone }}" class="text-xs text-on-surface-variant hover:text-primary transition-colors">tel. {{ $phoneDisplay }}</a></li>
          <li><a href="mailto:kontakt@jakamo.pl" class="text-xs text-on-surface-variant hover:text-primary transition-colors">kontakt@jakamo.pl</a></li>
        </ul>
      </div>
    </div>
    <div class="border-t border-outline-variant/20 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
      <p class="text-[10px] font-label uppercase tracking-widest text-on-surface-variant">
        SYS_REF: JAKAMO_ENGINE_v2.0 // ALL_RIGHTS_RESERVED © {{ date('Y') }}
      </p>
      <div class="flex gap-6 items-center">
        <a href="{{ route('privacy') }}" class="text-[10px] font-label uppercase tracking-widest text-on-surface-variant hover:text-orange-400 transition-colors">Polityka Prywatności</a>
        <span id="cookie-settings-link" class="text-[10px] font-label uppercase tracking-widest text-on-surface-variant hover:text-primary transition-colors cursor-pointer"></span>
      </div>
    </div>
  </div>
</footer>
