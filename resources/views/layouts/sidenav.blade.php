{{-- HAMBURGER BUTTON START --}}
<button id="button_aside" type="button"
    class="absolute text-left top-5 duration-1000 left-6 cursor-pointer block items-center p-0 text-sm text-secondary rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 lg:hidden peer">
    <svg fill="none" stroke="currentColor" class="h-8 w-8 inline-flex" stroke-width="1.5" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12">
        </path>
    </svg>
</button>
{{-- USER DROPDOWN --}}
<span class="absolute text-dark top-5 duration-1000 right-6 lg:hidden cursor-pointer">
    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownProfile"
        class="rounded-full ring-transparent ring-4 hover:ring-gray-100 focus:ring-gray-100" type="button">
        @if (\Auth::user()->image == true)
            <img class="h-8 bg-gray-100 rounded-full drop-shadow-md hover:opacity-80 mx-auto"
                src="{{ asset('storage/' . \Auth::user()->image) }}">
        @else
            <img class="h-8 bg-gray-100 rounded-full drop-shadow-md hover:opacity-80 mx-auto"
                src="https://source.unsplash.com/85x85?man">
        @endif
    </button>
</span>
<!-- Dropdown menu -->
<div id="dropdownProfile" class="z-20 hidden px-4">
    <div class="absolute top-full right-0 bg-white divide-y divide-gray-200 rounded-lg shadow w-44">
        <div class="px-4 py-3 text-sm text-gray-900">
            <div class="text-dark">{{ Auth::user()->username }}</div>
            <div class="text-dark font-medium truncate">{{ Auth::user()->email }}</div>
        </div>
        <div class="py-2">
            <button type="button" data-te-toggle="modal" data-te-target="#logout"
                class="logout block w-full px-4 py-2 text-sm text-left text-red-500 hover:bg-red-600 hover:text-white">
                Log Out
            </button>
        </div>
    </div>
</div>

{{-- SIDEBAR START --}}
<div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 w-[300px] overflow-y-auto overflow-hidden text-center bg-white z-20 peer-focus:left-0 ease-out delay-150 duration-300 "
    id="aside">
    <div class="mt-4">
        @if (\Auth::user()->image == true)
            <img class="h-20 w-20 bg-gray-100 rounded-full hover:opacity-80 mx-auto"
                src="{{ asset('storage/' . \Auth::user()->image) }}">
        @else
            <img class="h-20 w-20 bg-gray-100 rounded-full hover:opacity-80 mx-auto"
                src="https://source.unsplash.com/85x85?man">
        @endif
    </div>
    <p class="text-sm text-center font-semibold text-primary mt-4 tracking-tight truncate">
        {{ Auth::user()->name }}
    </p>
    <div class="w-full mt-4 mb-4 border-t border-gray-100">
    </div>
    <a href="/dashboard" class="font-medium" title="Dashboard">
        <div
            class="{{ Request::is('dashboard') ? ' link-btn-active' : 'link-btn-non' }} p-2.5 mt-2 flex items-center rounded-lg px-4 duration-300 cursor-pointer hover:bg-primary hover:text-gray-50">
            <svg fill="none" stroke="currentColor" width="20" height="20" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z">
                </path>
            </svg>
            <span class="text-sm ml-4 tracking-normal">
                Dashboard</span>
        </div>
    </a>
    {{-- MANAGE START --}}
    <div class="flex m-auto mt-4">
        <span class="text-[11px] ml-4 uppercase font-bold text-dark">Manage</span>
    </div>
    <a href="/dashboard/project" class="font-medium" title="Project">
        <div
            class="{{ Request::is('dashboard/project*') ? ' link-btn-active' : 'link-btn-non' }} p-2.5 mt-2 flex items-center rounded-lg px-4 duration-300 cursor-pointer hover:bg-primary hover:text-gray-50">
            <svg fill="none" stroke="currentColor" width="20" height="20" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M13.887 3.182c.396.037.79.08 1.183.128C16.194 3.45 17 4.414 17 5.517V16.75A2.25 2.25 0 0114.75 19h-9.5A2.25 2.25 0 013 16.75V5.517c0-1.103.806-2.068 1.93-2.207.393-.048.787-.09 1.183-.128A3.001 3.001 0 019 1h2c1.373 0 2.531.923 2.887 2.182zM7.5 4A1.5 1.5 0 019 2.5h2A1.5 1.5 0 0112.5 4v.5h-5V4z">
                </path>
            </svg>
            <span class="text-sm ml-4 tracking-normal">Project</span>
        </div>
    </a>
    <a href="/dashboard/category" class="font-medium" title="Category">
        <div
            class="{{ Request::is('dashboard/category*') ? ' link-btn-active' : 'link-btn-non' }} p-2.5 flex items-center rounded-lg px-4 duration-300 cursor-pointer hover:bg-primary hover:text-gray-50">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" width="20" height="20"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"></path>
            </svg>
            <span class="text-sm ml-4 tracking-normal">Category</span>
        </div>
    </a>
    {{-- MANAGE END --}}

    {{-- USER START --}}
    <div class="flex m-auto mt-4">
        <span class="text-[11px] ml-4 uppercase font-bold text-dark">USER</span>
    </div>
    <a href="/dashboard/account" class="font-medium" title="Account">
        <div
            class="{{ Request::is('dashboard/account*') ? ' link-btn-active' : 'link-btn-non' }} p-2.5 mt-2 flex items-center rounded-lg px-4 duration-300 cursor-pointer hover:bg-primary hover:text-gray-50">
            <svg fill="none" stroke="currentColor" width="20" height="20" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                </path>
            </svg>
            <span class="text-sm ml-4 tracking-normal">Account</span>
        </div>
    </a>
    <button type="button" data-te-toggle="modal" data-te-target="#logout"
        class="logout w-full text-sm font-medium tracking-normal" title="Log Out">
        <div
            class="text-red-500 p-2.5 flex items-center rounded-lg px-4 duration-300 cursor-pointer hover:bg-red-600 hover:text-white">
            <svg fill="currentColor" width="20" height="20" stroke-width="1.5" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z">
                </path>
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z">
                </path>
            </svg>
            <span class="text-sm ml-4 tracking-normal">
                Log Out
            </span>
        </div>
    </button>
    {{-- USER END --}}
    <div class="absolute bottom-0 mb-4 left-0 right-0">
        <h class=" text-xs text-secondary">Admin Panel V.1</h>
    </div>
    {{-- MODAL LOGOUT --}}
    <div data-te-modal-init
        class="fixed top-0 left-0 z-50 hidden h-full w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 md:h-full bg-dark bg-opacity-70"
        id="logout" tabindex="-1" aria-modal="true" aria-labelledby="exampleModalCenterTitle" role="dialog">
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
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9">
                        </path>
                    </svg>
                    <form action="/logout" method="post" class="inline-table">
                        @csrf
                        <div class="text-center mb-5">
                            <h3 class="text-lg font-medium text-dark">
                                Are you sure you want to logout?</h3>
                        </div>
                        <button type="submit"
                            class="text-white bg-red-500 hover:bg-red-700 font-medium rounded-full text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-te-modal-dismiss type="button"
                            class="text-gray-500 bg-white hover:bg-opacity-80 rounded-full border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-dark focus:z-10 ">No,
                            cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- SIDEBAR END --}}
