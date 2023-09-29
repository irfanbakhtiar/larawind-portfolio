@extends('layouts.admin.main')
@section('container')

    <body class="bg-gray-50">
        <div class="container py-auto pt-14">
            <div class="flex flex-wrap mt-4">
                <div class="hidden lg:block w-full self-start px-4 xl:w-1/2 lg:w-1/2">
                    <div class="mx-auto mb-12 mt-4">
                        <h4 class="font-bold text-left text-dark text-2xl">
                            Admin Panel
                        </h4>
                        <h4 class="font-medium text-secondary">Manage your portfolio</h4>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        <li class="flex py-4 first:pt-0 last:pb-0">
                            <svg fill="#374151" class="max-h-full" style="position:absolute;left:0 width="22" height="22"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z">
                                </path>
                            </svg>
                            <div class="ml-2 xl:-mt-1 lg:-mt-0 -mt-0 px-6">
                                <h3 class="xl:text-[22px] lg:text[20px] text-left font-semibold text-gray-700">Get started
                                </h3>
                                <p class="text-base pt-1 text-left text-gray-400">Start writing your project easily and
                                    quickly.</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="divide-y pt-8 divide-gray-200">
                        <li class="flex py-4 first:pt-0 last:pb-0">
                            <svg fill="#374151" class="max-h-full" style="position:absolute;left:0 width="22" height="22"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z">
                                </path>
                            </svg>
                            <div class="ml-2 xl:-mt-1 lg:-mt-0 px-6">
                                <h3 class="xl:text-[22px] lg:text[20px] text-left font-semibold text-gray-700">Support any
                                    portfolio model
                                </h3>
                                <p class="text-base pt-1 text-left text-gray-400">Show off your experience to the world.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="divide-y pt-8 divide-gray-200">
                        <li class="flex py-4 first:pt-0 last:pb-0">
                            <svg fill="#374151" class="max-h-full" style="position:absolute;left:0 width="22" height="22"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z">
                                </path>
                            </svg>
                            <div class="ml-2 xl:-mt-1 lg:-mt-0 -mt-1 px-6">
                                <h3 class="xl:text-[22px] lg:text[20px] text-left font-semibold text-gray-700">Navigation
                                </h3>
                                <p class="text-base pt-1 text-left text-gray-400">Good website navigation makes it easier
                                    for visitors to explore your portfolio.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="w-full self-center xl:w-1/2 lg:w-1/2">
                    <div class="max-w-full mx-auto mb-8">
                        <div class="bg-white rounded-lg overflow-hidden mb-10">
                            <div class="max-w-xl px-10 text-left mb-4 mt-6">
                                <h4 class="text-left text-2xl font-bold leading-9 tracking-tight text-dark mb-4">
                                    Log In
                                </h4>
                                <span class="text-sm text-gray-600">Welcome to admin panel, please put
                                    your login credentials below to start using the app.</span>
                            </div>
                            <div class="px-10">
                                @if (session()->has('loginError'))
                                    <div id="alert-2" class="flex p-4 mb-4 text-red-700 rounded-lg bg-red-100"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 sm:text-sm text-xs font-medium">
                                            {{ session('loginError') }}
                                        </div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                                            onclick="closeAlert(event)" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                                @error('email')
                                    <div id="alert-2" class="flex p-4 mb-4 text-red-700 rounded-lg bg-red-100" role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 sm:text-sm text-xs font-medium">
                                            {{ $message }}
                                        </div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                                            onclick="closeAlert(event)" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @enderror
                            </div>
                            <div class="py-2 px-6">
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="w-full px-4 mb-6">
                                        <label for="email"
                                            class="block text-sm md:text-base font-medium leading-6">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="mt-1 px-3 py-3 text-gray-600 bg-white border border-gray-200 focus:outline-none focus:border-primary focus:ring-primary block w-full rounded-lg sm:text-sm focus:ring-1"
                                            placeholder="you@example.com" required value="{{ old('email') }}" />
                                    </div>
                                    <div class="w-full px-4 mb-8">
                                        <div class="flex items-center justify-between">
                                            <label for="password"
                                                class="block text-sm md:text-base font-medium leading-6">Password</label>
                                        </div>
                                        <input type="password" id="password" name="password"
                                            class="mt-1 px-3 py-3 text-gray-600 bg-white border border-gray-200 focus:outline-none focus:border-primary focus:ring-primary block w-full rounded-lg sm:text-sm focus:ring-1"
                                            placeholder="••••••••" required value="{{ old('password') }}" />
                                    </div>
                                    <div class="w-full px-4 mb-8">
                                        <button
                                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:bg-opacity-80 transition duration-500 "
                                            type="submit">Login</button>
                                    </div>
                                </form>
                                <div class="w-full px-4 mt-8 mb-8 text-center">
                                    <span class="text-xs md:text-sm text-gray-500">&copy; 2023, <a href="/"
                                            class="hover:text-primary hover:underline hover:underline-offset-4">Muhammad
                                            Irfan Bakhtiar</a>. All rights reserved.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
