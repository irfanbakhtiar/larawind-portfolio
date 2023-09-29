<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Irfan Bakhtiar</title>

    {{-- ICON --}}
    <link rel="icon" href="{{ asset('img/favicon.png') }}?v=<?= date('YmdHis') ?>">

    {{-- TAILWIND CSS --}}
    <link href="{{ asset('css/app.css') }}?v=<?= date('YmdHis') ?>" rel="stylesheet">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Font Poppins --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    @include('layouts.nav')
    @yield('container')

    {{-- BASIC SCRIPT --}}
    <script src="{{ asset('js/script.js') }}?v=<?= date('YmdHis') ?>"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    @include('layouts.foot')
</body>

</html>
