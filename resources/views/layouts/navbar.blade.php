<nav class="bg-white shadow-sm sticky top-0 z-50" x-data="{ isOpen: false, isProfileOpen: false, isLoggedIn: {{ auth()->check() ? 'true' : 'false' }} }">
    <!-- ... bagian lainnya tetap sama ... -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <span class="text-2xl font-bold text-red-600 tracking-tight">APARRefill</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-1 ml-10">
                <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-red-600 bg-red-50">Beranda</a>
                <a href="#"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors duration-200">Lokasi</a>
                <a href="#"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors duration-200">Produk</a>
                <a href="#"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors duration-200">Tentang
                    Kami</a>
            </div>

            <!-- Auth Links - Desktop -->
            <div class="md:flex md:items-center md:space-x-2 ml-auto">
                <template x-if="!isLoggedIn">
                    <!-- Tampilkan ketika belum login -->
                    <a href="{{ route('login') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors">
                        Masuk
                    </a>
                </template>
                <template x-if="!isLoggedIn">
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 rounded-md text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition-colors duration-200 shadow-sm">
                        Daftar
                    </a>
                </template>
                <template x-if="isLoggedIn">
                    <!-- Tampilkan ketika sudah login -->
                    <div class="relative ml-3">
                        <div>
                            <button @click="isProfileOpen = !isProfileOpen" type="button"
                                class="flex items-center max-w-xs rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                id="user-menu" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <!-- Gambar profil - bisa diganti dengan avatar user -->
                                <div
                                    class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span
                                    class="ml-2 text-sm font-medium text-gray-700">{{ auth()->user()->name ?? 'User' }}</span>
                                <svg :class="{ 'transform rotate-180': isProfileOpen }"
                                    class="ml-1 h-4 w-4 text-gray-500 transition-transform"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Dropdown menu profil -->
                        <div x-show="isProfileOpen" @click.away="isProfileOpen = false"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="{{ route('customer.profile') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600"
                                role="menuitem">
                                Profil Saya
                            </a>
                            <a href="{{ route('customer.dashboard') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">dashboard</a>

                            <form method="POST" action="{{ route('logout') }}" role="menuitem">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden ml-4">
                <button type="button" @click="isOpen = !isOpen"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-red-600 hover:bg-red-50 focus:outline-none transition-colors duration-200"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Buka menu</span>
                    <!-- Hamburger icon -->
                    <svg x-show="!isOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close icon -->
                    <svg x-show="isOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <!-- Mobile Menu -->
    <div class="md:hidden" x-show="isOpen" @click.away="isOpen = false">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-red-600 bg-red-50">Beranda</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50">Lokasi</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50">Produk</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50">Tentang
                Kami</a>
        </div>

        <!-- Mobile Auth Links -->
        <div class="pt-2 pb-3 border-t border-gray-200">
            <div class="px-2 space-y-1">
                <template x-if="!isLoggedIn">
                    <a href="{{ route('login') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors">
                        Masuk
                    </a>
                </template>
                <template x-if="!isLoggedIn">
                    <a href="{{ route('register') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-white bg-red-600 hover:bg-red-700">
                        Daftar
                    </a>
                </template>
                <template x-if="isLoggedIn">
                    <a href="{{ route('customer.profile') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50">
                        Profil Saya
                    </a>
                </template>
                <template x-if="isLoggedIn">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-white bg-red-600 hover:bg-red-700">
                            Keluar
                        </button>
                    </form>
                </template>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            isOpen: false,
            isProfileOpen: false,
            isLoggedIn: {{ auth()->check() ? 'true' : 'false' }},

            init() {
                // Listen for login/logout events
                window.addEventListener('user-logged-in', () => {
                    this.isLoggedIn = true;
                });

                window.addEventListener('user-logged-out', () => {
                    this.isLoggedIn = false;
                    this.isProfileOpen = false;
                });
            }
        }))
    });

    // Handle logout form submission
    document.addEventListener('DOMContentLoaded', function() {
        const logoutForms = document.querySelectorAll('form[action="{{ route('logout') }}"]');

        logoutForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                fetch(this.action, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({})
                    })
                    .then(response => {
                        if (response.redirected) {
                            window.location.href = response.url;
                        }
                    });
            });
        });
    });
</script>
