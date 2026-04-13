<!DOCTYPE html>
<html class="dark" lang="pl">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>JAKAMO // ARCHITEKT — Koniec z Excelem. Twoja aplikacja webowa.</title>
<meta name="description" content="Zamieniamy Twoje arkusze Excel na dedykowane aplikacje webowe. CRM, magazyn, system zleceń — skrojone pod Twój biznes."/>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-on-primary">

<!-- Scanline overlay -->
<div class="fixed inset-0 scanline z-30 opacity-60 pointer-events-none"></div>

@yield('content')

</body>
</html>
