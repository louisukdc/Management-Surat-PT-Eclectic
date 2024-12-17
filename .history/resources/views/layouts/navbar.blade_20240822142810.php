    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
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
                <li>
                    <div class="nav-item dropdown">
  
                        <div class="dropdown-menu">

                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon dropdown-item-icon icon-tabler icon-tabler-logout" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                        <path d="M9 12h12l-3 -3" />
                                        <path d="M18 15l3 -3" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="nav-item">

                    <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
                        <button x-on:click="show = !show" type="button" class="flex items-center space-x-3 bg-gray-800 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            {{-- <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar"> --}}
                            <img class="h-8 w-8 rounded-full"
                            src="{{ $user->photo ? asset('storage/profile//' . $user->photo) : asset('assets/img/illustrations/profiles/profile-1.png') }}"
                            alt="" id="image-preview" />
                            <span class="text-white font-medium">{{ Auth::user()->name }}</span>
                        </button>
                        <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="{{ route('profile.settings') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Change Password</a>
                            <form action="{{ route('logout') }}" method="post" class="block px-4 py-2 text-sm text-gray-700">
                                @csrf
                                <button type="submit" class="w-full text-left">Sign out</button>
                            </form>
                        </div>
                    </div>                    
                </li>

                <!-- Add more navigation items here -->
            </ul>
        </div>
    </div>
</nav>
