@extends('layouts.app')

@section('title', 'Buat Permintaan Refill')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Progress Steps -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Buat Permintaan Refill</h1>

                <div class="flex justify-between items-center mb-4">
                    <div class="flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-red-800 flex items-center justify-center text-white font-bold mb-2">
                            1</div>
                        <span class="text-sm font-medium text-red-800">Produk</span>
                    </div>
                    <div class="flex-1 h-1 bg-red-200 mx-2"></div>
                    <div class="flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold mb-2">
                            2</div>
                        <span class="text-sm font-medium text-gray-500">Lokasi & Jadwal</span>
                    </div>

                    <div class="flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div class="flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold mb-2">
                            4</div>
                        <span class="text-sm font-medium text-gray-500">Pengiriman</span>
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div class="flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold mb-2">
                            5</div>
                        <span class="text-sm font-medium text-gray-500">Pembayaran</span>
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div class="flex flex-col items-center">
                        <div
                            class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold mb-2">
                            6</div>
                        <span class="text-sm font-medium text-gray-500">Konfirmasi</span>
                    </div>
                </div>
            </div>

            <!-- Product Selection -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Pilih Produk untuk Refill</h2>

                <div class="space-y-4">
                    <!-- Product 1 -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                        <div class="flex items-start">
                            <input type="radio" id="product1" name="product" class="mt-1 mr-3" checked>
                            <div class="flex-1">
                                <label for="product1" class="block font-medium text-gray-800 cursor-pointer">ABC Dry
                                    Chemical</label>
                                <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                    <div>
                                        <span class="font-medium">SN:</span> FE-K002
                                    </div>
                                    <div>
                                        <span class="font-medium">Ukuran:</span> 9 kg
                                    </div>
                                    <div>
                                        <span class="font-medium">Refill Terakhir:</span> 2024-01-15
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                        <div class="flex items-start">
                            <input type="radio" id="product2" name="product" class="mt-1 mr-3">
                            <div class="flex-1">
                                <label for="product2" class="block font-medium text-gray-800 cursor-pointer">CO2</label>
                                <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                    <div>
                                        <span class="font-medium">SN:</span> FE-K002
                                    </div>
                                    <div>
                                        <span class="font-medium">Ukuran:</span> 9 kg
                                    </div>
                                    <div>
                                        <span class="font-medium">Refill Terakhir:</span> 2024-02-20
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                        <div class="flex items-start">
                            <input type="radio" id="product3" name="product" class="mt-1 mr-3">
                            <div class="flex-1">
                                <label for="product3" class="block font-medium text-gray-800 cursor-pointer">Foam</label>
                                <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                    <div>
                                        <span class="font-medium">SN:</span> FE-K003
                                    </div>
                                    <div>
                                        <span class="font-medium">Ukuran:</span> 9 kg
                                    </div>
                                    <div>
                                        <span class="font-medium">Refill Terakhir:</span> 2023-11-10
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between">
                <a href="#"
                    class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Kembali
                </a>
                <a href="#" class="px-6 py-2 bg-red-800 text-white rounded-md hover:bg-red-800 transition-colors">
                    Lanjut
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Add any custom JavaScript here if needed
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Flatpickr for date input
            flatpickr("#datePicker", {
                dateFormat: "Y-m-d",
                minDate: "today"
            });
        });
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endpush
