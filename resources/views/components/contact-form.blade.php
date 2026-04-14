<!-- ═══════════════════════════════════════════
     CONTACT / LEAD FORM
════════════════════════════════════════════ -->
<section id="contact" class="px-6 py-12 md:py-24 tech-grid">
  <div class="max-w-3xl mx-auto">

    <div class="text-center mb-12 reveal">
      <div class="text-[10px] font-label uppercase tracking-[0.3em] text-cyan-400 mb-3">// INICJUJ_POŁĄCZENIE</div>
      <h2 class="text-4xl md:text-5xl font-headline font-bold uppercase">
        GOTOWY NA <span class="text-primary cyber-glow">ZMIANĘ?</span>
      </h2>
      <p class="text-sm text-on-surface-variant mt-4 max-w-md mx-auto leading-relaxed">
        Powiedz mi jak wygląda Twój Excel. Bezpłatna analiza zajmuje 30 minut — po niej wiesz czy i jak mogę Ci pomóc.
      </p>
      @php
        $phone = \App\Models\Setting::get('phone', '+48600952627');
        $phoneDisplay = trim(str_replace('+48', '', $phone));
        $phoneDisplay = substr($phoneDisplay, 0, 3) . ' ' . substr($phoneDisplay, 3, 3) . ' ' . substr($phoneDisplay, 6);
      @endphp
      <div class="flex flex-wrap items-center justify-center gap-4 mt-4 text-xs text-on-surface-variant">
        <span class="font-medium text-on-surface">Kamil Jabłoński</span>
        <span class="text-outline-variant/40">|</span>
        <a href="tel:{{ $phone }}" class="hover:text-primary transition-colors">tel. {{ $phoneDisplay }}</a>
        <span class="text-outline-variant/40">|</span>
        <a href="mailto:kontakt@jakamo.pl" class="hover:text-primary transition-colors">kontakt@jakamo.pl</a>
      </div>
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
        <div class="text-center py-12" id="form-success">
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
        <!-- Błędy serwera -->
        @if($errors->any())
          <div id="form-errors" class="mb-6 p-4 border border-orange-400/40 bg-orange-400/5">
            <p class="text-[10px] font-label uppercase tracking-widest text-orange-400 mb-2">// BŁĘDY_WALIDACJI</p>
            <ul class="space-y-1">
              @foreach($errors->all() as $error)
                <li class="text-xs text-orange-400">— {{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-6" novalidate>
          @csrf

          {{-- Honeypot: ukryte przed ludźmi, boty to wypełniają --}}
          <div style="position:absolute;left:-9999px;opacity:0;pointer-events:none" aria-hidden="true" tabindex="-1">
            <label for="website">Nie wypełniaj tego pola</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" value="">
          </div>

          {{-- Timestamp: czas załadowania formularza --}}
          <input type="hidden" name="_form_ts" id="_form_ts" value="">

          <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-1 field-group">
              <label for="f-name" class="field-label text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant" data-for="name">IMIĘ I NAZWISKO *</label>
              <input
                name="name"
                id="f-name"
                value="{{ old('name') }}"
                autocomplete="name"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all @error('name') border-orange-400 @enderror"
                placeholder="Imię i Nazwisko"
                type="text"
              />
              <p class="field-error text-[10px] text-orange-400 font-label uppercase tracking-widest hidden">Pole wymagane</p>
              @error('name')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
              @enderror
            </div>
            <div class="space-y-1 field-group">
              <label for="f-company" class="field-label text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant" data-for="company">FIRMA *</label>
              <input
                name="company"
                id="f-company"
                value="{{ old('company') }}"
                autocomplete="organization"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all @error('company') border-orange-400 @enderror"
                placeholder="Nazwa firmy"
                type="text"
              />
              <p class="field-error text-[10px] text-orange-400 font-label uppercase tracking-widest hidden">Pole wymagane</p>
              @error('company')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-1 field-group">
              <label for="f-email" class="field-label text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant" data-for="email">EMAIL *</label>
              <input
                name="email"
                id="f-email"
                value="{{ old('email') }}"
                autocomplete="email"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all @error('email') border-orange-400 @enderror"
                placeholder="Email"
                type="email"
              />
              <p class="field-error text-[10px] text-orange-400 font-label uppercase tracking-widest hidden">Podaj poprawny adres email</p>
              @error('email')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
              @enderror
            </div>
            <div class="space-y-1 field-group">
              <label for="f-phone" class="field-label text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant" data-for="phone">TELEFON *</label>
              <input
                name="phone"
                id="f-phone"
                value="{{ old('phone') }}"
                autocomplete="tel"
                class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all @error('phone') border-orange-400 @enderror"
                placeholder="Telefon"
                type="tel"
              />
              <p class="field-error text-[10px] text-orange-400 font-label uppercase tracking-widest hidden">Podaj numer telefonu</p>
              @error('phone')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="space-y-1 field-group">
            <label for="f-use_case" class="field-label text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant" data-for="use_case">DO CZEGO UŻYWASZ TERAZ EXCELA? *</label>
            <select
              name="use_case"
              id="f-use_case"
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
            <p class="field-error text-[10px] text-orange-400 font-label uppercase tracking-widest hidden">Wybierz główne zastosowanie</p>
            @error('use_case')
              <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
            @enderror
          </div>

          <!-- Excel upload -->
          <div class="space-y-2">
            <label for="excel-upload" class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">PLIK EXCEL (opcjonalnie)</label>
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
                    <span class="text-on-surface-variant/80">tylko struktura — usuń dane przed wysłaniem</span>
                  </div>
                </div>
              </div>
            </div>
            @error('excel_file')
              <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest">{{ $message }}</p>
            @enderror
          </div>

          <div class="space-y-1">
            <label for="f-message" class="text-[10px] font-label uppercase tracking-[0.2em] text-on-surface-variant">OPIS WYZWANIA (opcjonalnie)</label>
            <textarea
              name="message"
              id="f-message"
              class="w-full bg-surface-container-lowest border-0 border-b border-primary/30 py-3 text-sm text-on-surface placeholder-on-surface-variant/40 transition-all resize-none leading-relaxed"
              placeholder="Opisz swoje wyzwania... ile osób korzysta z arkusza, co jest w nim najtrudniejsze, co chciałbyś usprawnić."
              rows="4"
            >{{ old('message') }}</textarea>
          </div>

          <div class="space-y-3 pt-2">
            <div class="field-group">
              <div class="flex items-start gap-3">
                <input
                  id="f-consent"
                  name="consent"
                  type="checkbox"
                  value="1"
                  {{ old('consent') ? 'checked' : '' }}
                  class="mt-1 w-4 h-4 bg-surface-container-lowest border border-primary/40 rounded-none accent-cyan-400 cursor-pointer flex-shrink-0"
                />
                <label for="f-consent" class="field-label text-xs text-on-surface-variant leading-relaxed cursor-pointer" data-for="consent">
                  Wyrażam zgodę na przetwarzanie danych osobowych w celu odpowiedzi na zapytanie. Twoje dane są bezpieczne i nie będą udostępniane osobom trzecim. *
                </label>
              </div>
              <p class="field-error text-[10px] text-orange-400 font-label uppercase tracking-widest hidden mt-1 ml-7">Zgoda jest wymagana</p>
              @error('consent')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest mt-1 ml-7">{{ $message }}</p>
              @enderror
            </div>

            <div class="field-group">
              <div class="flex items-start gap-3">
                <input
                  id="f-rodo"
                  name="rodo"
                  type="checkbox"
                  value="1"
                  {{ old('rodo') ? 'checked' : '' }}
                  class="mt-1 w-4 h-4 bg-surface-container-lowest border border-primary/40 rounded-none accent-cyan-400 cursor-pointer flex-shrink-0"
                />
                <label for="f-rodo" class="field-label text-xs text-on-surface-variant leading-relaxed cursor-pointer" data-for="rodo">
                  Zapoznałem się z <a href="{{ route('privacy') }}" target="_blank" class="text-primary hover:underline">Polityką Prywatności</a>. *
                </label>
              </div>
              <p class="field-error text-[10px] text-orange-400 font-label uppercase tracking-widest hidden mt-1 ml-7">Potwierdzenie jest wymagane</p>
              @error('rodo')
                <p class="text-[10px] text-orange-400 font-label uppercase tracking-widest mt-1 ml-7">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <button
            id="form-submit-btn"
            type="submit"
            class="cta-main w-full bg-primary-container text-on-primary py-4 font-label font-bold uppercase tracking-[0.2em] text-sm shadow-[0_0_15px_rgba(0,212,255,0.2)] transition-all"
          >
            <span id="btn-label">SPRAWDŹ, CZY TO MA SENS DLA TWOJEJ FIRMY →</span>
            <span id="btn-sending" class="hidden">WYSYŁANIE...</span>
          </button>

          <p class="text-center text-[10px] font-label uppercase text-on-surface-variant tracking-widest">
            Bez zobowiązań // Odpowiedź &lt; 24h // Pierwsza konsultacja gratis
          </p>
        </form>
      @endif

    </div>

  </div>
</section>

@if(session('success') || $errors->any())
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var target = document.getElementById('{{ session('success') ? 'form-success' : 'form-errors' }}');
    if (target) setTimeout(function () { target.scrollIntoView({ behavior: 'smooth', block: 'center' }); }, 100);
  });
</script>
@endif

<script>
(function () {
  // Timestamp — ustaw czas załadowania
  var ts = document.getElementById('_form_ts');
  if (ts) ts.value = Math.floor(Date.now() / 1000);

  var form = document.getElementById('contact-form');
  if (!form) return;

  function markInvalid(group, input) {
    if (input) {
      input.classList.add('!border-orange-400');
      input.classList.remove('border-primary/30');
    }
    var label = group.querySelector('.field-label');
    if (label) label.classList.add('!text-orange-400');
    var err = group.querySelector('.field-error');
    if (err) err.classList.remove('hidden');
  }

  function markValid(group, input) {
    if (input) {
      input.classList.remove('!border-orange-400');
    }
    var label = group.querySelector('.field-label');
    if (label) label.classList.remove('!text-orange-400');
    var err = group.querySelector('.field-error');
    if (err) err.classList.add('hidden');
  }

  // Czyść podświetlenie przy wpisywaniu
  form.querySelectorAll('input, select, textarea').forEach(function (el) {
    el.addEventListener('input', function () {
      var group = el.closest('.field-group');
      if (group) markValid(group, el);
    });
    el.addEventListener('change', function () {
      var group = el.closest('.field-group');
      if (group) markValid(group, el);
    });
  });

  form.addEventListener('submit', function (e) {
    var valid = true;
    var firstInvalid = null;

    // Pola tekstowe / select
    [
      { id: 'f-name',     check: function(el) { return el.value.trim() !== ''; } },
      { id: 'f-company',  check: function(el) { return el.value.trim() !== ''; } },
      { id: 'f-email',    check: function(el) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(el.value.trim()); } },
      { id: 'f-use_case', check: function(el) { return el.value !== ''; } },
      { id: 'f-phone',    check: function(el) { return el.value.trim() !== ''; } },
    ].forEach(function (rule) {
      var el = document.getElementById(rule.id);
      var group = el && el.closest('.field-group');
      if (!el || !group) return;
      if (!rule.check(el)) {
        markInvalid(group, el);
        valid = false;
        if (!firstInvalid) firstInvalid = el;
      } else {
        markValid(group, el);
      }
    });

    // Checkboxy
    ['f-consent', 'f-rodo'].forEach(function (id) {
      var el = document.getElementById(id);
      var group = el && el.closest('.field-group');
      if (!el || !group) return;
      if (!el.checked) {
        markInvalid(group, null);
        valid = false;
        if (!firstInvalid) firstInvalid = el;
      } else {
        markValid(group, null);
      }
    });

    if (!valid) {
      e.preventDefault();
      if (firstInvalid) firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }

    // Stan ładowania
    var btn = document.getElementById('form-submit-btn');
    document.getElementById('btn-label').classList.add('hidden');
    document.getElementById('btn-sending').classList.remove('hidden');
    btn.disabled = true;
    btn.classList.add('opacity-60', 'cursor-not-allowed');
  });
})();
</script>
