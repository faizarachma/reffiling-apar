@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#7F1D1D] text-white py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <!-- Decorative elements (optional) -->
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-20 left-20 w-40 h-40 bg-white rounded-full"></div>
            <div class="absolute bottom-10 right-20 w-32 h-32 bg-white rounded-full"></div>
        </div>

        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center gap-12 relative z-10">
            <!-- Text Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <!-- Heading with animated underline -->
                <div class="mb-8">
                    <h1 class="text-4xl sm:text-5xl font-bold mb-3 transform hover:scale-105 transition duration-300">
                        Layanan Refill APAR
                    </h1>
                    <h2 class="text-2xl sm:text-3xl font-semibold relative inline-block">
                        Terpercaya di Indonesia
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 bg-yellow-400 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                    </h2>
                </div>

                <!-- Description with fade-in animation -->
                <p
                    class="text-lg sm:text-xl mb-10 opacity-0 animate-fadeIn [animation-delay:300ms] [animation-fill-mode:forwards]">
                    Jaga keamanan dari bahaya kebakaran dengan memastikan APAR Anda selalu dalam kondisi optimal.
                    Kami menyediakan layanan refill profesional dengan jaringan distributor di seluruh Indonesia.
                </p>

                <!-- CTA Buttons with hover effects -->
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-5">
                    <a href="#"
                        class="bg-white text-red-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        Refill Sekarang
                        <span class="ml-2">→</span>
                    </a>
                    <a href="#"
                        class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 transform hover:-translate-y-1">
                        <span class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Temukan Lokasi
                        </span>
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="lg:w-1/2 relative">
                <div
                    class="relative rounded-xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-500">
                    <img src="{{ asset('img/aparhead.jpg') }}" alt="Teknisi sedang melakukan refill APAR"
                        alt="Teknisi sedang melakukan refill APAR" class="w-full h-auto object-cover" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#7F1D1D]/80 to-transparent"></div>
                </div>

                <!-- Badge on image -->
                <div
                    class="absolute -bottom-5 -right-5 bg-yellow-400 text-[#7F1D1D] px-6 py-3 rounded-lg font-bold shadow-lg transform rotate-3">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        Bersertifikat
                    </span>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">Temukan Lokasi Refill Terdekat</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Tersedia lebih dari 100 lokasi distributor resmi kami di seluruh Indonesia.
                Cari lokasi terdekat dengan kota Anda.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="relative mb-12 max-w-2xl mx-auto">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400"></i>
            </div>
            <input type="text" placeholder="Cari berdasarkan kota atau nama distributor..."
                class="block w-full pl-10 pr-3 py-4 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 text-gray-700">
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-200 mb-8"></div>

        <!-- Location List -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Location 1 -->
            <div
                class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-800 mb-3">APAR Jakarta Pusat</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Jl. MH Thamrin No. 45<br>
                    Jakarta Pusat, DKI Jakarta 10350
                </p>
                <a href="#"
                    class="text-red-600 font-medium hover:text-red-700 inline-flex items-center transition-colors duration-200">
                    Lihat Detail
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Location 2 -->
            <div
                class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-800 mb-3">APAR Jakarta Selatan</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Jl. Gatot Subroto No. 22<br>
                    Jakarta Selatan, DKI Jakarta 12930
                </p>
                <a href="#"
                    class="text-red-600 font-medium hover:text-red-700 inline-flex items-center transition-colors duration-200">
                    Lihat Detail
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Location 3 -->
            <div
                class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-800 mb-3">APAR Bandung</h3>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Jl. Asia Afrika No. 78<br>
                    Bandung, Jawa Barat 40111
                </p>
                <a href="#"
                    class="text-red-600 font-medium hover:text-red-700 inline-flex items-center transition-colors duration-200">
                    Lihat Detail
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center">
            <a href="#"
                class="inline-block px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors shadow-sm">
                Lihat Semua Lokasi
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h2>
            <div class="w-20 h-1 bg-red-600 mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                <div class="text-red-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Sertifikasi Resmi</h3>
                <p class="text-gray-600">Layanan kami telah tersertifikasi dan memenuhi standar keamanan nasional.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                <div class="text-red-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Jaringan Nasional</h3>
                <p class="text-gray-600">Hadir di 50+ kota di Indonesia untuk melayani kebutuhan Anda.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                <div class="text-red-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Layanan Cepat</h3>
                <p class="text-gray-600">Proses refill hanya membutuhkan waktu 1-2 hari kerja.</p>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Apa Kata Pelanggan Kami?</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold mr-4">
                            A</div>
                        <div>
                            <h4 class="font-bold">Andi Wijaya</h4>
                            <p class="text-gray-500 text-sm">PT. Maju Bersama</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Pelayanan sangat cepat dan profesional. APAR kami selesai direfill tepat
                        waktu
                        dengan hasil yang memuaskan."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold mr-4">
                            S</div>
                        <div>
                            <h4 class="font-bold">Siti Rahayu</h4>
                            <p class="text-gray-500 text-sm">RS. Sehat Sentosa</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Tim teknis sangat kompeten dan memberikan penjelasan lengkap tentang kondisi
                        APAR kami. Sangat direkomendasikan!"</p>
                </div>
            </div>
        </div>


        <div class="bg-[#7F1D1D] overflow-hidden p-15 mt-20"> ">
            <!-- Heading -->
            <div class="text-center mb-8">
                <h1 class="text-3xl sm:text-4xl font-bold text-white mb-3">
                    Siap untuk Merefill APAR Anda?
                </h1>
                <p class="text-lg text-white">
                    Pastikan keamanan dari bahaya kebakaran dengan memastikan APAR Anda<br class="hidden sm:block">
                    selalu dalam kondisi siap pakai.
                </p>
            </div>

            <!-- Action Items -->
            <div class="space-y-4 max-w-md mx-auto">
                <!-- Checkbox Item 1 -->
                <div
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                    <input type="checkbox" id="register"
                        class="h-5 w-5 text-red-600 rounded border-gray-300 focus:ring-red-500">
                    <label for="register" class="ml-3 block text-lg font-medium text-white hover:text-gray-200">
                        Daftar Sekarang
                    </label>
                </div>

                <!-- Checkbox Item 2 -->
                <div class="flex items-center p-4 border border-gray-200 rounded-lg bg-red-50 border-red-200">
                    <input type="checkbox" id="contact" checked
                        class="h-5 w-5 text-red-600 rounded border-gray-300 focus:ring-red-500">
                    <label for="contact" class="ml-3 block text-lg font-medium text-gray-700">
                        Hubungi Kami
                    </label>
                </div>
            </div>
        </div>
    </section>

    <!-- Add this to your app.css for animations -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
@endsection
