<nav class="bg-white shadow-sm sticky top-0 z-50" x-data="{ isOpen: false, isLoggedIn: {{ auth()->check() ? 'true' : 'false' }} }">
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
            <div class=" md:flex md:items-center md:space-x-2 ml-auto">
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="px-4 py-2 rounded-md text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition-colors duration-200 shadow-sm">
                            Logout
                        </button>
                    </form>
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


    <!-- Mobile Auth Links -->
    <div class="pt-2 pb-3 border-t border-gray-200" x-show="isOpen">
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-white bg-red-600 hover:bg-red-700">
                        Logout
                    </button>
                </form>
            </template>
        </div>
    </div>
</nav>

<script>
    < script >
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                isOpen: false,
                isLoggedIn: {{ auth()->check() ? 'true' : 'false' }},

                init() {
                    // Listen for login/logout events
                    window.addEventListener('user-logged-in', () => {
                        this.isLoggedIn = true;
                    });

                    window.addEventListener('user-logged-out', () => {
                        this.isLoggedIn = false;
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
