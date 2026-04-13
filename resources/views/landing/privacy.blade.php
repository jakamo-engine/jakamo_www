@extends('layouts.app')

@section('title', 'Polityka Prywatności — JAKAMO')
@section('description', 'Polityka prywatności serwisu jakamo.pl. Informacje o przetwarzaniu danych osobowych, cookies i prawach użytkownika.')

@section('content')
<x-nav />

<main class="pt-36 pb-24 px-6">
  <div class="max-w-3xl mx-auto">

    <div class="mb-12">
      <div class="text-[10px] font-label uppercase tracking-[0.3em] text-cyan-400 mb-3">// DANE_PRAWNE</div>
      <h1 class="text-4xl md:text-5xl font-headline font-bold uppercase mb-4">
        Polityka <span class="text-primary cyber-glow">Prywatności</span>
      </h1>
      <p class="text-xs text-on-surface-variant font-label uppercase tracking-widest">
        Ostatnia aktualizacja: {{ date('d.m.Y') }}
      </p>
    </div>

    <div class="space-y-10 text-sm text-on-surface-variant leading-relaxed">

      {{-- I --}}
      <section class="corner-bracket bg-surface-container p-8">
        <h2 class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-4">I. Informacje ogólne</h2>
        <p>
          Administratorem danych osobowych zbieranych za pośrednictwem strony <strong class="text-on-surface">www.jakamo.pl</strong> jest:
        </p>
        <div class="mt-4 pl-4 border-l border-primary/30 space-y-1">
          <p><strong class="text-on-surface">JAKAMO Kamil Jabłoński</strong></p>
          <p>ul. Boranta 15A/5, 61-608 Poznań</p>
          <p>NIP: 7772300065 &nbsp;|&nbsp; REGON: 366696073</p>
          <p>E-mail: <a href="mailto:kontakt@jakamo.pl" class="text-primary hover:underline">kontakt@jakamo.pl</a></p>
        </div>
        <p class="mt-4">
          Administrator dba o bezpieczeństwo danych osobowych zgodnie z wymogami Rozporządzenia Parlamentu Europejskiego i&nbsp;Rady (UE) 2016/679 (RODO) oraz polskimi przepisami o&nbsp;ochronie danych osobowych.
        </p>
      </section>

      {{-- II --}}
      <section class="corner-bracket bg-surface-container p-8">
        <h2 class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-4">II. Cel i zakres przetwarzania danych</h2>
        <div class="space-y-6">
          <div>
            <p class="text-on-surface font-medium mb-2">1. Formularz kontaktowy</p>
            <p>Przetwarzamy Twoje dane (imię i&nbsp;nazwisko, nazwa firmy, adres e-mail, numer telefonu, informacje o zastosowaniu Excela, treść wiadomości) w celu odpowiedzi na zapytanie i&nbsp;przedstawienia oferty.</p>
            <p class="mt-2 text-xs text-on-surface-variant/70">Podstawa prawna: art.&nbsp;6 ust.&nbsp;1 lit.&nbsp;b RODO (podjęcie działań przed zawarciem umowy) oraz art.&nbsp;6 ust.&nbsp;1 lit.&nbsp;a RODO (zgoda).</p>
          </div>
          <div>
            <p class="text-on-surface font-medium mb-2">2. Analiza plików Excel</p>
            <p>Przetwarzamy zawartość przesłanych plików wyłącznie w celu oceny technicznej struktury danych i&nbsp;możliwości budowy dedykowanej aplikacji.</p>
            <div class="mt-3 p-4 border border-orange-400/30 bg-orange-400/5">
              <p class="text-xs text-orange-400 font-label uppercase tracking-widest mb-1">// WAŻNE</p>
              <p class="text-xs">W trosce o bezpieczeństwo prosimy o przesyłanie plików pozbawionych danych wrażliwych (nazwisk klientów, numerów PESEL, realnych stawek). Przesłanie pliku z pełnymi danymi odbywa się na Twoją odpowiedzialność.</p>
            </div>
          </div>
          <div>
            <p class="text-on-surface font-medium mb-2">3. Analityka</p>
            <p>Korzystamy z narzędzi Google Analytics oraz Google Tag Manager w&nbsp;celu analizy ruchu na stronie i&nbsp;poprawy jakości serwisu. Narzędzia te są aktywowane <strong class="text-on-surface">wyłącznie po wyrażeniu zgody</strong> na pliki cookies analitycznych.</p>
          </div>
        </div>
      </section>

      {{-- III --}}
      <section class="corner-bracket bg-surface-container p-8">
        <h2 class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-4">III. Okres przechowywania danych</h2>
        <p>Dane osobowe zebrane za pośrednictwem formularza kontaktowego przechowujemy przez <strong class="text-on-surface">6 miesięcy</strong> od daty ostatniego kontaktu, chyba że zawarcie umowy wymaga dłuższego okresu przechowywania lub przepisy prawa nakładają taki obowiązek.</p>
      </section>

      {{-- IV --}}
      <section class="corner-bracket bg-surface-container p-8">
        <h2 class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-4">IV. Odbiorcy danych</h2>
        <p>Twoje dane są przechowywane na bezpiecznych serwerach dostawcy usług hostingowych: <strong class="text-on-surface">Hostinger</strong> (serwery zlokalizowane na terenie Unii Europejskiej).</p>
        <p class="mt-3">Dane analityczne mogą być przekazywane do <strong class="text-on-surface">Google LLC</strong> w ramach usług Google Analytics i Tag Manager. Google LLC jest certyfikowanym uczestnikiem programu EU-US Data Privacy Framework.</p>
      </section>

      {{-- V --}}
      <section class="corner-bracket bg-surface-container p-8">
        <h2 class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-4">V. Pliki cookies</h2>
        <div class="space-y-4">
          <div class="flex gap-4">
            <div class="w-2 h-2 bg-cyan-400 mt-1.5 flex-shrink-0"></div>
            <div>
              <p class="text-on-surface font-medium">Cookies niezbędne</p>
              <p class="mt-1">Wymagane do prawidłowego działania strony (sesja, token bezpieczeństwa formularza). Nie wymagają zgody i nie mogą być wyłączone.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="w-2 h-2 bg-orange-400 mt-1.5 flex-shrink-0"></div>
            <div>
              <p class="text-on-surface font-medium">Cookies analityczne</p>
              <p class="mt-1">Google Analytics, Google Tag Manager. Aktywowane wyłącznie po Twojej zgodzie. Możesz wycofać zgodę w dowolnym momencie, klikając <button onclick="jakamoCookieReset()" class="text-primary hover:underline cursor-pointer">Ustawienia cookies</button> w stopce strony.</p>
            </div>
          </div>
        </div>
      </section>

      {{-- VI --}}
      <section class="corner-bracket bg-surface-container p-8">
        <h2 class="text-[10px] font-label uppercase tracking-[0.2em] text-cyan-400 mb-4">VI. Twoje prawa</h2>
        <p class="mb-4">Zgodnie z RODO przysługuje Ci prawo do:</p>
        <ul class="space-y-2">
          @foreach([
            'dostępu do swoich danych oraz otrzymania ich kopii',
            'sprostowania (poprawiania) swoich danych',
            'usunięcia danych („prawo do bycia zapomnianym")',
            'ograniczenia przetwarzania danych',
            'sprzeciwu wobec przetwarzania danych',
            'przenoszenia danych',
            'cofnięcia zgody w dowolnym momencie (bez wpływu na przetwarzanie dokonane przed cofnięciem)',
            'wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych (ul. Stawki 2, 00-193 Warszawa, uodo.gov.pl)',
          ] as $right)
          <li class="flex gap-3">
            <span class="text-cyan-400 font-label text-xs mt-0.5">—</span>
            <span>{{ $right }}</span>
          </li>
          @endforeach
        </ul>
        <p class="mt-4">W celu realizacji praw skontaktuj się: <a href="mailto:kontakt@jakamo.pl" class="text-primary hover:underline">kontakt@jakamo.pl</a></p>
      </section>

    </div>

    <div class="mt-12 text-center">
      <a href="/" class="text-[11px] font-label uppercase tracking-[0.15em] text-on-surface-variant hover:text-primary transition-colors">
        ← Powrót do strony głównej
      </a>
    </div>

  </div>
</main>

<x-footer />
