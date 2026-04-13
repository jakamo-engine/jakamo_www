<!-- ═══════════════════════════════════════════
     HERO
════════════════════════════════════════════ -->
<section class="relative min-h-screen flex flex-col justify-center tech-grid px-6 py-24 overflow-hidden">
  <!-- Background elements -->
  <div class="absolute inset-0 bg-gradient-to-br from-background via-background/95 to-surface-container-low/60"></div>
  <div class="absolute right-0 top-1/4 w-1/2 h-1/2 bg-cyan-400/3 blur-[120px] pointer-events-none"></div>
  <div class="absolute left-0 bottom-1/4 w-1/3 h-1/3 bg-orange-400/4 blur-[100px] pointer-events-none"></div>

  <!-- Decorative vertical lines -->
  <div class="absolute left-6 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-cyan-400/20 to-transparent hidden md:block"></div>
  <div class="absolute right-6 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-cyan-400/10 to-transparent hidden md:block"></div>

  <div class="relative z-10 max-w-7xl mx-auto w-full">
    <div class="grid md:grid-cols-2 gap-12 items-center">

      <!-- Left: Copy -->
      <div class="space-y-8">
        <div class="inline-flex items-center gap-3 px-4 py-2 border border-cyan-500/30 bg-cyan-500/5">
          <div class="w-1.5 h-1.5 bg-cyan-400 animate-pulse"></div>
          <span class="text-[10px] font-label uppercase tracking-[0.3em] text-cyan-400">JAKAMO // ARCHITEKT // SYSTEM_INIT</span>
        </div>

        <h1 class="font-headline font-bold leading-[1.0] uppercase">
          <span class="text-[clamp(2.5rem,7vw,5.5rem)] text-on-surface block">POŻEGNAJ</span>
          <span class="text-[clamp(2.5rem,7vw,5.5rem)] block strike-through text-orange-400 orange-glow">EXCEL.</span>
          <span class="text-[clamp(2.5rem,7vw,5.5rem)] text-primary cyber-glow block">POWITAJ</span>
          <span class="text-[clamp(2.5rem,7vw,5.5rem)] text-primary cyber-glow block">EFEKTYWNOŚĆ.</span>
        </h1>

        <p class="text-base text-on-surface-variant leading-relaxed max-w-lg">
          Budujemy dedykowane aplikacje webowe zamiast Excela. Bezpieczne, mobilne i w pełni zautomatyzowane — <strong class="text-on-surface font-medium">architektura przyszłości dla Twojego biznesu.</strong>
        </p>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#contact" class="cta-main inline-block bg-primary-container text-on-primary font-label font-bold uppercase tracking-[0.2em] px-8 py-4 text-sm transition-all text-center shadow-[0_0_15px_rgba(0,212,255,0.2)]">
            ZAMÓW BEZPŁATNĄ ANALIZĘ
          </a>
          <a href="#modules" class="inline-block border border-cyan-500/40 text-primary font-label uppercase tracking-[0.15em] px-8 py-4 text-sm hover:bg-cyan-500/5 transition-all text-center">
            EKSPLORUJ MODUŁY →
          </a>
        </div>

        <!-- Stats bar -->
        <div class="grid grid-cols-3 gap-0 border border-outline-variant/30 bg-surface-container-lowest/60 mt-8">
          <div class="p-4 border-r border-outline-variant/30">
            <div class="text-2xl font-headline font-bold text-primary stat-num">98%</div>
            <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-[0.1em] mt-1">Klientów poleca</div>
          </div>
          <div class="p-4 border-r border-outline-variant/30">
            <div class="text-2xl font-headline font-bold text-primary stat-num">3–6</div>
            <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-[0.1em] mt-1">Tygodni wdrożenia</div>
          </div>
          <div class="p-4">
            <div class="text-2xl font-headline font-bold text-primary stat-num">∞</div>
            <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-[0.1em] mt-1">Skalowanie danych</div>
          </div>
        </div>
      </div>

      <!-- Right: HUD mockup -->
      <div class="relative hidden md:block">
        <div class="corner-bracket p-6 bg-surface-container-low border border-outline-variant/20 shadow-[0_0_40px_rgba(0,212,255,0.06)]">
          <!-- HUD header -->
          <div class="flex items-center justify-between mb-6 pb-4 border-b border-cyan-500/10">
            <span class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400">JAKAMO // DASHBOARD_v2</span>
            <div class="flex gap-2">
              <div class="w-2 h-2 bg-cyan-400 animate-pulse"></div>
              <div class="w-2 h-2 bg-orange-400"></div>
              <div class="w-2 h-2 bg-outline-variant"></div>
            </div>
          </div>

          <!-- Fake data rows -->
          <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-surface-container-lowest border-l-2 border-cyan-400">
              <div>
                <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-widest">ZAMÓWIENIE // ORD_4471</div>
                <div class="text-sm font-headline font-bold mt-0.5">Meble Kowalski Sp. z o.o.</div>
              </div>
              <span class="text-[10px] font-label uppercase text-cyan-400 bg-cyan-400/10 px-2 py-1">AKTYWNE</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-surface-container-lowest border-l-2 border-orange-400">
              <div>
                <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-widest">MAGAZYN // ALERT</div>
                <div class="text-sm font-headline font-bold mt-0.5">Dąb Europejski — 12 m³</div>
              </div>
              <span class="text-[10px] font-label uppercase text-orange-400 bg-orange-400/10 px-2 py-1">NISKI STAN</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-surface-container-lowest border-l-2 border-cyan-400/40">
              <div>
                <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-widest">KLIENT // CRM_REC</div>
                <div class="text-sm font-headline font-bold mt-0.5">Tartaki Północ — Oferta</div>
              </div>
              <span class="text-[10px] font-label uppercase text-on-surface-variant bg-surface-container-high px-2 py-1">OCZEKUJE</span>
            </div>
            <div class="flex items-center justify-between p-3 bg-surface-container-lowest border-l-2 border-cyan-400">
              <div>
                <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-widest">FAKTURA // INV_2847</div>
                <div class="text-sm font-headline font-bold mt-0.5">Drewpol — 18 400 PLN</div>
              </div>
              <span class="text-[10px] font-label uppercase text-cyan-400 bg-cyan-400/10 px-2 py-1">OPŁACONA</span>
            </div>
          </div>

          <!-- Fake mini chart -->
          <div class="mt-6 pt-4 border-t border-cyan-500/10">
            <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-widest mb-3">OBRÓT // Q2_2025</div>
            <div class="flex items-end gap-1 h-16">
              <div class="flex-1 bg-cyan-400/20" style="height:40%"></div>
              <div class="flex-1 bg-cyan-400/30" style="height:55%"></div>
              <div class="flex-1 bg-cyan-400/40" style="height:70%"></div>
              <div class="flex-1 bg-cyan-400/50" style="height:60%"></div>
              <div class="flex-1 bg-cyan-400/60" style="height:80%"></div>
              <div class="flex-1 bg-cyan-400/80" style="height:90%"></div>
              <div class="flex-1 bg-cyan-400" style="height:100%"></div>
            </div>
          </div>

          <!-- vs Excel label -->
          <div class="mt-4 text-center">
            <span class="text-[9px] font-label uppercase tracking-[0.2em] text-on-surface-variant">To zamiast: </span>
            <span class="text-[9px] font-label uppercase tracking-[0.2em] text-orange-400 line-through">EXCEL_v1997.xlsx</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
