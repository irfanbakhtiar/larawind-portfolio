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
                                <a href="/dashboard/project"
                                    class="ml-1 text-sm font-semibold text-dark hover:text-primary md:ml-2">{{ $title }}</a>
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
                                <a href="/dashboard/project/{{ $projects->slug }}"
                                    class="ml-1 text-sm font-semibold text-primary md:ml-2 line-clamp-1">
                                    {{ $projects->title }}</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="flex px-5 py-3 mb-4 text-dark rounded-lg bg-white">
                    <div class="w-full self-center lg:w-1/2">
                        <p class="text-dark font-bold">Detail Project</p>
                        <p class="text-gray-500 text-sm inline-block">See the full project</p>
                    </div>
                    <div class="w-full self-center lg:w-1/2 text-right mt-2">
                        <a href="/dashboard/project/{{ $projects->slug }}/edit"
                            class="text-white bg-primary hover:bg-opacity-80 rounded-full text-sm font-medium px-2.5 md:px-4 py-2.5 mb-2 text-center inline-flex items-center">
                            <svg fill="none" class="w-5 h-5 md:mr-1" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                </path>
                            </svg>
                            <span class="hidden md:block">Edit</span>
                        </a>
                        <button data-te-toggle="modal" data-te-target="#deleteProject_{{ $projects->slug }}"
                            class="text-white bg-red-600 hover:bg-opacity-80 rounded-full text-sm font-medium px-2.5 md:px-4 py-2.5 text-center inline-flex items-center ml-0 mb-3">
                            <svg fill="none" class="w-5 h-5 md:mr-1" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                                </path>
                            </svg>
                            <span class="hidden md:block">Delete</span>
                        </button>
                    </div>
                </div>
                <div class="max-w overflow-x-auto bg-white rounded-lg">
                    <div class="max-w rounded-t-lg bg-gray-100 px-5 py-3 mb-4">
                        <h3 class="md:text-2xl text-xl text-dark font-bold tracking-tight text-left">
                            {{ $projects->title }}
                        </h3>
                        <span class="lg:text-sm text-xs text-gray-600">
                            {{ $projects->categories->name }}
                            project by <a href="/dashboard/account"
                                class="hover:text-primary">{{ $projects->author->name }}</a>
                            on {{ $projects->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <div class="px-5 mb-4">
                        @if ($projects->image)
                            <div class="mx-auto flex justify-center rounded-lg">
                                <img src="{{ asset('storage/' . $projects->image) }}"
                                    alt="{{ $projects->categories->name }}" class="mt-4 mb-2 rounded-lg">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/700x360?{{ $projects->categories->name }}"
                                alt="{{ $projects->categories->name }}"
                                class="mt-4 mb-2 rounded-lg mx-auto flex justify-center">
                        @endif
                        <p class="text-base text-gray-600 mb-4 mt-4">
                            {!! $projects->body !!}
                        </p>
                    </div>
                    <div class="max-w-full rounded-b-lg bg-gray-100 px-5 py-3 text-right">
                        <a href="/dashboard/project/"
                            class="text-white bg-emerald-600 hover:bg-opacity-80 rounded-full text-sm font-medium px-4 py-2 text-center inline-flex items-center">
                            <svg fill="none" class="w-5 h-5 mr-1" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
                            </svg>
                            Back
                        </a>
                    </div>
                </div>
            </div>

            {{-- MODAL DELETE --}}
            <div data-te-modal-init
                class="fixed top-0 left-0 z-50 hidden h-full w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 md:h-full bg-dark bg-opacity-70"
                id="deleteProject_{{ $projects->slug }}" tabindex="-1" aria-modal="true"
                aria-labelledby="exampleModalCenterTitle" role="dialog">
                <div data-te-modal-dialog-ref
                    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px] ">
                    <div
                        class="pointer-events-auto relative flex w-full flex-col rounded-lg border-none bg-gray-50 bg-clip-padding text-current shadow-lg outline-none">
                        <button data-te-modal-dismiss type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-dark rounded-full text-sm p-1.5 ml-auto inline-flex items-center">

                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg fill="none" class="mx-auto mb-2 text-red-500 w-10 h-10" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                                </path>
                            </svg>
                            <form action="/dashboard/project/{{ $projects->slug }}" method="POST">
                                @method('delete')
                                @csrf
                                <div class="text-center mb-5">
                                    <h3 class="text-lg font-medium text-dark">
                                        Are you sure you want to delete this project?</h3>
                                    <span class="text-sm font-normal text-gray-500">
                                        {{ $projects->title }}
                                    </span>
                                </div>
                                <button type="submit"
                                    class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Yes, I'm sure
                                </button>
                                <button data-te-modal-dismiss type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-dark focus:z-10 inline-flex">No,
                                    cancel</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    {{-- CONTENT MENU END --}}
@endsection
