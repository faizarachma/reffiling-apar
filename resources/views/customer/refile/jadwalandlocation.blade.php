@extends('layouts.app')

@section('title', 'Jadwal & Lokasi Refill')


@section('content')

    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.progresbar')

            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Pilih Lokasi & Jadwal</h2>

                <!-- Pilih Lokasi -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium text-gray-700 mb-4">Lokasi Refill</h3>
                    <div class="space-y-4">
                        <!-- Location 1 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="location1" name="location" class="mt-1 mr-3" checked>
                                <div class="flex-1">
                                    <label for="location1" class="block font-medium text-gray-800 cursor-pointer">APAK
                                        Jakarta
                                        Pusat</label>
                                    <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                        <div>
                                            <span class="font-medium">AHA:</span> Tancari, 06-15
                                        </div>
                                        <div>
                                            <span class="font-medium">Jadwal:</span> 09:01
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location 2 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="location2" name="location" class="mt-1 mr-3">
                                <div class="flex-1">
                                    <label for="location2" class="block font-medium text-gray-800 cursor-pointer">APAK
                                        Bandang</label>
                                    <div class="grid grid-cols-2 gap-2 mt-2 text-sm text-gray-600">
                                        <div>
                                            <span class="font-medium">A.Ara:</span> Sofia, 05-19
                                        </div>
                                        <div>
                                            <span class="font-medium">Lokasi:</span> Bandang, Java Bawat
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pilih Jadwal -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium text-gray-700 mb-4">Pilih Jadwal Refill</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Schedule 1 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="schedule1" name="schedule" class="mt-1 mr-3">
                                <div class="flex-1">
                                    <label for="schedule1"
                                        class="block font-medium text-gray-800 cursor-pointer">2025-06-15</label>
                                    <div class="mt-2 text-sm text-gray-600">
                                        <span class="font-medium">Waktu:</span> 09:00 - 10:00
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule 2 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="schedule2" name="schedule" class="mt-1 mr-3">
                                <div class="flex-1">
                                    <label for="schedule2"
                                        class="block font-medium text-gray-800 cursor-pointer">2025-06-18</label>
                                    <div class="mt-2 text-sm text-gray-600">
                                        <span class="font-medium">Waktu:</span> 10:00 - 11:00
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule 3 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="schedule3" name="schedule" class="mt-1 mr-3">
                                <div class="flex-1">
                                    <label for="schedule3"
                                        class="block font-medium text-gray-800 cursor-pointer">2025-06-16</label>
                                    <div class="mt-2 text-sm text-gray-600">
                                        <span class="font-medium">Waktu:</span> 10:00 - 12:00
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Schedule 4 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="schedule4" name="schedule" class="mt-1 mr-3">
                                <div class="flex-1">
                                    <label for="schedule4"
                                        class="block font-medium text-gray-800 cursor-pointer">2025-06-18</label>
                                    <div class="mt-2 text-sm text-gray-600">
                                        <span class="font-medium">Waktu:</span> 09:00 - 10:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catatan Tambahan -->
                <div class="mb-8">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Catatan Tambahan</label>
                    <textarea id="notes" name="notes" rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between pt-6">
                    <a href="{{ route('dashboard.create.relife') }}"
                        class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        Buat Permintaan
                    </button>
                </div>
            </div>



        </div>
    </div>




@endsection
