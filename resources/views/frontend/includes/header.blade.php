<nav class="sticky top-0 bg-black text-white z-40 drop-shadow-md" x-data="{ showMobileNav: false }">
    <div class="max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="showMobileNav = !showMobileNav" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">{{ __('Open main menu') }}</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center content-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img class="block lg:hidden !w-[120px] h-10 object-contain" src="{{ asset(setting('site_logo')) }}"
                            alt="{{ app_name() }}">
                    </a>
                    <a href="/">
                        <img class="hidden lg:block h-12 !w-[120px] object-contain" src="{{ asset(setting('site_logo')) }}"
                            alt="{{ app_name() }}">
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-1">
                    <div class="flex space-x-1">
                        <a href="/"
                            class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            HOME
                        </a>
                        <div class="relative inline-flex items-center justify-center group">
                            <a href="/predictions"
                                class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                                <span class="flex items-center justify-center space-x-1">
                                    PREDICTIONS <i class="fa fa-chevron-down ml-1 !block group-hover:!hidden"
                                        aria-hidden="true"></i>
                                    <i class="fa fa-chevron-up !hidden group-hover:!block" aria-hidden="true"></i>
                                </span>


                            </a>

                            <ul
                                class="dropdown-menu absolute hidden group-hover:block top-10 text-gray-700 shadow  w-[250px]">
                                <li class=""><a
                                        class="rounded-t bg-gray-200 hover:bg-secText hover:text-white py-2 px-4 block whitespace-no-wrap"
                                        href="/predictions">FOOTBALL PREDICTIONS</a></li>

                                <li class=""><a
                                        class=" bg-gray-200 hover:bg-secText hover:text-white py-2 px-4 block whitespace-no-wrap"
                                        href="/basketball">BASKETBALL PREDICTIONS</a></li>

                                <li class=""><a
                                        class=" bg-gray-200 hover:bg-secText hover:text-white py-2 px-4 block whitespace-no-wrap"
                                        href="/boxing">BOXING PREDICTIONS</a></li>

                                <li class=""><a
                                        class="bg-gray-200 hover:bg-secText hover:text-white py-2 px-4 block whitespace-no-wrap"
                                        href="/tennis">TENNIS PREDICTIONS</a></li>

                                <li class=""><a
                                        class="rounded-b bg-gray-200 hover:bg-secText hover:text-white py-2 px-4 block whitespace-no-wrap"
                                        href="/ice-hockey">ICE HOCKEY PREDICTIONS</a></li>



                            </ul>
                        </div>



                        <a href="/pricing"
                            class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            PRICING
                        </a>
                        <a href="/how-to-pay"
                            class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            HOW TO PAY
                        </a>
                        <a href="/contact-us"
                            class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            CONTACT
                        </a>
                        <a href="/blog"
                            class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            BLOG
                        </a>
                        <a href="/live-scores"
                            class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            LIVE SCORES
                        </a>

                        @auth
                            <a href="/dashboard"
                                class="text-white border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                                DASHBOARD
                            </a>
                        @endauth

                        {{-- <a href="{{ route('frontend.posts.index') }}" class="text-gray-600 border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Posts')}}
                        </a>
                        <a href="{{ route('frontend.categories.index') }}" class="text-gray-600 border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Categories')}}
                        </a>
                        <a href="{{ route('frontend.tags.index') }}" class="text-gray-600 border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Tags')}}
                        </a>
                        <a href="{{ route('frontend.comments.index') }}" class="text-gray-600 border-transparent border-b-2 hover:border-secBg px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Comments')}}
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="ml-3 relative" x-data="{ isUserMenuOpen: false }">
                    <div class="flex flex-row">
                        @guest
                            <a href="{{ route('login') }}"
                                class="flex items-center mx-2 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-secBg rounded-md hover:bg-secText focus:outline-none focus:bg-secText  invisible md:visible">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                <span class="mx-1">{{ __('Login') }}</span>
                            </a>
                            @if (user_registration())
                                <a href="{{ route('register') }}"
                                    class="flex items-center mx-2 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-secBg rounded-md hover:bg-secText focus:outline-none focus:bg-secText  invisible md:visible">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="mx-1">{{ __('Register') }}</span>
                                </a>
                            @endif
                        @else
                            <button @click="isUserMenuOpen = !isUserMenuOpen" @keydown.escape="isUserMenuOpen = false"
                                type="button"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-offset-cyan-800 focus:ring-white transition ease-out duration-300"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">{{ __('Open main menu') }}</span>
                                <img class="h-10 w-10 rounded-full border-transparent border hover:border-cyan-600"
                                    src="{{ asset(auth()->user()->avatar) }}" alt="{{ asset(auth()->user()->name) }}">
                            </button>
                        @endguest
                    </div>

                    @auth
                        <div x-show="isUserMenuOpen" @click.away="isUserMenuOpen = false"
                            x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">

                            @can('view_backend')
                                <a href='{{ route('backend.dashboard') }}'
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white"
                                    role="menuitem">
                                    <i class="fas fa-tachometer-alt fa-fw"></i>&nbsp;{{ __('Admin Dashboard') }}
                                </a>
                                @endif
                                <a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}"
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white"
                                    role="menuitem">
                                    <i class="fas fa-user fa-fw"></i>&nbsp;{{ Auth::user()->name }}
                                </a>
                                <a href="{{ route('frontend.users.profileEdit', encode_id(auth()->user()->id)) }}"
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white"
                                    role="menuitem">
                                    <i class="fas fa-cogs fa-fw"></i>&nbsp;{{ __('Settings') }}
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-orange-600 hover:text-white"
                                    role="menuitem">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden absolute z-10 w-full p-1" id="mobile-menu" x-show="showMobileNav"
            @click.away="showMobileNav = false" x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            <div class="px-2 pt-2 pb-3 space-y-0.5 bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

                <a href="/" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Home
                </a>
                <a href="/blog" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Blog
                </a>
                <a href="/live-scores" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Live Scores
                </a>
                @auth
                    <a href="/dashboard" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                       Dashboard
                    </a>
                @endauth
                <a href="{{ route('frontend.predictions') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Football Predictions
                </a>
                <a href="{{ route('frontend.basketball') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Basketball Predictions
                </a>
                <a href="{{ route('frontend.tennis') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Tennis Predictions
                </a>
                <a href="{{ route('frontend.boxing') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Boxing Predictions
                </a>
                <a href="{{ route('frontend.iceHockey') }}"
                    class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Ice Hockey Predictions
                </a>
                <a href="/pricing" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Pricing
                </a>
                <a href="/how-to-pay" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    How to Pay
                </a>
                <a href="/contact-us" class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium">
                    Contact Us
                </a>

                @can('view_backend')
                    <a href='{{ route('backend.dashboard') }}'
                        class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium border" role="menuitem">
                        <i class="fas fa-tachometer-alt fa-fw"></i>&nbsp;{{ __('Admin Dashboard') }}
                    </a>
                    @endif


                    @guest
                        <hr>
                        <a href="{{ route('login') }}"
                            class="text-gray-500 block mt-2 px-3 py-2 rounded-md text-base font-medium bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            <span class="mx-1">{{ __('Login') }}</span>
                        </a>
                        @if (user_registration())
                            <a href="{{ route('register') }}"
                                class="text-gray-500 block px-3 py-2 rounded-md text-base font-medium bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="mx-1">{{ __('Create an account') }}</span>
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>
