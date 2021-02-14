<div x-data="{ open: false }" class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b border-gray-200 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('programs') }}">
                    <span class="sr-only">JARS S.A</span>
                    <x-jet-application-mark class="h-12 w-auto sm:h-12" />
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav :class="{'block': open, 'hidden': ! open}" class="hidden md:flex space-x-10">
                <div @click.away="open = false" x-data="{ open: false }" class="relative">
                    <button @click="open = true" type="button" class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span>Firma</span>
                        <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="inline ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 transition-transform duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false" class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                <a href="https://jars.pl/firma/o-nas/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            O nas
                                        </p>
                                    </div>
                                </a>

                                <a href="https://jars.pl/czlonkostwo-w-organizacjach/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Członkostwo w organizacjach
                                        </p>
                                    </div>
                                </a>

                                <a href="https://jars.pl/firma/badania-i-rozwoj/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Badania i rozwój
                                        </p>
                                    </div>
                                </a>

                                <a href="https://jars.pl/ogolne-warunki-swiadczenia-uslug/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Ogólne Warunki Świadczenia Usług
                                        </p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <a href="https://jars.pl/oferta-2/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Oferta
                </a>

                <div @click.away="open = false" x-data="{ open: false }" class="relative">
                    <button @click="open = true" class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span>Systemy Jakości</span>
                        <svg :class="{'rotate-180': open, 'rotate-0': !open}" class="inline ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500 transition-transform duration-200 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="open" @click.away="open = false" class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                <a href="https://jars.pl/systemy-jakosci/opis-systemow-jakosci/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Opis systemów jakości
                                        </p>
                                    </div>
                                </a>

                                <a href="https://jars.pl/systemy-jakosci/certyfikaty-zatwierdzenia/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Akredytacje / Zatwierdzenia
                                        </p>
                                    </div>
                                </a>

                                <a href="https://jars.pl/systemy-jakosci/czlonkostwa-jars-s-a/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Członkostwa JARS S.A.
                                        </p>
                                    </div>
                                </a>

                            </div>

                        </div>
                    </div>
                </div>

                <a href="https://jars.pl/kariera/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Kariera
                </a>

                <a href="https://jars.pl/blog/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Blog
                </a>

                <a href="https://jars.pl/kontakt/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Kontakt
                </a>
            </nav>
            @if (Route::has('login'))
                <div class="hidden md:flex items-center justify-end space-x-2 md:flex-1 lg:w-0">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="whitespace-nowrap border border-transparent rounded-md py-2 px-4 inline-flex items-center justify-center text-base font-medium text-gray-500 hover:text-gray-500 hover:bg-blue-200">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="whitespace-nowrap border border-transparent rounded-md py-2 px-4 inline-flex items-center justify-center text-base font-medium text-gray-500 hover:text-gray-500 hover:bg-blue-200">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

    <!-- Mobile menu, show/hide based on mobile menu state. -->
    <div :class="{'block': open, 'hidden': ! open}" class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5 space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <x-jet-application-mark class="h-8 w-auto" />
                    </div>
                    <div class="-mr-2">
                        <button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="https://jars.pl/firma/o-nas/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 -12 48 48" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">O nas</span>
                        </a>

                        <a href="https://jars.pl/czlonkostwo-w-organizacjach/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 -12 48 48" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Członkostwo w organizacjach</span>
                        </a>

                        <a href="https://jars.pl/firma/badania-i-rozwoj/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 -12 48 48" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Badania i rozwój</span>
                        </a>

                        <a href="https://jars.pl/ogolne-warunki-swiadczenia-uslug/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 -12 48 48" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Ogólne Warunki Świadczenia Usług</span>
                        </a>

                        <a href="https://jars.pl/oferta-2/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 -12 48 48" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Oferta</span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="https://jars.pl/systemy-jakosci/opis-systemow-jakosci/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Opis systemów jakości
                    </a>

                    <a href="https://jars.pl/systemy-jakosci/certyfikaty-zatwierdzenia/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Akredytacje / Zatwierdzenia
                    </a>

                    <a href="https://jars.pl/systemy-jakosci/czlonkostwa-jars-s-a/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Członkostwa JARS S.A.
                    </a>

                    <a href="https://jars.pl/akademia-ekspertow-jars/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Akademia JARS
                    </a>

                    <a href="https://jars.pl/relacje-inwestorskie/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Relacje inwestorskie
                    </a>

                    <a href="https://jars.pl/kariera/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Kariera
                    </a>

                    <a href="https://jars.pl/blog/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Blog
                    </a>

                    <a href="https://jars.pl/kontakt/" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Kontakt
                    </a>
                </div>
                <div class="space-y-6">
                    <a href="{{ route('login') }}" class="w-full bg-blue-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-blue-700">
                        Zaloguj się
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
