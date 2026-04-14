<!-- ═══════════════════════════════════════════
     HERO
════════════════════════════════════════════ -->
<section class="relative min-h-screen flex flex-col justify-center tech-grid px-6 py-12 md:py-24 overflow-hidden">
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
          Buduję dedykowane aplikacje webowe zamiast Excela. Bezpieczne, mobilne i w pełni zautomatyzowane — <strong class="text-on-surface font-medium">architektura przyszłości dla Twojego biznesu.</strong>
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
            <div class="text-2xl font-headline font-bold text-primary stat-num">100%</div>
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

      <!-- Right: HUD Slider -->
      <div class="relative hidden md:block" id="hero-slider">
        <!-- Shared HUD header -->
        <div class="corner-bracket p-6 bg-surface-container-low border border-outline-variant/20 shadow-[0_0_40px_rgba(0,212,255,0.06)]">
          <div class="flex items-center justify-between mb-6 pb-4 border-b border-cyan-500/10">
            <span class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 hero-slide-label">JAKAMO // DASHBOARD_v2</span>
            <div class="flex gap-2">
              <button class="hero-dot w-2.5 h-2.5 bg-cyan-400 transition-all duration-300 cursor-pointer hover:scale-125" data-dot="0" aria-label="Slajd 1"></button>
              <button class="hero-dot w-2.5 h-2.5 bg-outline-variant/40 transition-all duration-300 cursor-pointer hover:scale-125" data-dot="1" aria-label="Slajd 2"></button>
            </div>
          </div>

          <!-- Slides container — fixed height -->
          <div class="relative overflow-hidden" style="height: 420px;">

            <!-- Slide 1: Dashboard -->
            <div class="hero-slide absolute inset-0 transition-opacity duration-500 opacity-100" data-slide="0">
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

              <div class="mt-4 text-center">
                <span class="text-[9px] font-label uppercase tracking-[0.2em] text-on-surface-variant">To zamiast: </span>
                <span class="text-[9px] font-label uppercase tracking-[0.2em] text-orange-400 line-through">EXCEL_v1997.xlsx</span>
              </div>
            </div>

            <!-- Slide 2: Wykresy / Analityka -->
            <div class="hero-slide absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none" data-slide="1">
              <!-- Wykres kołowy (SVG) -->
              <div class="flex gap-6 items-start">
                <div class="flex-1">
                  <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-widest mb-3">KATEGORIE // PRZYCHÓD</div>
                  <div class="flex justify-center">
                    <svg viewBox="0 0 120 120" class="w-36 h-36">
                      <circle cx="60" cy="60" r="50" fill="none" stroke="rgba(0,212,255,0.8)" stroke-width="20"
                        stroke-dasharray="125.6 188.5" stroke-dashoffset="0" transform="rotate(-90 60 60)"/>
                      <circle cx="60" cy="60" r="50" fill="none" stroke="rgba(251,146,60,0.8)" stroke-width="20"
                        stroke-dasharray="78.5 235.6" stroke-dashoffset="-125.6" transform="rotate(-90 60 60)"/>
                      <circle cx="60" cy="60" r="50" fill="none" stroke="rgba(0,212,255,0.4)" stroke-width="20"
                        stroke-dasharray="62.8 251.3" stroke-dashoffset="-204.1" transform="rotate(-90 60 60)"/>
                      <circle cx="60" cy="60" r="50" fill="none" stroke="rgba(133,147,152,0.5)" stroke-width="20"
                        stroke-dasharray="47.1 267.0" stroke-dashoffset="-266.9" transform="rotate(-90 60 60)"/>
                    </svg>
                  </div>
                  <div class="grid grid-cols-2 gap-x-4 gap-y-1 mt-3">
                    <div class="flex items-center gap-2">
                      <div class="w-2 h-2 bg-cyan-400"></div>
                      <span class="text-[9px] font-label uppercase text-on-surface-variant">Produkcja 40%</span>
                    </div>
                    <div class="flex items-center gap-2">
                      <div class="w-2 h-2 bg-orange-400"></div>
                      <span class="text-[9px] font-label uppercase text-on-surface-variant">Usługi 25%</span>
                    </div>
                    <div class="flex items-center gap-2">
                      <div class="w-2 h-2 bg-cyan-400/40"></div>
                      <span class="text-[9px] font-label uppercase text-on-surface-variant">Handel 20%</span>
                    </div>
                    <div class="flex items-center gap-2">
                      <div class="w-2 h-2 bg-outline-variant/50"></div>
                      <span class="text-[9px] font-label uppercase text-on-surface-variant">Inne 15%</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Wykres słupkowy -->
              <div class="mt-6 pt-4 border-t border-cyan-500/10">
                <div class="text-[10px] font-label uppercase text-on-surface-variant tracking-widest mb-3">SPRZEDAŻ // MIESIĘCZNA</div>
                <div class="flex items-end gap-2 h-24">
                  <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-cyan-400/30 rounded-sm" style="height:36px"></div>
                    <span class="text-[8px] font-label text-on-surface-variant">STY</span>
                  </div>
                  <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-cyan-400/40 rounded-sm" style="height:48px"></div>
                    <span class="text-[8px] font-label text-on-surface-variant">LUT</span>
                  </div>
                  <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-cyan-400/50 rounded-sm" style="height:56px"></div>
                    <span class="text-[8px] font-label text-on-surface-variant">MAR</span>
                  </div>
                  <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-orange-400/60 rounded-sm" style="height:40px"></div>
                    <span class="text-[8px] font-label text-on-surface-variant">KWI</span>
                  </div>
                  <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-cyan-400/60 rounded-sm" style="height:68px"></div>
                    <span class="text-[8px] font-label text-on-surface-variant">MAJ</span>
                  </div>
                  <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-cyan-400/80 rounded-sm" style="height:80px"></div>
                    <span class="text-[8px] font-label text-on-surface-variant">CZE</span>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
