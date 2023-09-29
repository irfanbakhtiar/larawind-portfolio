@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between p-0 select-none">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                {{-- previous disable --}}
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-lg">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                {{-- previous enable --}}
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded-lg hover:text-gray-400 ">
                    {!! __('pagination.previous') !!}
                </a>
            @endif
            {{-- next enable --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded-lg hover:text-gray-400 ">
                    {!! __('pagination.next') !!}
                </a>
            @else
                {{-- next disable --}}
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-lg">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="flex-col hidden lg:flex-row sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex mt-2 shadow-sm lg:mt-0">
                    {{-- Previous Page Link Disable --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span
                                class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-l-lg"
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        {{-- Previous Page Link Enable --}}
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded-l-lg hover:text-gray-400 focus:z-10"
                            aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 cursor-default">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links Disable --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300">{{ $page }}</span>
                                    </span>
                                @else
                                    {{-- Array Of Links Enable --}}
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 transition bg-white border border-gray-300 hover:text-gray-400 focus:z-10"
                                        aria-label="{{ __('pagination.goto_page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link Enable --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 transition bg-white border border-gray-300 rounded-r-lg hover:text-gray-400 focus:z-10"
                            aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        {{-- Next Page Link Disable --}}
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span
                                class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium leading-5 text-gray-400 bg-white border border-gray-300 rounded-r-lg "
                                aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
