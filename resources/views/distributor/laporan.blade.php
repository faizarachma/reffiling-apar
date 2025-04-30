<!-- resources/views/reports/movement.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Laporan Pergerakan Stok</h1>
                <p class="text-gray-600">Periode: {{ $startDate->format('d M Y') }} - {{ $endDate->format('d M Y') }}</p>
            </div>
            <div class="flex space-x-3">
                <button onclick="window.print()"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z">
                        </path>
                    </svg>
                    Cetak
                </button>
                <button id="exportPdf"
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                    </svg>
                    Export PDF
                </button>
            </div>
        </div>

        <!-- Filter -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <form method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="product" class="block text-sm font-medium text-gray-700 mb-1">Produk</label>
                    <select id="product" name="product"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Semua Produk</option>

                        <option value="">
                        </option>

                    </select>
                </div>
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Jenis</label>
                    <select id="type" name="type"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Semua Jenis</option>
                        <option value="in" {{ request('type') == 'in' ? 'selected' : '' }}>Stok Masuk</option>
                        <option value="out" {{ request('type') == 'out' ? 'selected' : '' }}>Stok Keluar</option>
                    </select>
                </div>
                <div>
                    <label for="user" class="block text-sm font-medium text-gray-700 mb-1">User</label>
                    <select id="user" name="user"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Semua User</option>

                        <option </option>

                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
                        Filter
                    </button>
                </div>
            </form>
        </div>

        <!-- Grafik Pergerakan Stok -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Grafik Pergerakan
