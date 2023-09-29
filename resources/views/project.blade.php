@extends('layouts.project')
@section('container')
    <div class="py-16 bg-gray-50">
        <div class="container">
            <div class="w-full lg:px-36 px-4 overflow-x-hidden">
                <div class="mx-auto text-center">
                    <h2 class="text-2xl lg:text-3xl font-semibold leading-relaxed text-dark">{{ $project->title }}
                    </h2>
                    <span class="hidden md:flex justify-center text-sm text-gray-700 pb-2 pt-2">
                        <svg fill="none" class="w-5 h-5 mr-1" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                            </path>
                        </svg>By
                        <a href="/author/{{ $project->author->username }}"
                            class="hover:text-primary underline underline-offset-2 ml-1 mr-1"
                            title="Author">{{ $project->author->name }}</a>on
                        {{ $project->created_at->diffForHumans() }}
                    </span>
                    <span
                        class="text-xs font-medium inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out uppercase last:mr-0 mr-1 cursor-pointer"
                        title="Category">
                        {{ $project->categories->name }}
                    </span>
                    <div class="mx-auto pt-4 pb-8">
                        @if ($project->image)
                            <div class="mx-auto flex justify-center rounded-lg">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->categories->name }}"
                                    class="mt-4 mb-2 rounded-lg">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/700x360?{{ $project->categories->name }}"
                                alt="{{ $project->categories->name }}"
                                class="mt-4 mb-2 rounded-lg mx-auto flex justify-center">
                        @endif
                    </div>
                </div>
                <span class="text-base text-gray-600 lg:text-lg leading-relaxed pt-10">{!! $project->body !!}</span>
                <div class="py-6 sm:text-right" data-aos="zoom-in">
                    <a href="/projects"
                        class="inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white bg-primary border border-transparent rounded-full md:w-auto hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary hover:underline">
                        Back to all projects
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
