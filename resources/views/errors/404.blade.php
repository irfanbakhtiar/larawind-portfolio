<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>
    {{-- ICON --}}
    <link rel="icon" href="{{ asset('img/favicon.png') }}?v=<?= date('YmdHis') ?>">

    {{-- TAILWIND CSS --}}
    <link href="{{ asset('css/app.css') }}?v=<?= date('YmdHis') ?>" rel="stylesheet">

    {{-- Font Poppins --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div
        class="lg:px-24 lg:py-24 md:py-20 md:px-44 px-4 py-24 items-center flex justify-center flex-col-reverse lg:flex-row md:gap-28 gap-16">
        <div class="xl:pt-24 w-full xl:w-1/2 relative pb-12 lg:pb-0">
            <div class="relative">
                {{-- <div class="absolute"> --}}
                <div class="">
                    <h1 class="my-2 text-gray-800 font-bold text-2xl">
                        It looks like you're lost on this site
                    </h1>
                    <p class="mt-2 mb-8 text-gray-800">Please visit our homepage to get where you need to go.</p>
                    <a href="/"
                        class="sm:w-full lg:w-auto my-2 font-medium leading-6 border rounded-full py-4 px-8 text-center bg-primary text-white hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary hover:underline">Go
                        back home</a>
                </div>
                {{-- </div> --}}
                {{-- <div>
                    <img src="https://i.ibb.co/G9DC8S0/404-2.png" />
                </div> --}}
            </div>
        </div>
        <div class="md:block">
            <img src="/img/404.png" width="480" height="380" />
        </div>
    </div>
</body>

</html>
