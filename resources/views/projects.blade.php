@extends('layouts.project')
@section('container')
    <div class="pt-16 pb-16 bg-gray-50">
        <div class="container">
            <div class="w-full mx-auto text-center">
                <h2 class="text-3xl lg:text-4xl font-bold font-sans text-dark mb-8">Projects</h2>
                <p class="text-base lg:text-lg leading-relaxed text-secondary px-4 lg:px-48">All completed projects.</p>
            </div>
        </div>
    </div>
    <div class="pt-16 lg:px-20 px-0">
        <div class="container">
            <div class="flex flex-wrap">
                @if (!empty($projects) && $projects->count())
                    @foreach ($projects as $project)
                        <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
                            <div class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden mb-10">
                                @if ($project->image)
                                    <div class="w-full">
                                        <img src="{{ asset('storage/' . $project->image) }}"
                                            alt="{{ $project->categories->name }}"
                                            class="w-full hover:opacity-80 cursor-help">
                                    </div>
                                @else
                                    <img src="https://source.unsplash.com/360x185?{{ $project->categories->name }}"
                                        title="{{ $project->title }}" class="w-full hover:opacity-80 cursor-help">
                                @endif
                                <div class="py-6 px-6">
                                    <h3> <a href="/projects/{{ $project->slug }}"
                                            class="block text-lg tracking-normal mb-3 font-medium text-dark hover:text-primary hover:underline underline-offset-2 truncate">{{ $project->title }}</a>
                                    </h3>
                                    <p class="text-sm text-secondary mb-6 line-clamp-3">
                                        {{ $project->excerpt }}
                                    </p>
                                    <div class="flow-root">
                                        <div class="float-left">
                                            <span
                                                class="text-xs font-medium inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out uppercase last:mr-0 mr-1 cursor-pointer"
                                                title="Category">
                                                {{ $project->categories->name }}
                                            </span>
                                        </div>
                                        <div class="float-right">
                                            <a href="/projects/{{ $project->slug }}"
                                                class="text-sm text-dark hover:text-primary inline-flex hover:scale-105">
                                                Read more
                                                <svg fill="none" class="h-4 w-4 m-auto ml-2 hover:text-primary "
                                                    stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center text-dark">No projects found</p>
                @endif
            </div>
            <div class="w-full px-4">
                {{ $projects->links() }}
            </div>
            <div class="pt-10 pb-16 px-4 sm:text-right">
                <a href="/"
                    class="inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white bg-primary border border-transparent rounded-full md:w-auto hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary hover:underline">
                    Back to home
                </a>
            </div>
        </div>
    </div>
@endsection
