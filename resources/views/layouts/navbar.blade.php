<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <span class="text-2xl font-bold text-red-600 tracking-tight">APARRefill</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-1 ml-10">
                <a href="{{ route('home') }}"
                    class="px-3 py-2 rounded-md text-sm font-medium text-red-600 bg-red-50">Beranda</a>
                <a href="#"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors duration-200">Lokasi</a>
                <a href="#"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors duration-200">Produk</a>
                <a href="#"
                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors duration-200">Tentang
                    Kami</a>
            </div>

            <!-- Auth Links -->
            <div class="hidden md:flex md:items-center md:space-x-2 ml-auto">
                <a href="{{ route('login') }}"
                    onclick="event.preventDefault(); window.location.href='{{ route('login') }}'"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors">
                    Masuk
                </a>
                <a href="#"
                    class="px-4 py-2 rounded-md text-sm font-medium text-white bg-red-600 hover:bg-red-700 transition-colors duration-200 shadow-sm">Daftar</a>
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


    <div x-show="isOpen" @click.away="isOpen = false" class="md:hidden bg-white shadow-lg " id="mobile-menu"
        x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        <div class="px-2 pt-2 pb-3 space-y-1 align-items-center">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-red-600">Beranda</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50">Lokasi</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50">Produk</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50">Tentang
                Kami</a>
        </div>
        <div class="pt-2 pb-3 border-t border-gray-200">
            <div class="px-2 space-y-1">
                <a href="{{ route('login') }}"
                    onclick="event.preventDefault(); window.location.href='{{ route('login') }}'"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-red-600 hover:bg-red-50 transition-colors">
                    Masuk
                </a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-white hover:bg-red-600">Daftar</a>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    // Initialize Alpine.js
    document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            isOpen: false
        }))
    });
    document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            isOpen: false
        }))
    });
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.querySelector('[data-mobile-menu-toggle]');
        const mobileMenu = document.querySelector('#mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
    document.addEventListener('click', function(event) {
        const mobileMenu = document.querySelector('#mobile-menu');
        const mobileMenuButton = document.querySelector('[data-mobile-menu-toggle]');

        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
