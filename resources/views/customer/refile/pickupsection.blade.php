@extends('layouts.app')
@section('title', 'Pilih Metode Pengiriman')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('layouts.progresbar')
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">

                <h2 class="text-xl font-semibold text-gray-800 mb-6">Pilih Lokasi & Jadwal</h2>

                <!-- Delivery Method Options -->
                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Option 1: Antar ke Lokasi -->
                    <label class="block flex-1">
                        <input type="radio" name="delivery_method" value="pickup" class="hidden peer" checked>
                        <div
                            class="px-6 py-4 border-2 border-gray-200 rounded-lg peer-checked:border-red-600 peer-checked:bg-red-50 cursor-pointer hover:bg-gray-50 transition-colors h-full">
                            <div class="flex items-start">
                                <!-- Custom Radio Button -->
                                <div
                                    class="rounded-full h-6 w-6 flex items-center justify-center border-2 border-gray-300 peer-checked:border-red-600 mr-4 mt-1 flex-shrink-0 transition-colors">
                                    <div
                                        class="h-3 w-3 rounded-full bg-red-600 hidden peer-checked:block transition-colors">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600 mr-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 17a2 2 0 11-4 0 2 2 0 014 0zm7 0a2 2 0 11-4 0 2 2 0 014 0M3 3h15v15a2 2 0 01-2 2H5a2 2 0 01-2-2V3z" />
                                        </svg>
                                        <h2 class="font-semibold text-lg text-gray-800">Antar ke Lokasi</h2>
                                    </div>
                                    <p class="text-gray-600 mt-2">Kami akan mengambil APAR Anda dan mengantarkannya
                                        kembali setelah selesai refill.</p>
                                </div>
                            </div>
                        </div>
                    </label>

                    <!-- Option 2: Antar Sendiri -->
                    <label class="block flex-1">
                        <input type="radio" name="delivery_method" value="self_delivery" class="hidden peer">
                        <div
                            class="px-6 py-4 border-2 border-gray-200 rounded-lg peer-checked:border-red-600 peer-checked:bg-red-50 cursor-pointer hover:bg-gray-50 transition-colors h-full">
                            <div class="flex items-start">
                                <!-- Custom Radio Button -->
                                <div
                                    class="rounded-full h-6 w-6 flex items-center justify-center border-2 border-gray-300 peer-checked:border-red-600 mr-4 mt-1 flex-shrink-0 transition-colors">
                                    <div
                                        class="h-3 w-3 rounded-full bg-red-600 hidden peer-checked:block transition-colors">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600 mr-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                        <h2 class="font-semibold text-lg text-gray-800">Antar Sendiri</h2>
                                    </div>
                                    <p class="text-gray-600 mt-2">Anda mengantarkan APAR ke lokasi distributor dan
                                        mengambilnya setelah selesai refill.</p>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

                <!-- Additional Notes -->
                <div class="mb-8 mt-10">
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Tambahkan Locasi Detail</h3>
                    <textarea name="additional_notes" rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Masukkan Detail Lokasi"></textarea>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-between">
                    <a href="{{ route('customer.refile.jadwalandlocation') }}"
                        class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Kembali
                    </a>
                    <a href="{{ route('customer.refile.payment') }}"
                        class="px-6 py-2 border border-transparent rounded-md shadow-sm text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Lanjut
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deliveryMethodRadios = document.querySelectorAll('input[name="delivery_method"]');
            const additionalNotes = document.querySelector('textarea[name="additional_notes"]');

            deliveryMethodRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'self_delivery') {
                        additionalNotes.disabled = true;
                    } else {
                        additionalNotes.disabled = false;
                    }
                });
            });
        });
    </script>
@endsection
