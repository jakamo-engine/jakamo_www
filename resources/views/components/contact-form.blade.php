<!-- ═══════════════════════════════════════════
     CONTACT / LEAD FORM
════════════════════════════════════════════ -->
<section id="contact" class="px-6 py-24 tech-grid">
  <div class="max-w-3xl mx-auto">

    <div class="text-center mb-12 reveal">
      <div class="text-[10px] font-label uppercase tracking-[0.3em] text-cyan-400 mb-3">// INICJUJ_POŁĄCZENIE</div>
      <h2 class="text-4xl md:text-5xl font-headline font-bold uppercase">
        GOTOWY NA <span class="text-primary cyber-glow">ZMIANĘ?</span>
      </h2>
      <p class="text-sm text-on-surface-variant mt-4 max-w-md mx-auto leading-relaxed">
        Powiedz mi jak wygląda Twój Excel. Bezpłatna analiza zajmuje 30 minut — po niej wiesz czy i jak możemy Ci pomóc.
      </p>
    </div>

    <div class="corner-bracket bg-surface-container p-8 md:p-12 shadow-[0_0_60px_rgba(0,212,255,0.06)] reveal">
      <div class="flex items-center justify-between mb-8 pb-6 border-b border-outline-variant/20">
        <div>
          <div class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400">STATUS: READY_TO_DEPLOY</div>
          <div class="text-xs text-on-surface-variant mt-1">Czas odpowiedzi: &lt; 24h robocze</div>
        </div>
        <div class="flex gap-2 items-center">
          <div class="w-2 h-2 bg-cyan-400 animate-pulse"></div>
          <span class="text-[10px] font-label uppercase text-cyan-400">ONLINE</span>
        </div>
      </div>

      @if(session('success'))
        <!-- Success state -->
        <div class="text-center py-12">
          <div class="w-16 h-16 border-2 border-cyan-400 flex items-center justify-center mx-auto mb-6 cyber-glow">
            <svg width="32" height="32" fill="none" stroke="#00d4ff" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
          </div>
          <div class="text-[10px] font-label uppercase tracking-[0.3em] text-cyan-400 mb-3">TRANSMISJA_ZAKOŃCZONA // SUCCESS</div>
          <h3 class="text-2xl font-headline font-bold uppercase mb-3">Wiadomość Odebrana!</h3>
          <p class="text-sm text-on-surface-variant max-w-sm mx-auto leading-relaxed">
            Odezwę się w ciągu 24 godzin roboczych. Do usłyszenia wkrótce.
          </p>
        </div>
      @else
        <!-- Form -->
        <form action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
          @csrf

          <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-1">
              <label class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">USER_IDENTITY *</label>
              <input
                name="name"
                value="{{ old('name') }}"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all @error('name') border-orange-400 @enderror"
                placeholder="Imię i Nazwisko"
                type="text"
              />
              @error('name')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
              @enderror
            </div>
            <div class="space-y-1">
              <label class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">FIRMA *</label>
              <input
                name="company"
                value="{{ old('company') }}"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all @error('company') border-orange-400 @enderror"
                placeholder="Nazwa firmy"
                type="text"
              />
              @error('company')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-1">
              <label class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">COMM_PROTOCOL *</label>
              <input
                name="email"
                value="{{ old('email') }}"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all @error('email') border-orange-400 @enderror"
                placeholder="Email"
                type="email"
              />
              @error('email')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
              @enderror
            </div>
            <div class="space-y-1">
              <label class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">TEL_LINK</label>
              <input
                name="phone"
                value="{{ old('phone') }}"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all"
                placeholder="Telefon (opcjonalnie)"
                type="tel"
              />
            </div>
          </div>

          <div class="space-y-1">
            <label class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">DO CZEGO UŻYWASZ TERAZ EXCELA? *</label>
            <select
              name="use_case"
              class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface-variant transition-all appearance-none cursor-pointer @error('use_case') border-orange-400 @enderror"
            >
              <option value="">— wybierz główne zastosowanie —</option>
              <option {{ old('use_case') == 'Magazyn / stany i ruchy towarów' ? 'selected' : '' }}>Magazyn / stany i ruchy towarów</option>
              <option {{ old('use_case') == 'CRM / baza klientów i sprzedaż' ? 'selected' : '' }}>CRM / baza klientów i sprzedaż</option>
              <option {{ old('use_case') == 'Zlecenia / produkcja / zamówienia' ? 'selected' : '' }}>Zlecenia / produkcja / zamówienia</option>
              <option {{ old('use_case') == 'Faktury / finanse / rozliczenia' ? 'selected' : '' }}>Faktury / finanse / rozliczenia</option>
              <option {{ old('use_case') == 'HR / ewidencja pracowników' ? 'selected' : '' }}>HR / ewidencja pracowników</option>
              <option {{ old('use_case') == 'Kilka rzeczy naraz' ? 'selected' : '' }}>Kilka rzeczy naraz</option>
              <option {{ old('use_case') == 'Coś innego' ? 'selected' : '' }}>Coś innego</option>
            </select>
            @error('use_case')
              <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
            @enderror
          </div>

          <!-- Excel upload -->
          <div class="space-y-2">
            <label class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">PLIK_EXCEL // OPCJONALNIE</label>
            <div class="border border-dashed border-primary/20 hover:border-primary/50 transition-colors bg-surface-container-lowest px-4 py-5 relative">
              <input
                name="excel_file"
                type="file"
                accept=".xlsx,.xls,.csv"
                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                id="excel-upload"
              />
              <div class="flex items-center gap-4 pointer-events-none">
                <div class="w-10 h-10 border border-primary/30 flex items-center justify-center flex-shrink-0">
                  <svg width="18" height="18" fill="none" stroke="#00d4ff" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/>
                    <line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/>
                  </svg>
                </div>
                <div>
                  <div id="file-label" class="text-sm text-on-surface-variant">Przeciągnij plik lub <span class="text-primary">kliknij aby wybrać</span></div>
                  <div class="text-[10px] font-label uppercase tracking-[0.15em] text-on-surface-variant/60 mt-1">
                    .xlsx / .xls / .csv &nbsp;·&nbsp; max 10 MB &nbsp;·&nbsp;
                    <span class="text-orange-400">tylko struktura — usuń dane przed wysłaniem</span>
                  </div>
                </div>
              </div>
            </div>
            @error('excel_file')
              <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
            @enderror
          </div>

          <div class="space-y-1">
            <label class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">PROJECT_BRIEF</label>
            <textarea
              name="message"
              class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all resize-none leading-relaxed"
              placeholder="Opisz swoje wyzwania... ile osób korzysta z arkusza, co jest w nim najtrudniejsze, co chciałbyś usprawnić."
              rows="4"
            >{{ old('message') }}</textarea>
          </div>

          <div class="space-y-3 pt-2">
            <div class="flex items-start gap-3">
              <input
                id="f-consent"
                name="consent"
                type="checkbox"
                value="1"
                {{ old('consent') ? 'checked' : '' }}
                class="mt-1 w-4 h-4 bg-surface-container-lowest border border-primary/40 rounded-none accent-cyan-400 cursor-pointer flex-shrink-0"
              />
              <label for="f-consent" class="text-xs text-on-surface-variant leading-relaxed cursor-pointer">
                Wyrażam zgodę na przetwarzanie danych osobowych w celu odpowiedzi na zapytanie. Twoje dane są bezpieczne i nie będą udostępniane osobom trzecim.
              </label>
            </div>
            @error('consent')
              <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
            @enderror

            <div class="flex items-start gap-3">
              <input
                id="f-rodo"
                name="rodo"
                type="checkbox"
                value="1"
                {{ old('rodo') ? 'checked' : '' }}
                class="mt-1 w-4 h-4 bg-surface-container-lowest border border-primary/40 rounded-none accent-cyan-400 cursor-pointer flex-shrink-0"
              />
              <label for="f-rodo" class="text-xs text-on-surface-variant leading-relaxed cursor-pointer">
                Zapoznałem się z <a href="{{ route('privacy') }}" target="_blank" class="text-primary hover:underline">Polityką Prywatności</a>.
              </label>
            </div>
            @error('rodo')
              <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
            @enderror
          </div>

          <button
            type="submit"
            class="cta-main w-full bg-primary-container text-on-primary py-4 font-label font-bold uppercase tracking-[0.2em] text-sm shadow-[0_0_15px_rgba(0,212,255,0.2)] transition-all"
          >
            INICJUJ BEZPŁATNĄ ANALIZĘ →
          </button>

          <p class="text-center text-[10px] font-label uppercase text-on-surface-variant tracking-widest">
            Bez zobowiązań // Odpowiedź &lt; 24h // Pierwsza konsultacja gratis
          </p>
        </form>
      @endif

    </div>

  </div>
</section>
