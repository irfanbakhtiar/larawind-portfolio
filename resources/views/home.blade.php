@extends('layouts.main')
@section('container')
    <!-- HERO SECTION START -->
    <section id="about" class="pt-24 lg:pt-36 pb-40">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 lg:px-16 lg:w-1/2">
                    <h1 class="text-sm font-semibold text-primary md:text-base mb-4">Hello! I'm Irfan —
                    </h1>
                    <div class="mb-4 lg:mb-6">
                        <span class="font-bold text-dark text-3xl mb-2 lg:text-4xl tracking-tight block">I'm a Front End
                            Developer</span>
                    </div>
                    <div class="grid grid-flow-col justify-start">
                        <a href="mailto:example@gmail.com"
                            class="text-sm font-medium text-white bg-primary py-3 px-4 rounded-full inline-flex hover:bg-opacity-80 hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out">
                            <svg fill="none" stroke="currentColor" class="h-5 w-5 m-auto mr-2" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                            Hire Me
                        </a>
                        <div class="col-span-4 my-auto">
                            <a href="#projects"
                                class="text-sm font-medium text-dark py-3 px-4 underline underline-offset-2 hover:text-primary transition duration-300 ease-in-out"
                                alt="My Portfolio">See Portfolio
                            </a>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-base text-gray-600">I am an Informatics Engineering graduate from Politeknik
                            Harapan
                            Bersama. Always have motivation to learning and improve new skill. I look forward to
                            providing
                            real-world work experience in the field of developers and designers.</p>
                    </div>
                    <div class="mt-8">
                        <div class="flex items-center justify-left mt-6">
                            <!-- Linkedin -->
                            <a href="https://linkedin.com/in/m-irfan-bakhtiar/"
                                class="inline-flex items-center justify-center w-10 h-10 mr-2 text-dark" target="_blank">
                                <svg role="img" fill="#6b7280" class="h-5 w-5 hover:opacity-80" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>LinkedIn</title>
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a href="https://facebook.com/m.irfan.bakhtiar"
                                class="inline-flex items-center justify-center w-10 h-10 mr-2 text-dark" target="_blank">
                                <svg role="img" fill="#6b7280" class="h-5 w-5 hover:opacity-80" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Facebook</title>
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <!-- Twitter -->
                            <a href="https://twitter.com/fan23x"
                                class="inline-flex items-center justify-center w-10 h-10 mr-2 text-dark" target="_blank">
                                <svg role="img" fill="#6b7280" class="h-5 w-5 hover:opacity-80" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Twitter</title>
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <!-- Instagram -->
                            <a href="https://instagram.com/m.irfanbakhtiar/"
                                class="inline-flex items-center justify-center w-10 h-10 mr-2 text-dark" target="_blank">
                                <svg role="img" fill="#6b7280" class="h-5 w-5 hover:opacity-80" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                            <!-- Github -->
                            <a href="https://github.com/irfanbakhtiar"
                                class="inline-flex items-center justify-center w-10 h-10 mr-2 text-dark" target="_blank">
                                <svg role="img" fill="#6b7280" class="h-5 w-5 hover:opacity-80" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>GitHub</title>
                                    <path
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full self-center px-4 lg:px-16 lg:w-1/2 ">
                    <div class="relative mt-24 lg:mt-0">
                        <img src="{{ asset('img/me.png') }}" alt="Me" class="max-w-full mx-auto" />
                        <span class="absolute -bottom-10 left-1/2 -translate-x-1/2 lg:scale-125 -z-10">
                            <svg width="350" height="350" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M81.5,63Q71,76,56,82Q41,88,31.5,75.5Q22,63,23.5,50.5Q25,38,33.5,26.5Q42,15,56.5,19.5Q71,24,81.5,37Q92,50,81.5,63Z"
                                    stroke="none" fill="#0284c7"></path>
                                <path
                                    d="M81.5,63Q71,76,56,82Q41,88,31.5,75.5Q22,63,23.5,50.5Q25,38,33.5,26.5Q42,15,56.5,19.5Q71,24,81.5,37Q92,50,81.5,63Z"
                                    transform="translate(-7.83 -4.93)" stroke="#0369a1" stroke-width="1" fill="none">
                                </path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1320 320">
        <path fill="#f9fafb" fill-opacity="1"
            d="M0,0L48,21.3C96,43,192,85,288,117.3C384,149,480,171,576,170.7C672,171,768,149,864,128C960,107,1056,85,1152,85.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <!-- HERO SECTION END -->

    <!-- EDUCATION SECTION START -->
    <section id="education" class="pt-32 pb-32 bg-gray-50">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-12" data-aos="zoom-in">
                    <h2 class="text-2xl leading-normal mb-2 font-semibold text-dark">Education</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto; height: 35px;"
                        xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                    <p class="text-gray-500 leading-relaxed font-light text-lg mx-auto pb-2">History of education.</p>
                </div>
            </div>
            <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-gray-600 lg:px-16" data-aos="fade-down">
                <!-- left -->
                <div class="flex flex-row-reverse md:contents">
                    <div class="bg-white col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md">
                        <h3 class="font-semibold text-base md:text-lg mb-1">Politeknik Harapan Bersama</h3>
                        <h4 class="font-normal text-sm mb-1 text-gray-400">2017-2021</h4>
                        <p class="leading-tight text-justify text-base">
                            Bachelor of Applied
                            Science
                            in Informatic Engineering
                        </p>
                    </div>
                    <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-sky-800 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-primary shadow"></div>
                    </div>
                </div>
                <!-- right -->
                <div class="flex md:contents">
                    <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-sky-800 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-primary shadow"></div>
                    </div>
                    <div class="bg-white col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md">
                        <h3 class="font-semibold text-base md:text-lg mb-1">SMK Negeri 2 Tegal</h3>
                        <h4 class="font-normal text-sm mb-1 text-gray-400">2014-2017</h4>
                        <p class="leading-tight text-justify text-base">
                            Computer and Network
                            Engineering
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EDUCATION SECTION END -->

    <!-- SKILL SECTION START -->
    <section id="skills" class="pt-32 pb-32 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-12" data-aos="zoom-in">
                    <h2 class="text-2xl leading-normal mb-2 font-semibold text-dark">Skills</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;"
                        xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                    <p class="text-gray-500 leading-relaxed font-light text-lg mx-auto pb-2">Programming languages and
                        tools.
                    </p>
                </div>
            </div>
            <div class="grid w-full text-secondary place-content-center" data-aos="fade-down">
                <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-6">
                    {{-- CSS icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#1572B6"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">CSS</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- HTML icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#E34F26"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">HTML</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- PHP icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#777BB4"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">PHP</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- JavaScript icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#F7DF1E"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">JavaScript</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 uppercase last:mr-0 mr-1">
                                BASIC
                            </span>
                        </div>
                    </div>
                    {{-- C Sharp icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#239120"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M12 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0zM9.426 7.12a5.55 5.55 0 011.985.38v1.181a4.5 4.5 0 00-2.25-.566 3.439 3.439 0 00-2.625 1.087 4.099 4.099 0 00-1.012 2.906 3.9 3.9 0 00.945 2.754 3.217 3.217 0 002.482 1.023 4.657 4.657 0 002.464-.634l-.004 1.08a5.543 5.543 0 01-2.625.555 4.211 4.211 0 01-3.228-1.297 4.793 4.793 0 01-1.212-3.409 5.021 5.021 0 011.365-3.663 4.631 4.631 0 013.473-1.392 5.55 5.55 0 01.12-.004 5.55 5.55 0 01.122 0zm5.863.155h.836l-.555 2.652h1.661l.567-2.652h.81l-.555 2.652 1.732-.004-.15.697H17.91l-.412 1.98h1.852l-.176.698h-1.816l-.58 2.625h-.83l.567-2.625h-1.65l-.555 2.625h-.81l.555-2.625h-1.74l.131-.698h1.748l.401-1.976h-1.826l.138-.697h1.826zm.142 3.345L15 12.6h1.673l.423-1.98z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">C Sharp</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 uppercase last:mr-0 mr-1">
                                BASIC
                            </span>
                        </div>
                    </div>
                    {{-- Bootstrap icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#7952B3"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">Bootstrap</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- Tailwind CSS icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#06B6D4"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">Tailwind CSS</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 uppercase last:mr-0 mr-1">
                                BASIC
                            </span>
                        </div>
                    </div>
                    {{-- CodeIgniter icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#EF4223"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M11.466 0c.88 1.423-.28 3.306-1.207 4.358-.899 1.02-1.992 1.873-2.985 2.8-1.066.996-2.091 2.044-2.967 3.213-1.753 2.339-2.827 5.28-2.038 8.199.788 2.916 3.314 4.772 6.167 5.429-1.44-.622-2.786-2.203-2.79-3.82-.003-1.765 1.115-3.262 2.505-4.246-.167.632-.258 1.21.155 1.774a1.68 1.68 0 0 0 1.696.642c1.487-.326 1.556-1.96.674-2.914-.872-.943-1.715-2.009-1.384-3.377.167-.685.588-1.328 1.121-1.787-.41 1.078.755 2.14 1.523 2.67 1.332.918 2.793 1.612 4.017 2.688 1.288 1.132 2.24 2.661 2.047 4.435-.208 1.923-1.736 3.26-3.45 3.936 3.622-.8 7.365-3.61 7.44-7.627.093-3.032-1.903-5.717-5.158-7.384.19.48.074.697-.058.924-.55.944-2.082 1.152-2.835.184-1.205-1.548.025-3.216.197-4.855.215-2.055-1.073-4.049-2.67-5.242z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">CodeIgniter</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 uppercase last:mr-0 mr-1">
                                BASIC
                            </span>
                        </div>
                    </div>
                    {{-- Laravel icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#FF2D20"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">Laravel</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- React icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#61DAFB"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">React</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 uppercase last:mr-0 mr-1">
                                BASIC
                            </span>
                        </div>
                    </div>
                    {{-- phpMyAdmin icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#6C78AF"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M5.463 3.476C6.69 5.225 7.497 7.399 7.68 9.798a12.9 12.9 0 0 1-.672 5.254 4.29 4.29 0 0 1 2.969-1.523c.05-.004.099-.006.148-.008.08-.491.47-3.45-.977-6.68-1.068-2.386-3-3.16-3.685-3.365Zm1.777.037s2.406 1.066 3.326 5.547c.607 2.955.049 4.836-.402 5.773a7.347 7.347 0 0 1 4.506-1.994c.86-.065 1.695.02 2.482.233-.1-.741-.593-3.414-2.732-5.92-3.263-3.823-7.18-3.64-7.18-3.64Zm14.817 9.701-17.92 3.049a2.284 2.284 0 0 1 1.535 2.254 2.31 2.31 0 0 1-.106.61c.055-.027 2.689-1.275 6.342-2.034 3.238-.673 5.723-.36 6.285-.273a6.46 6.46 0 0 1 3.864-3.606zm-6.213 4.078c-2.318 0-4.641.495-6.614 1.166-2.868.976-2.951 1.348-5.55 1.043C1.844 19.286 0 18.386 0 18.386s2.406 1.97 4.914 2.127c1.986.125 3.505-.822 5.315-1.414 2.661-.871 4.511-.97 6.253-.975C19.361 18.116 24 19.353 24 19.353s-2.11-1.044-5.033-1.72a13.885 13.885 0 0 0-3.123-.34Z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">phpMyAdmin</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- GitHub icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#181717"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205
                            11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422
                            18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07
                            1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93
                            0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267
                            1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12
                            3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0
                            1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24
                            12.297c0-6.627-5.373-12-12-12" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">GitHub</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- Postman icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#FF6C37"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M13.527.099C6.955-.744.942 3.9.099 10.473c-.843 6.572 3.8 12.584 10.373 13.428 6.573.843 12.587-3.801 13.428-10.374C24.744 6.955 20.101.943 13.527.099zm2.471 7.485a.855.855 0 0 0-.593.25l-4.453 4.453-.307-.307-.643-.643c4.389-4.376 5.18-4.418 5.996-3.753zm-4.863 4.861l4.44-4.44a.62.62 0 1 1 .847.903l-4.699 4.125-.588-.588zm.33.694l-1.1.238a.06.06 0 0 1-.067-.032.06.06 0 0 1 .01-.073l.645-.645.512.512zm-2.803-.459l1.172-1.172.879.878-1.979.426a.074.074 0 0 1-.085-.039.072.072 0 0 1 .013-.093zm-3.646 6.058a.076.076 0 0 1-.069-.083.077.077 0 0 1 .022-.046h.002l.946-.946 1.222 1.222-2.123-.147zm2.425-1.256a.228.228 0 0 0-.117.256l.203.865a.125.125 0 0 1-.211.117h-.003l-.934-.934-.294-.295 3.762-3.758 1.82-.393.874.874c-1.255 1.102-2.971 2.201-5.1 3.268zm5.279-3.428h-.002l-.839-.839 4.699-4.125a.952.952 0 0 0 .119-.127c-.148 1.345-2.029 3.245-3.977 5.091zm3.657-6.46l-.003-.002a1.822 1.822 0 0 1 2.459-2.684l-1.61 1.613a.119.119 0 0 0 0 .169l1.247 1.247a1.817 1.817 0 0 1-2.093-.343zm2.578 0a1.714 1.714 0 0 1-.271.218h-.001l-1.207-1.207 1.533-1.533c.661.72.637 1.832-.054 2.522zM18.855 6.05a.143.143 0 0 0-.053.157.416.416 0 0 1-.053.45.14.14 0 0 0 .023.197.141.141 0 0 0 .084.03.14.14 0 0 0 .106-.05.691.691 0 0 0 .087-.751.138.138 0 0 0-.194-.033z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">Postman</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 uppercase last:mr-0 mr-1">
                                BASIC
                            </span>
                        </div>
                    </div>
                    {{-- Node.js icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#339933"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">Node.js</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-sky-600 bg-sky-100 uppercase last:mr-0 mr-1">
                                BASIC
                            </span>
                        </div>
                    </div>
                    {{-- Unity icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="m12.9288 4.2939 3.7997 2.1929c.1366.077.1415.2905 0 .3675l-4.515 2.6076a.4192.4192 0 0 1-.4246 0L7.274 6.8543c-.139-.0745-.1415-.293 0-.3675l3.7972-2.193V0L1.3758 5.5977V16.793l3.7177-2.1456v-4.3858c-.0025-.1565.1813-.2682.318-.1838l4.5148 2.6076a.4252.4252 0 0 1 .2136.3676v5.2127c.0025.1565-.1813.2682-.3179.1838l-3.7996-2.1929-3.7178 2.1457L12 24l9.6954-5.5977-3.7178-2.1457-3.7996 2.1929c-.1341.082-.3229-.0248-.3179-.1838V13.053c0-.1565.087-.2956.2136-.3676l4.5149-2.6076c.134-.082.3228.0224.3179.1838v4.3858l3.7177 2.1456V5.5977L12.9288 0Z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">Unity</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                    {{-- Figma icon --}}
                    <div class="w-full justify-center">
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#F24E1E"
                            class="h-16 w-16 mx-auto">
                            <path
                                d="M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.02 3.019 3.02h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.014-4.49 4.49-4.49h4.588v4.441c0 2.503-2.047 4.539-4.563 4.539zm-.024-7.51a3.023 3.023 0 0 0-3.019 3.019c0 1.665 1.365 3.019 3.044 3.019 1.705 0 3.093-1.376 3.093-3.068v-2.97H8.148zm7.704 0h-.098c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h.098c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm-.097-7.509c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h.098c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-.098z" />
                        </svg>
                        <span class="block text-sm font-medium text-center mt-2">Figma</span>
                        <div class="text-center">
                            <span
                                class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-amber-600 bg-amber-100 uppercase last:mr-0 mr-1">
                                MEDIUM
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SKILL SECTION END -->

    <!-- PROJECT SECTION START -->
    <section id="projects" class="pt-32 pb-32 bg-gray-50">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-12" data-aos="zoom-in">
                    <h2 class="text-2xl leading-normal mb-2 font-semibold text-dark">Projects</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto; height: 35px;"
                        xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                    <p class="text-gray-500 leading-relaxed font-light text-lg mx-auto pb-2">Completed projects.</p>
                </div>
            </div>
            <div class="lg:px-16">
                <div class="flex flex-wrap" data-aos="fade-down">
                    @if (!empty($projects) && $projects->count())
                        @foreach ($projects->take(3) as $project)
                            <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
                                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden mb-10">
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
                <div class="px-4 pt-0 pb-2" data-aos="zoom-in">
                    <div class="sm:text-right">
                        <a href="/projects"
                            class="inline-flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white bg-primary border border-transparent rounded-full md:w-auto hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary hover:underline">
                            View all projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PPROJECT SECTION END -->

    {{-- SERVICE SECTION START --}}
    <section id="services" class="pt-32 pb-0">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-12" data-aos="zoom-in">
                    <h2 class="text-2xl leading-normal mb-2 font-semibold text-dark">Services</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;"
                        xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                    <p class="text-gray-500 leading-relaxed font-light text-lg mx-auto pb-2">What are you looking for?</p>
                </div>
            </div>
            <div class="w-full px-4 mx-auto lg:px-40 ">
                <div class="bg-gray-50 rounded-xl sm:p-8 p-4 mb-8 drop-shadow-sm transform transition duration-300 ease-in-out hover:-translate-y-2"
                    data-aos="fade-down">
                    <div class="flex flex-wrap">
                        <div class="w-full text-dark md:w-1/2">
                            <svg fill="none" stroke="currentColor" class="h-6 w-6 mb-2 text-primary"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                                </path>
                            </svg>
                            <span class="text-base md:text-lg font-bold text-primary">Website Design</span>
                        </div>
                        <div class="w-full text-secondary md:w-1/2">
                            <span class="text-sm md:text-base">Have a beautiful site design with affordable price and good
                                quality.</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl sm:p-8 p-4 mb-8 drop-shadow-sm transform transition duration-300 ease-in-out hover:-translate-y-2"
                    data-aos="fade-down">
                    <div class="flex flex-wrap">
                        <div class="w-full text-dark md:w-1/2">
                            <svg fill="none" stroke="currentColor" class="h-6 w-6 mb-2 text-primary"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3">
                                </path>
                            </svg>
                            <span class="text-base md:text-lg font-bold text-primary">Mobile App Design</span>
                        </div>
                        <div class="w-full text-secondary md:w-1/2">
                            <span class="text-sm md:text-base">Have a beautiful app design with affordable price and good
                                quality.</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl sm:p-8 p-4 mb-8 drop-shadow-sm transform transition duration-300 ease-in-out hover:-translate-y-2"
                    data-aos="fade-down">
                    <div class="flex flex-wrap">
                        <div class="w-full text-dark md:w-1/2">
                            <svg fill="none" stroke="currentColor" class="h-6 w-6 mb-2 text-primary"
                                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z">
                                </path>
                            </svg>
                            <span class="text-base md:text-lg font-bold text-primary">Website Developer</span>
                        </div>
                        <div class="w-full text-secondary md:w-1/2">
                            <span class="text-sm md:text-base">Build your dream site come true with affordable price and
                                good
                                quality.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SERVICE SECTION END --}}

@endsection
