<!-- ═══════════════════════════════════════════
     PROBLEM SECTION
════════════════════════════════════════════ -->
<section id="problem" class="px-6 py-24 bg-surface-container-low">
  <div class="max-w-7xl mx-auto">

    <div class="reveal mb-16">
      <div class="text-[10px] font-label uppercase tracking-[0.3em] text-orange-400 mb-3">// DIAGNOZA_SYSTEMU</div>
      <h2 class="text-4xl md:text-5xl font-headline font-bold uppercase leading-tight">
        DLACZEGO<br/><span class="text-orange-400 orange-glow">EXCEL CIĘ OGRANICZA?</span>
      </h2>
      <div class="w-20 h-0.5 bg-orange-400 mt-4"></div>
    </div>

    <div class="grid md:grid-cols-3 gap-6 reveal">

      <!-- Problem 1 -->
      <div class="module-card corner-bracket-orange corner-bracket p-6 bg-surface-container-lowest border border-outline-variant/20 group hover:bg-surface-container transition-colors">
        <div class="w-12 h-12 border border-orange-400/40 flex items-center justify-center mb-6 group-hover:border-orange-400 transition-colors">
          <svg width="20" height="20" fill="none" stroke="#fd7200" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M12 9v4m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
          </svg>
        </div>
        <div class="text-[10px] font-label uppercase tracking-[0.2em] text-orange-400 mb-2">BŁĄD_KRYTYCZNY // 01</div>
        <h3 class="text-xl font-headline font-bold uppercase mb-3">Brak Dostępu Mobile</h3>
        <p class="text-sm text-on-surface-variant leading-relaxed">
          Twoi pracownicy nie mają dostępu do danych na hali, w magazynie ani u klienta. Excel żyje tylko na biurkowym komputerze.
        </p>
        <div class="mt-6 text-[10px] font-label uppercase text-on-surface-variant tracking-widest border-t border-outline-variant/20 pt-4">
          SYS_RISK: CRITICAL // AXS_ZERO
        </div>
      </div>

      <!-- Problem 2 -->
      <div class="module-card corner-bracket-orange corner-bracket p-6 bg-surface-container-lowest border border-outline-variant/20 group hover:bg-surface-container transition-colors">
        <div class="w-12 h-12 border border-orange-400/40 flex items-center justify-center mb-6 group-hover:border-orange-400 transition-colors">
          <svg width="20" height="20" fill="none" stroke="#fd7200" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>
          </svg>
        </div>
        <div class="text-[10px] font-label uppercase tracking-[0.2em] text-orange-400 mb-2">BŁĄD_KRYTYCZNY // 02</div>
        <h3 class="text-xl font-headline font-bold uppercase mb-3">Chaos Danych</h3>
        <p class="text-sm text-on-surface-variant leading-relaxed">
          Kilka wersji tego samego pliku, nadpisane formuły, brakujące dane. Jeden błąd pracownika może zniszczyć miesiące pracy.
        </p>
        <div class="mt-6 text-[10px] font-label uppercase text-on-surface-variant tracking-widest border-t border-outline-variant/20 pt-4">
          SYS_RISK: CRITICAL // DATA_CORRUPT
        </div>
      </div>

      <!-- Problem 3 -->
      <div class="module-card corner-bracket-orange corner-bracket p-6 bg-surface-container-lowest border border-outline-variant/20 group hover:bg-surface-container transition-colors">
        <div class="w-12 h-12 border border-orange-400/40 flex items-center justify-center mb-6 group-hover:border-orange-400 transition-colors">
          <svg width="20" height="20" fill="none" stroke="#fd7200" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <div class="text-[10px] font-label uppercase tracking-[0.2em] text-orange-400 mb-2">BŁĄD_KRYTYCZNY // 03</div>
        <h3 class="text-xl font-headline font-bold uppercase mb-3">Zero Automatyzacji</h3>
        <p class="text-sm text-on-surface-variant leading-relaxed">
          Ręczne przeliczanie, kopiowanie, wysyłanie raportów. Twoi pracownicy marnują godziny dziennie na czynności, które system może robić automatycznie.
        </p>
        <div class="mt-6 text-[10px] font-label uppercase text-on-surface-variant tracking-widest border-t border-outline-variant/20 pt-4">
          SYS_RISK: HIGH // EFFICIENCY_LOSS
        </div>
      </div>

    </div>

    <!-- Excel vs JAKAMO comparison -->
    <div class="mt-16 reveal">
      <div class="grid md:grid-cols-2 gap-0 border border-outline-variant/30">
        <div class="p-8 border-b md:border-b-0 md:border-r border-outline-variant/30 bg-surface-container-lowest">
          <div class="text-[10px] font-label uppercase tracking-[0.2em] text-orange-400 mb-4 flex items-center gap-2">
            <div class="w-2 h-2 bg-orange-400"></div> TWÓJ OBECNY SYSTEM
          </div>
          <ul class="space-y-3">
            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
              <span class="text-orange-400 mt-0.5 font-bold">✗</span> Excel / arkusze Google — ryzyko utraty danych
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
              <span class="text-orange-400 mt-0.5 font-bold">✗</span> Brak dostępu z telefonu
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
              <span class="text-orange-400 mt-0.5 font-bold">✗</span> Brak uprawnień — każdy widzi wszystko
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
              <span class="text-orange-400 mt-0.5 font-bold">✗</span> Ręczne raportowanie i wysyłka maili
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
              <span class="text-orange-400 mt-0.5 font-bold">✗</span> Brak historii zmian i audytu
            </li>
          </ul>
        </div>
        <div class="p-8 bg-surface-container-low">
          <div class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-4 flex items-center gap-2">
            <div class="w-2 h-2 bg-cyan-400 animate-pulse"></div> JAKAMO ENGINE
          </div>
          <ul class="space-y-3">
            <li class="flex items-start gap-3 text-sm text-on-surface">
              <span class="text-cyan-400 mt-0.5 font-bold">✓</span> Dedykowana aplikacja webowa — dane w chmurze
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface">
              <span class="text-cyan-400 mt-0.5 font-bold">✓</span> Pełny dostęp mobilny (PWA)
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface">
              <span class="text-cyan-400 mt-0.5 font-bold">✓</span> Role i uprawnienia dla każdego pracownika
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface">
              <span class="text-cyan-400 mt-0.5 font-bold">✓</span> Automatyczne raporty, maile, powiadomienia
            </li>
            <li class="flex items-start gap-3 text-sm text-on-surface">
              <span class="text-cyan-400 mt-0.5 font-bold">✓</span> Pełny log zmian i historia operacji
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>
