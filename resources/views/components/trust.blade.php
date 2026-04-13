@props(['stats' => []])
<!-- ═══════════════════════════════════════════
     SOCIAL PROOF / TRUST
════════════════════════════════════════════ -->
<section class="px-6 py-8 md:py-16 border-y border-outline-variant/20">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-10 reveal">
      <div class="text-[10px] font-label uppercase tracking-[0.3em] text-on-surface-variant">// ZAUFALI_NAM</div>
    </div>
    <div class="grid md:grid-cols-3 gap-0 reveal">
      <div class="p-8 border-b md:border-b-0 md:border-r border-outline-variant/20 text-center">
        <div class="text-5xl font-headline font-bold text-primary stat-num mb-2">{{ $stats['apps'] ?? 5 }}+</div>
        <div class="text-[10px] font-label uppercase tracking-[0.15em] text-on-surface-variant">Wdrożonych aplikacji</div>
      </div>
      <div class="p-8 border-b md:border-b-0 md:border-r border-outline-variant/20 text-center">
        <div class="text-5xl font-headline font-bold text-primary stat-num mb-2">3–6</div>
        <div class="text-[10px] font-label uppercase tracking-[0.15em] text-on-surface-variant">Tygodni od analizy do wdrożenia</div>
      </div>
      <div class="p-8 text-center">
        <div class="text-5xl font-headline font-bold text-primary stat-num mb-2">100%</div>
        <div class="text-[10px] font-label uppercase tracking-[0.15em] text-on-surface-variant">Projektów ukończonych w terminie</div>
      </div>
    </div>
  </div>
</section>
