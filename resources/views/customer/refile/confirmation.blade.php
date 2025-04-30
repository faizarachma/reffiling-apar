@extends('layouts.app')
@section('title', 'Konfirmaisi Permintaan Refill')
@section('content')

    <div class="max-w-2xl mx-auto p-6">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Konfirmasi Permintaan</h1>
            <p class="text-gray-600">Silakan periksa detail permintaan Anda</p>
        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
            <!-- Product Details -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Detail Produk</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Tipe</p>
                        <p class="font-medium">ABC Dry Chemical</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Serial Number</p>
                        <p class="font-medium">FE-A001</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Ukuran</p>
                        <p class="font-medium">3 kg</p>
                    </div>
                </div>
            </div>

            <!-- Location & Schedule -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Lokasi & Jadwal</h2>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-gray-500">Lokasi</p>
                        <p class="font-medium">APAR Jakarta Selatan</p>
                        <p class="text-gray-600">JL Gatori Subroto No. 22</p>
                        <p class="text-gray-600">Jakarta Selatan, DK Jakarta 12930</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Tanggal & Waktu</p>
                        <div class="flex items-center space-x-2">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-blue-700 font-medium">
                                2025-05-15
                            </span>
                            <span class="text-gray-700">10:00 - 11:00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delivery Method -->
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Metode Pengiriman</h2>
                <div class="flex items-center space-x-2 mb-2">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="font-medium">Antar ke Lokasi</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Catatan</p>
                    <p class="text-gray-600 italic">ddd</p>
                </div>
            </div>

            <!-- Payment -->
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Pembayaran</h2>
                <div class="flex items-center space-x-2 mb-4">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                        </path>
                    </svg>
                    <p class="font-medium">Transfer Bank</p>
                </div>
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between">
                        <p class="text-gray-600">Biaya Refill</p>
                        <p class="font-medium">Rp 148,691</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-gray-600">Biaya Pengiriman</p>
                        <p class="font-medium">Rp 25,000</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-gray-600">Pajak (11%)</p>
                        <p class="font-medium">Rp 19,106</p>
                    </div>
                </div>
                <div class="flex justify-between border-t border-gray-200 pt-3">
                    <p class="font-semibold">Total</p>
                    <p class="text-xl font-bold text-blue-600">Rp 192,797</p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-between">
            <a href="{{ route('customer.refile.payment') }}"
                class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                Kembali
            </a>
            <a href=""
                class="px-6 py-2 border border-transparent rounded-md shadow-sm text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                Payment
            </a>
        </div>
    </div>

@endsection
