<!DOCTYPE html>
<html class="dark" lang="pl">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/svg+xml" href="/favicon.svg"/>
<title>@yield('title', 'JAKAMO // ARCHITEKT — Koniec z Excelem. Twoja aplikacja webowa.')</title>
<meta name="description" content="@yield('description', 'Zamieniam Twoje arkusze Excel na dedykowane aplikacje webowe. CRM, magazyn, system zleceń — skrojone pod Twój biznes.')"/>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
@vite(['resources/css/app.css', 'resources/js/app.js'])

@if(config('services.gtm.id'))
<!-- Google Consent Mode v2 — domyślnie odrzucone, aktualizowane po zgodzie użytkownika -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}

  // Odczytaj zapisaną zgodę
  (function(){
    var consent = null;
    try { consent = JSON.parse(localStorage.getItem('jakamo_cookie_consent')); } catch(e){}
    var analytics = consent && consent.analytics === true ? 'granted' : 'denied';
    gtag('consent', 'default', {
      'ad_storage':            'denied',
      'ad_user_data':          'denied',
      'ad_personalization':    'denied',
      'analytics_storage':     analytics,
      'wait_for_update':       500
    });
    gtag('set', 'ads_data_redaction', true);
    gtag('set', 'url_passthrough', true);
  })();
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','{{ config('services.gtm.id') }}');</script>
@endif
@if(config('services.ga.id'))
<!-- Google Analytics 4 — respektuje Consent Mode v2 -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga.id') }}"></script>
<script>gtag('config', '{{ config('services.ga.id') }}');</script>
@endif
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-on-primary">

@if(config('services.gtm.id'))
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
@endif

<!-- Scanline overlay -->
<div class="fixed inset-0 scanline z-30 opacity-60 pointer-events-none"></div>

@yield('content')

<x-floating-contact />
<x-cookie-banner />

</body>
</html>
