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
                                    class="ml-1 text-sm font-semibold text-primary md:ml-2">{{ $title }}</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                @if (session()->has('success'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                        <div id="alert-3" class="loading flex p-4 mb-4 text-green-800 rounded-lg bg-green-100 "
                            role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium">
                                {{ session('success') }}
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8"
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
                    </div>
                @endif
                <div class="flex px-5 py-3 mb-4 rounded-lg bg-white">
                    <div class="w-full self-center lg:w-1/2">
                        <p class="text-gray-700 font-bold">Detail Account</p>
                        <p class="text-gray-500 text-sm inline-block">Full account information</p>
                    </div>
                    <div class="w-full self-center lg:w-1/2 text-right mt-2">
                        <a href="/dashboard/account/change-password"
                            class="text-white bg-yellow-600 hover:bg-opacity-80 rounded-full text-sm font-medium px-2.5 md:px-4 py-2.5 mb-2 text-center inline-flex items-center">
                            <svg fill="none" class="w-5 h-5 md:mr-1" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z">
                                </path>
                            </svg>
                            <span class="hidden md:block">Change</span>
                        </a>
                        <a href="/dashboard/account/{{ Auth::user()->id }}/edit"
                            class="text-white bg-primary hover:bg-opacity-80 rounded-full text-sm font-medium px-2.5 md:px-4 py-2.5 mb-2 text-center inline-flex items-center">
                            <svg fill="none" class="w-5 h-5 md:mr-1" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                </path>
                            </svg>
                            <span class="hidden md:block">Edit</span>
                        </a>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div class="w-full max-w-full p-4 bg-white rounded-lg sm:p-8">
                        <div class="relative">
                            <h5 class="text-xl font-bold leading-none text-gray-700 mb-3">{{ Auth::user()->name }}
                            </h5>
                            <div class="flex flex-row items-center mt-1">
                                <svg fill="currentColor" class="text-dark mr-2 w-4 h-4" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z">
                                    </path>
                                    <path
                                        d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z">
                                    </path>
                                </svg>
                                <span class="text-secondary text-sm tracking-wide">{{ Auth::user()->job }}</span>
                            </div>
                            <div class="flex flex-row items-center mt-1 mb-3">
                                <svg fill="currentColor" class="text-dark mr-2 w-4 h-4" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z">
                                    </path>
                                </svg>
                                <span class="text-secondary text-sm tracking-wide">{{ Auth::user()->location }}</span>
                            </div>
                            <span class="text-secondary text-sm tracking-wide truncate">Email address</span>
                            <p class="text-gray-700 text-sm font-medium tracking-normal">
                                <a href="mailto:m.irfanbakhtiar99@gmail.com">{{ Auth::user()->email }}</a>
                            </p>
                            <h4 class="text-dark text-base font-bold mt-3 mb-2">Technology Skill</h4>
                            <div class="flex flex-row items-center mt-1">
                                <svg fill="#E34F26" class="w-5 h-5 mr-2" role="img" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>HTML5</title>
                                    <path
                                        d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
                                </svg>
                                <svg fill="#06B6D4" role="img" class="w-5 h-5 mr-2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Tailwind CSS</title>
                                    <path
                                        d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
                                </svg>
                                <svg fill="#F24E1E" role="img" class="w-5 h-5 mr-2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Figma</title>
                                    <path
                                        d="M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.02 3.019 3.02h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.014-4.49 4.49-4.49h4.588v4.441c0 2.503-2.047 4.539-4.563 4.539zm-.024-7.51a3.023 3.023 0 0 0-3.019 3.019c0 1.665 1.365 3.019 3.044 3.019 1.705 0 3.093-1.376 3.093-3.068v-2.97H8.148zm7.704 0h-.098c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h.098c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm-.097-7.509c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h.098c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-.098z" />
                                </svg>
                                <svg fill="#FF2D20" role="img" class="w-5 h-5 mr-2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Laravel</title>
                                    <path
                                        d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                                </svg>
                                <svg fill="#777BB4" role="img" class="w-5 h-5 mr-2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>PHP</title>
                                    <path
                                        d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z" />
                                </svg>
                                <svg fill="#6C78AF" role="img" class="w-5 h-5 mr-2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>phpMyAdmin</title>
                                    <path
                                        d="M5.463 3.476C6.69 5.225 7.497 7.399 7.68 9.798a12.9 12.9 0 0 1-.672 5.254 4.29 4.29 0 0 1 2.969-1.523c.05-.004.099-.006.148-.008.08-.491.47-3.45-.977-6.68-1.068-2.386-3-3.16-3.685-3.365Zm1.777.037s2.406 1.066 3.326 5.547c.607 2.955.049 4.836-.402 5.773a7.347 7.347 0 0 1 4.506-1.994c.86-.065 1.695.02 2.482.233-.1-.741-.593-3.414-2.732-5.92-3.263-3.823-7.18-3.64-7.18-3.64Zm14.817 9.701-17.92 3.049a2.284 2.284 0 0 1 1.535 2.254 2.31 2.31 0 0 1-.106.61c.055-.027 2.689-1.275 6.342-2.034 3.238-.673 5.723-.36 6.285-.273a6.46 6.46 0 0 1 3.864-3.606zm-6.213 4.078c-2.318 0-4.641.495-6.614 1.166-2.868.976-2.951 1.348-5.55 1.043C1.844 19.286 0 18.386 0 18.386s2.406 1.97 4.914 2.127c1.986.125 3.505-.822 5.315-1.414 2.661-.871 4.511-.97 6.253-.975C19.361 18.116 24 19.353 24 19.353s-2.11-1.044-5.033-1.72a13.885 13.885 0 0 0-3.123-.34Z" />
                                </svg>
                                <svg fill="#7952B3" role="img" class="w-5 h-5 mr-2" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Bootstrap</title>
                                    <path
                                        d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full p-4 bg-white rounded-lg sm:p-8">
                        <div class="relative">
                            <h5 class="text-xl font-bold leading-none text-gray-700 mb-3">Information
                            </h5>
                            <p class="text-sm text-secondary mb-3"> {{ Auth::user()->about }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    {{-- CONTENT MENU END --}}
@endsection
