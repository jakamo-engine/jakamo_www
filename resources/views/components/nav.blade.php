@props(['stats' => []])
<!-- ═══════════════════════════════════════════
     NAVIGATION
════════════════════════════════════════════ -->
<header class="fixed top-0 w-full z-50 border-b border-cyan-500/20 bg-[#131313]/90 backdrop-blur-xl">
  <div class="max-w-7xl mx-auto px-4 md:px-6 h-16 flex items-center justify-between gap-4">
    <a href="/" class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 462 72" fill="none" role="img" aria-label="JAKAMO ARCHITECT" class="h-6 md:h-8 w-auto">
        <defs>
          <filter id="nav-bracket-glow" x="-80%" y="-80%" width="260%" height="260%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="4" result="blur"/>
            <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
          </filter>
          <filter id="nav-bracket-halo" x="-60%" y="-60%" width="220%" height="220%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur"/>
          </filter>
        </defs>
        <!-- Outer border -->
        <rect x="0.5" y="0.5" width="461" height="71" stroke="#00d4ff" stroke-width="0.75" stroke-opacity="0.2"/>
        <!-- Left bracket [ — glow -->
        <path d="M 22 11 L 11 11 L 11 61 L 22 61" stroke="#00d4ff" stroke-width="6" stroke-opacity="0.25" stroke-linecap="square" filter="url(#nav-bracket-halo)"/>
        <path d="M 22 11 L 11 11 L 11 61 L 22 61" stroke="#00d4ff" stroke-width="2.5" stroke-linecap="square" filter="url(#nav-bracket-glow)"/>
        <!-- Right bracket ] — glow -->
        <path d="M 440 11 L 451 11 L 451 61 L 440 61" stroke="#00d4ff" stroke-width="6" stroke-opacity="0.25" stroke-linecap="square" filter="url(#nav-bracket-halo)"/>
        <path d="M 440 11 L 451 11 L 451 61 L 440 61" stroke="#00d4ff" stroke-width="2.5" stroke-linecap="square" filter="url(#nav-bracket-glow)"/>
        <!-- JAKAMO -->
        <text x="34" y="45" font-family="'Space Grotesk', ui-sans-serif, sans-serif" font-weight="700" font-size="30" letter-spacing="6" fill="#ffffff">JAKAMO</text>
        <!-- // -->
        <text x="198" y="45" font-family="'Space Grotesk', ui-sans-serif, sans-serif" font-weight="300" font-size="30" fill="#fb923c">//</text>
        <!-- ARCHITECT -->
        <text x="240" y="45" font-family="'Space Grotesk', ui-sans-serif, sans-serif" font-weight="700" font-size="30" letter-spacing="4" fill="#e5e2e1">ARCHITECT</text>
      </svg>
    </a>
    @php $base = request()->routeIs('privacy') ? '/' : ''; @endphp
    <nav class="desktop-nav flex items-center gap-8">
      <a href="{{ $base }}#problem" class="nav-link text-[11px] font-label uppercase tracking-[0.12em] text-on-surface-variant hover:text-primary transition-colors">Problem</a>
      <a href="{{ $base }}#modules" class="nav-link text-[11px] font-label uppercase tracking-[0.12em] text-on-surface-variant hover:text-primary transition-colors">Moduły</a>
      <a href="{{ $base }}#process" class="nav-link text-[11px] font-label uppercase tracking-[0.12em] text-on-surface-variant hover:text-primary transition-colors">Proces</a>
      <a href="{{ $base }}#contact" class="nav-link text-[11px] font-label uppercase tracking-[0.12em] text-on-surface-variant hover:text-primary transition-colors">Kontakt</a>
    </nav>
    <a href="{{ $base }}#contact" class="text-[11px] font-label font-bold uppercase tracking-[0.15em] text-on-primary bg-primary-container px-3 md:px-5 py-2 hover:shadow-[0_0_20px_rgba(0,212,255,0.4)] transition-all cta-main whitespace-nowrap">
      <span class="md:hidden">Analiza →</span>
      <span class="hidden md:inline">Bezpłatna Analiza →</span>
    </a>
  </div>
</header>

<!-- ═══════════════════════════════════════════
     TICKER BAR
════════════════════════════════════════════ -->
<div class="fixed top-16 w-full z-40 bg-surface-container-low border-b border-cyan-500/10 overflow-hidden h-8 flex items-center">
  <div class="ticker-inner flex items-center gap-12 text-[10px] font-label uppercase tracking-[0.15em] text-on-surface-variant">
    <span>// JAKAMO_ENGINE_v2.0 //</span>
    <span class="text-cyan-400">STATUS: OPERATIONAL</span>
    <span>// EXCEL_REPLACEMENT: ACTIVE //</span>
    <span class="text-orange-400">LEADY_PRZETWORZONE: {{ $stats['leads'] ?? 5 }}</span>
    <span>// APLIKACJE_WDROŻONE: {{ $stats['apps'] ?? 5 }} //</span>
    <span class="text-cyan-400">UPTIME: 99.97%</span>
    <span>// CZAS_WDROŻENIA: 3-6 TYG //</span>
    <span>// JAKAMO_ENGINE_v2.0 //</span>
    <span class="text-cyan-400">STATUS: OPERATIONAL</span>
    <span>// EXCEL_REPLACEMENT: ACTIVE //</span>
    <span class="text-orange-400">LEADY_PRZETWORZONE: {{ $stats['leads'] ?? 5 }}</span>
    <span>// APLIKACJE_WDROŻONE: {{ $stats['apps'] ?? 5 }} //</span>
    <span class="text-cyan-400">UPTIME: 99.97%</span>
    <span>// CZAS_WDROŻENIA: 3-6 TYG //</span>
  </div>
</div>
