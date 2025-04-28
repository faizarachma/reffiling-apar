@extends('layouts.app')

@section('title', 'Dashboard Customer')

@section('content')
    <div class="min-h-screen bg-gray-100 p-6 min-h-screen">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard Customer</h1>
                    <p>Selamat Datang, {{ Auth::user()->name }}</p>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('dashboard.create.relife') }}'"
                        class="px-4
                        py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-200 flex items-center">

                        <svg viewBox="0 0 24 24" fill="none" class="w-7 h-7 pr-2" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M9 12H15" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 9L12 15" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                    stroke="#ffffff" stroke-width="2"></path>
                            </g>
                        </svg>
                        Buat Permintaan Refill
                    </button>

                </div>
            </div>

            <div class="flex flex-wrap gap-4 p-4">
                <!-- Menunggu -->
                <div class="bg-white rounded-lg shadow-md p-4 w-90">
                    <!-- Clock icon for "In Progress" status -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
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
                <div class="bg-white rounded-lg shadow-md p-4 w-90">
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
                <div class="bg-white rounded-lg shadow-md p-4 w-90">
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

            <!-- Products Section -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Produk Saya</h2>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 ">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    SERIAL NUMBER</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    TIPE</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    UKURAN</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    REFILL TERAKHIR</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    JUMLAH REFILL</th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ACTION </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-gray-900">FE-A001</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">ABC Dry Chemical</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">3 kg</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">2024-01-15</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">
                                    <div class="flex items-center justify-center">
                                        <button
                                            class="flex items-center justify-center bg-blue-800 hover:bg-blue-400 text-white hover:text-white font-semibold text-sm p-3 rounded-full mr-3 transition-colors duration-200">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4 mr-1">
                                                <path
                                                    d="M8 5.00005C7.01165 5.00082 6.49359 5.01338 6.09202 5.21799C5.71569 5.40973 5.40973 5.71569 5.21799 6.09202C5 6.51984 5 7.07989 5 8.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.07989 21 8.2 21H15.8C16.9201 21 17.4802 21 17.908 20.782C18.2843 20.5903 18.5903 20.2843 18.782 19.908C19 19.4802 19 18.9201 19 17.8V8.2C19 7.07989 19 6.51984 18.782 6.09202C18.5903 5.71569 18.2843 5.40973 17.908 5.21799C17.5064 5.01338 16.9884 5.00082 16 5.00005M8 5.00005V7H16V5.00005M8 5.00005V4.70711C8 4.25435 8.17986 3.82014 8.5 3.5C8.82014 3.17986 9.25435 3 9.70711 3H14.2929C14.7456 3 15.1799 3.17986 15.5 3.5C15.8201 3.82014 16 4.25435 16 4.70711V5.00005M15 12H12M15 16H12M9 12H9.01M9 16H9.01"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            Lihat
                                        </button>
                                        <button
                                            class="flex items-center justify-center bg-red-800 hover:bg-red-600 text-white hover:text-white font-semibold text-sm mr-3 p-3 rounded-full">
                                            <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4 mr-1"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M21 5L19 12H7.37671M20 16H8L6 3H3M16 5.5H13.5M13.5 5.5H11M13.5 5.5V8M13.5 5.5V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                            Refill</button>
                                    </div>

                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-gray-900">FE-A002</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">CO2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">5 kg</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">2024-02-20</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">
                                    <div class="flex items-center justify-center">
                                        <button
                                            class="flex items-center justify-center bg-blue-800 hover:bg-blue-400 text-white hover:text-white font-semibold text-sm p-3 rounded-full mr-3 transition-colors duration-200">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4 mr-1">
                                                <path
                                                    d="M8 5.00005C7.01165 5.00082 6.49359 5.01338 6.09202 5.21799C5.71569 5.40973 5.40973 5.71569 5.21799 6.09202C5 6.51984 5 7.07989 5 8.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.07989 21 8.2 21H15.8C16.9201 21 17.4802 21 17.908 20.782C18.2843 20.5903 18.5903 20.2843 18.782 19.908C19 19.4802 19 18.9201 19 17.8V8.2C19 7.07989 19 6.51984 18.782 6.09202C18.5903 5.71569 18.2843 5.40973 17.908 5.21799C17.5064 5.01338 16.9884 5.00082 16 5.00005M8 5.00005V7H16V5.00005M8 5.00005V4.70711C8 4.25435 8.17986 3.82014 8.5 3.5C8.82014 3.17986 9.25435 3 9.70711 3H14.2929C14.7456 3 15.1799 3.17986 15.5 3.5C15.8201 3.82014 16 4.25435 16 4.70711V5.00005M15 12H12M15 16H12M9 12H9.01M9 16H9.01"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            Lihat
                                        </button>
                                        <button
                                            class="flex items-center justify-center bg-red-800 hover:bg-red-600 text-white hover:text-white font-semibold text-sm mr-3 p-3 rounded-full">
                                            <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4 mr-1"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M21 5L19 12H7.37671M20 16H8L6 3H3M16 5.5H13.5M13.5 5.5H11M13.5 5.5V8M13.5 5.5V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                            Refill</button>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-gray-900">FE-A003</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">Foam</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">9 kg</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">2023-11-10</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-500">
                                    <div class="flex items-center justify-center">
                                        <button
                                            class="flex items-center justify-center bg-blue-800 hover:bg-blue-400 text-white hover:text-white font-semibold text-sm p-3 rounded-full mr-3 transition-colors duration-200">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4 mr-1">
                                                <path
                                                    d="M8 5.00005C7.01165 5.00082 6.49359 5.01338 6.09202 5.21799C5.71569 5.40973 5.40973 5.71569 5.21799 6.09202C5 6.51984 5 7.07989 5 8.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.07989 21 8.2 21H15.8C16.9201 21 17.4802 21 17.908 20.782C18.2843 20.5903 18.5903 20.2843 18.782 19.908C19 19.4802 19 18.9201 19 17.8V8.2C19 7.07989 19 6.51984 18.782 6.09202C18.5903 5.71569 18.2843 5.40973 17.908 5.21799C17.5064 5.01338 16.9884 5.00082 16 5.00005M8 5.00005V7H16V5.00005M8 5.00005V4.70711C8 4.25435 8.17986 3.82014 8.5 3.5C8.82014 3.17986 9.25435 3 9.70711 3H14.2929C14.7456 3 15.1799 3.17986 15.5 3.5C15.8201 3.82014 16 4.25435 16 4.70711V5.00005M15 12H12M15 16H12M9 12H9.01M9 16H9.01"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            Lihat
                                        </button>
                                        <button
                                            class="flex items-center justify-center bg-red-800 hover:bg-red-600 text-white hover:text-white font-semibold text-sm mr-3 p-3 rounded-full">
                                            <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4 mr-1"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M21 5L19 12H7.37671M20 16H8L6 3H3M16 5.5H13.5M13.5 5.5H11M13.5 5.5V8M13.5 5.5V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                            Refill</button>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Refill Requests Section -->
            <div class="p-6 mb-8">
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 md:mb-0">Permintaan Refill</h2>
                    <div class="flex border-b">
                        <button class="px-4 py-2 font-medium text-blue-600 border-b-2 border-blue-600">Aktif</button>
                        <button class="px-4 py-2 font-medium text-gray-500 hover:text-blue-600">Riwayat</button>
                        <button class="px-4 py-2 font-medium text-gray-500 hover:text-blue-600">Semua</button>
                    </div>
                </div>

                <!-- Request Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Request Card 1 -->
                    <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <span class="text-sm text-gray-500 block">ID Permintaan: #2</span>
                                    <h3 class="text-lg font-bold text-gray-800">CO2 (5 kg)</h3>
                                </div>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded-full">Aktif</span>
                            </div>

                            <div class="space-y-4">
                                <!-- Location Info -->
                                <div class="flex">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-700">APAR Bandung</p>
                                        <p class="text-sm text-gray-500">Jl. Asia Afrika No. 78, Bandung</p>
                                    </div>
                                </div>

                                <!-- Date/Time Info -->
                                <div class="flex">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-700">16 May 2025</p>
                                        <div class="mt-1 space-y-1 text-sm text-gray-500">
                                            <div class="flex items-center">
                                                <span class="mr-2">🕘 09:00 - 10:00</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="mr-2">🚚 Jemput di Tempat</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="mr-2">🔢 SN: FE-A002</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 flex justify-end">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm font-medium transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Request Card 2 -->
                    <div class="bg-white rounded-lg shadow-md border border-gray-100 overflow-hidden">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <span class="text-sm text-gray-500 block">ID Permintaan: #3</span>
                                    <h3 class="text-lg font-bold text-gray-800">Foam (9 kg)</h3>
                                </div>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Dikonfirmasi</span>
                            </div>

                            <div class="space-y-4">
                                <!-- Location Info -->
                                <div class="flex">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-700">APAR Jakarta Selatan</p>
                                        <p class="text-sm text-gray-500">Jl. Gator Subroto No. 22, Jakarta Selatan</p>
                                    </div>
                                </div>

                                <!-- Date/Time Info -->
                                <div class="flex">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400 mr-3 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-700">16 May 2025</p>
                                        <div class="mt-1 space-y-1 text-sm text-gray-500">
                                            <div class="flex items-center">
                                                <span class="mr-2">🕘 10:00 - 11:00</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="mr-2">🚛 Antar ke Lokasi</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="mr-2">🔢 SN: FE-A003</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 flex justify-end">
                            <button
                                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm font-medium transition-colors">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
