<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Muhammad Irfan Bakhtiar</title>

    {{-- ICON --}}
    <link rel="icon" href="{{ asset('img/favicon.png') }}?v=<?= date('YmdHis') ?>">

    {{-- TAILWIND CSS --}}
    <link href="{{ asset('css/app.css') }}?v=<?= date('YmdHis') ?>" rel="stylesheet">

    {{-- Font Poppins --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    @if (Auth::check())
        @include('layouts.sidenav')
    @endif
    @yield('container')

    {{-- BASIC SCRIPT --}}
    <script src="{{ asset('js/admin/script.js') }}?v=<?= date('YmdHis') ?>"></script>

    {{-- FLOWBITE JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


    {{-- TAILWIND ELEMENTS --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    {{-- ALPINE JS --}}
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.x.x/dist/alpine.min.js" defer></script>
    @stack('tinymce')
    @stack('chart')
</body>

</html>
