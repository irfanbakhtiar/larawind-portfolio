@extends('layouts.admin.main')

{{-- CONTENT MENU START --}}
@section('container')

    <body class="bg-gray-50">
        <div class="p-6 lg:p-4 lg:ml-64">
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
                                <a href="/dashboard"
                                    class="ml-1 text-sm font-semibold text-primary md:ml-2">{{ $title }}</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="grid sm:grid-cols-3 gap-4 mb-4">
                    <a href="/dashboard/project" class="cursor-pointer">
                        <div class="flex items-center justify-center h-24 rounded-lg bg-white hover:bg-gray-100">
                            <p class="text-2xl text-gray-400">
                            <div class="flex items-center flex-row w-full h-full bg-gradient-to-r rounded-lg p-3">
                                <div class="flex text-gray-50 items-center bg-primary p-2 rounded-full flex-none w-12 h-12">
                                    <svg fill="none" class="md:w-8 md:h-8 w-5 h-5 m-auto" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 8.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v8.25A2.25 2.25 0 006 16.5h2.25m8.25-8.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-7.5A2.25 2.25 0 018.25 18v-1.5m8.25-8.25h-6a2.25 2.25 0 00-2.25 2.25v6">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-around flex-grow ml-5 tracking-normal">
                                    <div class="text-sm whitespace-nowrap text-dark">
                                        Project
                                    </div>
                                    <div class="text-secondary">
                                        {{ $totalProjects }}
                                    </div>
                                </div>
                                <div class="flex items-center flex-none text-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </div>
                            </div>
                            </p>
                        </div>
                    </a>
                    <a href="/dashboard/category" class="cursor-pointer">
                        <div class="flex items-center justify-center h-24 rounded-lg bg-white hover:bg-gray-100">
                            <p class="text-2xl text-gray-400">
                            <div class="flex items-center flex-row w-full h-full bg-gradient-to-r rounded-md p-3">
                                <div class="flex text-gray-50 items-center bg-primary p-2 rounded-full flex-none w-12 h-12">
                                    <svg fill="none" class="md:w-8 md:h-8 w-5 h-5 m-auto" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" class="object-scale-down transition duration-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-around flex-grow ml-5 tracking-normal">
                                    <div class="text-sm whitespace-nowrap text-dark">
                                        Category
                                    </div>
                                    <div class="text-secondary">
                                        {{ $totalCategory }}
                                    </div>
                                </div>
                                <div class="flex items-center flex-none text-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </div>
                            </div>
                            </p>
                        </div>
                    </a>
                    <a href="/dashboard/account" class="cursor-pointer">
                        <div class="flex items-center justify-center h-24 rounded-lg bg-white hover:bg-gray-100">
                            <p class="text-2xl text-gray-400">
                            <div class="flex items-center flex-row w-full h-full bg-gradient-to-r rounded-md p-3">
                                <div class="flex text-gray-50 items-center bg-primary p-2 rounded-full flex-none w-12 h-12">
                                    <svg fill="none" class="md:w-8 md:h-8 w-5 h-5 m-auto" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-around flex-grow ml-5 tracking-normal">
                                    <div class="text-sm whitespace-nowrap text-dark">
                                        User
                                    </div>
                                    <div class="text-secondary">
                                        {{ $totalUser }}
                                    </div>
                                </div>
                                <div class=" flex items-center flex-none text-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                        <path strokeLinecap="round" strokeLinejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </div>
                            </div>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div class="min-w-0 p-4 bg-white rounded-lg sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h5 class="text-lg font-bold leading-none text-dark">Statistic Project
                            </h5>
                        </div>
                        <div class="w-full mt-4 mb-4 border-t border-gray-100">
                        </div>
                        @if (!empty($projects) && $projects->count())
                            <canvas id="myChart" class="chart"></canvas>
                        @else
                            <div class="text-sm md:text-base text-center bg-white text-secondary p-2">
                                No statistic
                                found
                            </div>
                        @endif

                    </div>
                    <div class="w-full max-w-full p-4 bg-white rounded-lg sm:p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h5 class="text-lg font-bold leading-none text-dark">Last Project
                            </h5>
                        </div>
                        <div class="w-full mt-4 mb-4 border-t border-gray-100">
                        </div>
                        @if (!empty($projects) && $projects->count())
                            @foreach ($projects->take(3) as $project)
                                <div class="flow-root ">
                                    <ul role="list">
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <div
                                                        class="flex text-white items-center bg-primary p-2 rounded-full w-12 h-12">
                                                        <svg fill="none" stroke="currentColor"
                                                            class="md:w-6 md:h-6 w-5 h-5 m-auto text-center"
                                                            stroke-width="1.5" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-semibold text-gray-600 line-clamp-1">
                                                        <a href="dashboard/project/{{ $project->slug }}"
                                                            class="block hover:text-primary">
                                                            {{ $project->title }}</a>
                                                    </p>
                                                    <p class="text-sm inline-flex items-center text-secondary">
                                                        <svg fill="none" class="left-0" weight="16" height="16"
                                                            stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                        <span class="px-1">
                                                            Publish on
                                                            {{ $project->created_at->diffForHumans() }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        @else
                            <div class="text-sm md:text-base text-center bg-white text-secondary p-2">
                                No project
                                found
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
{{-- CONTENT MENU END --}}

@push('chart')
    <script>
        const _ydata = JSON.parse('{!! json_encode($months) !!}');
        const _xdata = JSON.parse('{!! json_encode($monthCount) !!}');
        const ctx = document.getElementById('myChart');
        var randomColorGenerator = function() {
            return '#' + (Math.random().toString(16) + '0000000').slice(2, 8);
        };

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: _ydata,
                datasets: [{
                    label: 'All Project',
                    backgroundColor: ["#0284c7", "#374151", "#b91c1c", "#c2410c", "#a16207", "#3f6212",
                        "#047857", "#4338ca", "#7e22ce", "#be185d", "#0c4a6e", "#14532d"
                    ],
                    data: _xdata,
                    borderWidth: 1,
                    tension: 0.1
                }]
            },
        });
    </script>
@endpush
