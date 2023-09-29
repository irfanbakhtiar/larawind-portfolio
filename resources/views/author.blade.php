@extends('layouts.project')
@section('container')
    <div class="pt-6 pb-6 bg-gray-50">
        <div class="container">
            <div class="w-full mx-auto text-center" data-aos="fade-down">
                <h2 class="text-3xl lg:text-4xl font-bold font-sans text-dark mb-8">Author</h2>
                <p class="text-base lg:text-lg leading-relaxed text-secondary px-4 lg:px-48">About the project author.</p>
            </div>
        </div>
    </div>
    <div class="pt-10 lg:px-20 px-0">
        <div class="container">
            <div class="flex flex-wrap" data-aos="fade-up">
                <div class="w-full px-4 md:w-1/2">
                    <div class="relative">
                        <div class="pb-4">
                            <img class="h-14 w-14 bg-gray-100 rounded-full hover:opacity-80"
                                src="/img/profile.png?v=<?= date('YmdHis') ?>">
                        </div>
                        <h5 class="text-xl font-bold leading-none text-dark mb-3">{{ $author->name }}
                        </h5>
                        <div class="flex flex-row items-center mt-1">
                            <svg fill="currentColor" class="text-dark mr-2 w-5 h-5" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z">
                                </path>
                                <path
                                    d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z">
                                </path>
                            </svg>
                            <span class="text-secondary text-base tracking-wide">{{ $author->job }}</span>
                        </div>
                        <div class="flex flex-row items-center mt-1 mb-3">
                            <svg fill="currentColor" class="text-dark mr-2 w-5 h-5" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z">
                                </path>
                            </svg>
                            <span class="text-secondary text-base tracking-wide">{{ $author->location }}</span>
                        </div>
                        <span class="block text-secondary text-base tracking-wide truncate">Email address</span>
                        <span
                            class=" text-gray-700 text-base font-medium tracking-normal hover:text-primary hover:underline hover:underline-offset-8">
                            <a href="mailto:m.irfanbakhtiar99@gmail.com">{{ $author->email }}</a>
                        </span>
                    </div>
                </div>
                <div class="w-full pt-10 md:pt-0 px-4 md:w-1/2">
                    <div class="relative">
                        <h5 class="text-xl font-bold leading-none text-dark mb-4">Information
                        </h5>
                        <h5 class="text-lg font-semibold leading-none text-dark mb-1">About me
                        </h5>
                        <span class="text-base text-secondary mb-3"> {{ $author->about }}</span>
                    </div>
                </div>
            </div>
            <div class="pt-8 pb-8 px-4 md:px-0 sm:text-right" data-aos="zoom-in">
                <a href="/"
                    class="inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white bg-primary border border-transparent rounded-full md:w-auto hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary hover:underline">
                    Back to home
                </a>
            </div>
        </div>
    </div>
@endsection
