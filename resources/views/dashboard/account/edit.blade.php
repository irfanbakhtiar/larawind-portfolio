@extends('layouts.admin.main')

@section('container')
    {{-- CONTENT MENU START --}}

    <body class="bg-gray-50">
        <div class="p-6 lg:p-4 lg:ml-64 ">
            <div class="lg:px-4 lg:py-2 pt-16 rounded-lg content lg:ml-10">
                <nav class="flex px-5 py-3 mb-4 text-dark rounded-lg bg-white">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/dashboard" class="text-sm">
                                <span class="inline-flex items-center text-sm font-semibold text-dark hover:text-primary">

                                    <svg class="w-4 h-4 mr-2" fill="currentColor" stroke="currentColor" width="20"
                                        height="20" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z">
                                        </path>
                                    </svg>
                                    Admin
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-dark" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fillRule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clipRule="evenodd"></path>
                                </svg>
                                <a href="/dashboard/account"
                                    class="ml-1 text-sm font-semibold text-dark hover:text-primary md:ml-2">Account</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-dark" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fillRule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clipRule="evenodd"></path>
                                </svg>
                                <a href="/dashboard/account/{{ $user->id }}/edit"
                                    class="ml-1 text-sm font-semibold text-primary md:ml-2">{{ Auth::user()->name }}</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="relative px-5 py-3 mb-4 overflow-x-auto bg-white rounded-lg content">
                    <h3 class="md:text-2xl text-lg text-dark font-semibold tracking-tight">
                        <div class="mb-4">
                            Edit Account
                        </div>
                    </h3>
                    <form method="post" action="/dashboard/account/{{ $user->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        @error('image')
                            <div id="alert-3" class="loading flex p-4 mb-4 text-red-800 rounded-lg bg-red-100 "
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">
                                    {{ $message }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                                    onclick="closeAlert(event)" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        @enderror
                        @error('email')
                            <div id="alert-3" class="loading flex p-4 mb-4 text-red-800 rounded-lg bg-red-100 "
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">
                                    {{ $message }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                                    onclick="closeAlert(event)" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        @enderror
                        @error('job')
                            <div id="alert-3" class="loading flex p-4 mb-4 text-red-800 rounded-lg bg-red-100 "
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">
                                    {{ $message }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                                    onclick="closeAlert(event)" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        @enderror
                        @error('location')
                            <div id="alert-3" class="loading flex p-4 mb-4 text-red-800 rounded-lg bg-red-100 "
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">
                                    {{ $message }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                                    onclick="closeAlert(event)" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        @enderror
                        @error('about')
                            <div id="alert-3" class="loading flex p-4 mb-4 text-red-800 rounded-lg bg-red-100 "
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">
                                    {{ $message }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8"
                                    onclick="closeAlert(event)" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        @enderror
                        <div class="mb-4">
                            <label for="username"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">Username</label>
                            <input type="text" id="username" name="username"
                                class="bg-gray-100 border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                readonly required value="{{ old('username', $user->username) }}">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-medium text-gray-700 tracking-wide"
                                for="image">Profile
                                Picture
                            </label>
                            <input type="hidden" name="oldImage" value="{{ Auth::user()->image }}">
                            @if (\Auth::user()->image == true)
                                <img src="{{ asset('storage/' . \Auth::user()->image) }}"
                                    class="img-preview mb-3 rounded-full max-w-[100] max-h-[100]">
                            @else
                                <img class="hidden img-preview mb-3 rounded-full max-w-[100] max-h-[100]">
                            @endif
                            <img class="hidden img-preview mb-3 rounded-full max-w-[100] max-h-[100]">
                            <input type="file"
                                class="block file:rounded-lg file:bg-primary file:hover:bg-opacity-80 file:border-none file:font-medium file:text-white file:text-sm file:tracking-wide file:px-4 file:py-2.5 file:mr-2 file:cursor-pointer w-full text-sm font-normal text-dark border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none"
                                id="image" name="image" onchange="previewImage()">
                            <p class="mt-1 md:text-sm text-xs text-secondary" id="image">SVG, PNG, JFIF or JPG
                                (MIN.
                                50x50px MAX. 100x100px) (MAX SIZE. 1024kb).</p>
                        </div>
                        <div class="mb-4">
                            <label for="name"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">Name</label>
                            <input type="text" id="name" name="name"
                                class=" bg-white border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Your name" required value="{{ old('name', $user->name) }}">
                        </div>
                        <div class="mb-4">
                            <label for="email"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">Email</label>
                            <input type="email" id="email" name="email"
                                class=" bg-white border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Your email" required value="{{ old('email', $user->email) }}">
                        </div>
                        <div class="mb-4">
                            <label for="job"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">Job</label>
                            <input type="text" id="job" name="job"
                                class=" bg-white border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Your job" required value="{{ old('job', $user->job) }}">
                        </div>
                        <div class="mb-4">
                            <label for="location"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">Location</label>
                            <input type="text" id="location" name="location"
                                class=" bg-white border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Your location" required value="{{ old('location', $user->location) }}">
                        </div>
                        <div class="mb-4">
                            <label for="about"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">About
                                me</label>
                            <textarea id="about" name="about"
                                class=" bg-white border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                rows="5" placeholder="About me">{{ old('about', $user->about) }}</textarea>
                        </div>
                        <button type="submit"
                            class="bg-primary hover:bg-opacity-80 text-white rounded-full text-sm font-medium px-4 py-2.5 mb-2 text-center inline-flex items-center">
                            <svg fill="currentColor" class="w-5 h-5 mr-2 -ml-1" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z">
                                </path>
                                <path
                                    d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z">
                                </path>
                            </svg>Update</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    {{-- CONTENT MENU END --}}
@endsection
