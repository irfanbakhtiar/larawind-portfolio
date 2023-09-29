    <header class="header bg-white absolute top-0 left-0 w-full flex items-center z-20">
        <div class="container">
            <nav class="bg-white w-full z-20 top-0 left-0">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 xl:px-3 px-4">
                    <a href="/" class="flex items-center">
                        <img class="h-8 mr-3 bg-gray-100 rounded-full" src="/img/profile.png?v=<?= date('YmdHis') ?>"
                            alt="Irfan">
                        <span class="self-center text-xl text-primary font-bold uppercase">Irfan</span>
                    </a>
                    <div class="flex items-center lg:order-2 ">
                        <a href="mailto:example@gmail.com" type="button"
                            class="hidden md:flex bg-transparent hover:bg-primary hover:bg-opacity-80 text-primary font-medium hover:text-white mx-8 border border-primary hover:border-transparent rounded-full tracking-wide text-sm px-3 py-2 text-center mr-3 lg:mr-0">
                            <svg fill="none" stroke="currentColor" class="h-5 w-5 m-auto mr-2" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5">
                                </path>
                            </svg>Let's talk</a>
                        <button id="hamburger" name="hamburger" aria-label="Menu" type="button"
                            class="block items-center p-0 text-sm text-secondary rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 lg:hidden">
                            <svg fill="none" stroke="currentColor" class="h-8 w-8 inline-flex" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden absolute bg-white shadow-lg rounded-lg max-w-[250px] my-1 right-6 w-full top-full lg:my-0 lg:flex lg:static lg:bg-white lg:max-w-full lg:shadow-none lg:rounded-none lg:w-auto lg:order-1"
                        id="nav-menu">
                        <ul
                            class="flex flex-col p-2 lg:p-0 mt-2 font-medium lg:flex-row lg:space-x-1 lg:mt-0 lg:border-0 lg:bg-white">
                            <li class="section-active">
                                <a href="#about"
                                    class="list nav-active block py-2 pl-3 pr-4 text-sm text-gray-900 uppercase hover:text-primary transition duration-500">About</a>
                            </li>
                            <li>
                                <a href="#education"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 uppercase hover:text-primary transition duration-500">Education</a>
                            </li>
                            <li>
                                <a href="#skills"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 uppercase hover:text-primary transition duration-500">Skills</a>
                            </li>
                            <li>
                                <a href="#projects"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 uppercase hover:text-primary transition duration-500">Projects</a>
                            </li>
                            <li>
                                <a href="#services"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 uppercase hover:text-primary transition duration-500">Services</a>
                            </li>
                            @auth
                                <li>
                                    <a href="/dashboard"
                                        class="list block hover:text-white border border-primary hover:bg-primary hover:bg-opacity-80 rounded-full py-2 pl-3 pr-4 text-sm text-dark uppercase transition duration-500"
                                        target="_blank">Manage</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- HEADER END -->
