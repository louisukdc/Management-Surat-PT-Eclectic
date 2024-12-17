<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="{{ url('/') }}">
                        <i class="nc-icon nc-layout-11"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Dashboard</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="{{ url('/surat') }}">
                        <i class="nc-icon nc-email-85"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Surat</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <div>
                        <nav class="bg-gray-800">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="flex items-center justify-between h-16">
                                    <div class="flex items-center">
                                    </div>
                                    <div class="hidden md:block">
                                        <div class="ml-4 flex items-center md:ml-6">
                                            @if (Route::has('login'))
                                            @auth
                                            <!-- Profile dropdown -->
                                            <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
                                                <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                                    <a href="admin/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                
                                                    <a href="{{ url('/logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                                </div>
                                            </div>
                                            @else
                                            <a href="{{ route('login') }}" class="font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                
                                            @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
                                            @endauth
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </nav>
                        <main>
                            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                                <div>@yield('contents')</div>
                            </div>
                        </main>
                    </div>

                </li>

                <!-- Add more navigation items here -->
            </ul>
        </div>
    </div>
</nav>
