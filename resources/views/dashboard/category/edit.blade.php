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
                                <a href="/dashboard/category"
                                    class="ml-1 text-sm font-semibold text-dark hover:text-primary md:ml-2">Category</a>
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
                                <a href="/dashboard/category/{{ $categories->slug }}/edit"
                                    class="ml-1 text-sm font-semibold text-primary md:ml-2 line-clamp-1">
                                    {{ $categories->name }}</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="relative px-5 py-3 mb-4 overflow-x-auto bg-white rounded-lg content">
                    <h3 class="md:text-2xl text-lg text-dark font-semibold tracking-tight">
                        <div class="mb-4">
                            Edit Category
                        </div>
                    </h3>
                    <form method="post" action="/dashboard/category/{{ $categories->slug }}">
                        @method('put')
                        @csrf
                        @error('name')
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
                        <div class="mb-4">
                            <label for="name"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">Title</label>
                            <input type="text" id="name" name="name"
                                class=" bg-white border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Your category" required value="{{ old('name', $categories->name) }}">
                        </div>
                        <div class="mb-4">
                            <label for="slug"
                                class="block mb-2 text-sm font-semibold text-gray-700 tracking-wide">Slug</label>
                            <input type="text" id="slug" name="slug"
                                class="bg-gray-100 border border-gray-200 text-gray-600 text-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary block w-full p-2.5"
                                readonly required value="{{ old('slug', $categories->slug) }}">
                        </div>
                        <button type="submit"
                            class="bg-primary hover:bg-opacity-80 text-white rounded-full text-sm font-medium px-4 py-2.5 mb-2 text-center inline-flex items-center">
                            <svg fill="none" class="w-5 h-5 mr-1" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                </path>
                            </svg>
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    {{-- CONTENT MENU END --}}
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/category/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
