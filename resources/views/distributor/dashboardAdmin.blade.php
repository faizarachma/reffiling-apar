@extends('distributor.main')
@section('title', 'Dashboard Distributor')

@section('content')
    <div class="min-h-screen bg-white p-6">
        <div class="mx-auto pl-20 pr-20">
            <!-- Header -->
            <div class="mb-8 flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard Distributor</h1>
                    <p class="text-gray-600">Selamat datang, APAR Jakarta Pusat</p>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('kelola.inventori') }}"
                        class="bg-white outline-1 hover:bg-[#f4f0f0] text-grey-500 px-4 py-2 rounded-md text-sm flex items-center space-x-1">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 " fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.5431 1.66549C11.4491 1.16212 12.5509 1.16212 13.4569 1.66549L21.4856 6.12589C21.8031 6.30225 22 6.63685 22 7C22 7.00002 22 6.99998 22 7V16.4116C22 17.1379 21.6062 17.8072 20.9713 18.1599L12.5015 22.8653C12.2067 23.0366 11.7933 23.0366 11.4985 22.8653L3.02871 18.1599C2.39378 17.8072 2 17.1379 2 16.4116V7.00005C2.00002 6.6369 2.19691 6.30225 2.51436 6.12589L10.5431 1.66549ZM12.4856 3.41381C12.1836 3.24602 11.8164 3.24602 11.5144 3.41381L9.55918 4.50002L16.5001 8.35606L18.9409 7.00005L12.4856 3.41381ZM5.05913 7.00005L7.50005 5.64397L14.4409 9.50002L12 10.8561L5.05913 7.00005ZM13 20.3005L20 16.4116V8.69956L13 12.5884V20.3005ZM4 8.69956L11 12.5884V20.3005L4 16.4116V8.69956Z"
                                    fill="#6b6b6b"></path>
                            </g>
                        </svg>
                        Kelola Inventori
                    </a>

                    <a href="{{ route('laporan.inventori') }}"
                        class="bg-white hover:bg-[#f4f0f0] outline-1 text-grey-600 px-4 py-2 rounded-md text-sm flex items-center space-x-1">

                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-500">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.553 1.10557C11.8346 0.964809 12.1659 0.964809 12.4475 1.10557L22.4475 6.10557C22.7862 6.27496 23.0002 6.62123 23.0002 7C23.0002 7.37877 22.7862 7.72504 22.4475 7.89443L12.4475 12.8944C12.1659 13.0352 11.8346 13.0352 11.553 12.8944L1.55303 7.89443C1.21425 7.72504 1.00024 7.37877 1.00024 7C1.00024 6.62123 1.21425 6.27496 1.55303 6.10557L11.553 1.10557ZM4.23631 7L12.0002 10.882L19.7642 7L12.0002 3.11803L4.23631 7Z"
                                    fill="#6e6e6e"></path>
                                <path
                                    d="M1.10579 16.5528C1.35278 16.0588 1.95345 15.8586 2.44743 16.1055L12.0002 20.8819L21.553 16.1055C22.047 15.8586 22.6477 16.0588 22.8946 16.5528C23.1416 17.0467 22.9414 17.6474 22.4474 17.8944L12.4474 22.8944C12.1659 23.0352 11.8345 23.0352 11.553 22.8944L1.55301 17.8944C1.05903 17.6474 0.858803 17.0467 1.10579 16.5528Z"
                                    fill="#6e6e6e"></path>
                                <path
                                    d="M2.44743 11.1055C1.95345 10.8586 1.35278 11.0588 1.10579 11.5528C0.858803 12.0467 1.05903 12.6474 1.55301 12.8944L11.553 17.8944C11.8345 18.0352 12.1659 18.0352 12.4474 17.8944L22.4474 12.8944C22.9414 12.6474 23.1416 12.0467 22.8946 11.5528C22.6477 11.0588 22.047 10.8586 21.553 11.1055L12.0002 15.8819L2.44743 11.1055Z"
                                    fill="#6e6e6e"></path>
                            </g>
                        </svg>
                        Laporan
                    </a>


                </div>


            </div>
            <div class="container mx-auto px-4 py-8">


                <div class="flex flex-wrap gap-4 p-4">
                    <!-- Menunggu -->
                    <div class="bg-white rounded-lg shadow-md p-4 w-100">
                        <!-- Clock icon for "In Progress" status -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="text-gray-500 text-sm font-medium">Menunggu</div>
                        <div class="text-3xl font-bold text-blue-600 mt-2">1</div>
                        <div class="h-1 w-full bg-gray-200 mt-2">
                            <div class="h-1 bg-blue-500" style="width: 33%"></div>
                        </div>
                    </div>

                    <!-- Dalam Proses -->
                    <div class="bg-white rounded-lg shadow-md p-4 w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex items-center justify-between">
                            <div class="text-gray-500 text-sm font-medium">Dalam Proses</div>

                        </div>
                        <div class="text-3xl font-bold text-yellow-600 mt-2">1</div>
                        <div class="h-1 w-full bg-gray-200 mt-2">
                            <div class="h-1 bg-yellow-500" style="width: 33%"></div>
                        </div>
                    </div>

                    <!-- Selesai -->
                    <div class="bg-white rounded-lg shadow-md p-4 w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="text-gray-500 text-sm font-medium">Selesai</div>
                        <div class="text-3xl font-bold text-green-600 mt-2">1</div>
                        <div class="h-1 w-full bg-gray-200 mt-2">
                            <div class="h-1 bg-green-500" style="width: 33%"></div>
                        </div>
                    </div>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Inventory Stock Section -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6 w-200">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-medium text-gray-700">Stok Invotori</h2>
                            <button class="text-blue-500 hover:text-blue-600 text-sm font-medium">
                                Lihat Detail
                            </button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ITEM</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            JUMLAH</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            UNIT</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            STATUS</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ABC Dry
                                            Chemical
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">250</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">kg</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">CO2</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">180</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">kg</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Foam</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">120</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">L</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Tersedia</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- Schedule Section -->
                    <div class="bg-white rounded-lg shadow-md p-6 ml-40">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-medium text-gray-700">Jadwal Hari Ini</h2>

                        </div>

                        <div class="text-center py-8">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak Ada Jadwal</h3>
                            <p class="mt-1 text-sm text-gray-500">Anda tidak memiliki jadwal refill untuk hari ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-6 pl-20 pr-20">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Permintaan Refill</h1>
                <div class="relative">
                    <button
                        class="flex items-center space-x-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">
                        <i class="fas fa-plus"></i>
                        <span>Buat Permintaan Baru</span>
                    </button>
                </div>
            </div>

            <!-- Filter Tab -->
            <div class="flex border-b border-gray-200 mb-6">
                <button class="filter-tab active px-4 py-2 text-sm font-medium text-red-600 border-b-2 border-red-600">
                    Semua
                </button>
                <button class="filter-tab px-4 py-2 text-sm font-medium text-gray-500 hover:text-red-600">
                    Menunggu
                </button>
                <button class="filter-tab px-4 py-2 text-sm font-medium text-gray-500 hover:text-red-600">
                    Proses
                </button>
                <button class="filter-tab px-4 py-2 text-sm font-medium text-gray-500 hover:text-red-600">
                    Selesai
                </button>
            </div>

            <!-- Empty State -->
            <div class="bg-white rounded-xl shadow-sm p-8 text-center">
                <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                    <svg viewBox="0 0 24 24" class="w-15 h-15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M7 14H12.5M7 10H17M10 19H6.2C5.0799 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V8.5M14 20L16.025 19.595C16.2015 19.5597 16.2898 19.542 16.3721 19.5097C16.4452 19.4811 16.5147 19.4439 16.579 19.399C16.6516 19.3484 16.7152 19.2848 16.8426 19.1574L21 15C21.5523 14.4477 21.5523 13.5523 21 13C20.4477 12.4477 19.5523 12.4477 19 13L14.8426 17.1574C14.7152 17.2848 14.6516 17.3484 14.601 17.421C14.5561 17.4853 14.5189 17.5548 14.4903 17.6279C14.458 17.7102 14.4403 17.7985 14.405 17.975L14 20Z"
                                stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak Ada Permintaan</h3>
                <p class="text-gray-500 mb-6">Anda tidak memiliki permintaan refill yang menunggu konfirmasi.</p>

            </div>

            <!-- Contoh ketika ada data (hidden) -->
            <div class="hidden">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-4">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Refill APAR ABC 6kg</h3>
                                <p class="text-sm text-gray-500">#REF-20230001 • 12 Mei 2023</p>
                            </div>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Menunggu</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Lokasi: Gudang Utama</p>
                                <p class="text-sm text-gray-600">Estimasi: 2-3 hari kerja</p>
                            </div>
                            <button class="text-red-600 hover:text-red-800 text-sm font-medium">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Add location --}}

        <div></div>

    @endsection
