<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>WÖÖL</title>
    <meta
        name="description"
        content="Saaremaiselt mÖnus käsitöökaup."
    >
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
    <script
        defer
        src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <link
        rel="icon"
        href="{{ asset('favicon.svg') }}"
    >
    @livewireStyles

    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
</head>

<body class="antialiased text-gray-900">
    @livewire('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>
