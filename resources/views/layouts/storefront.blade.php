<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? 'Saaremaiselt mÖnus käsitöö' }}">
    <title>{{ $title ?? 'WÖÖL' }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="{{ asset('/images/logotrans.png') }}">
    @livewireStyles

    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0PYLEN03HH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0PYLEN03HH');
</script>

<body class="antialiased">
    @livewire('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>