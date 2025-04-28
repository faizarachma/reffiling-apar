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
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-red-500 transition-colors cursor-pointer"
                            onclick="document.getElementById('location1').click()">
                            <div class="flex items-start">
                                <input type="radio" id="location1" name="location" class="mt-1 mr-3">
                                <div class="flex-1">
                                    <label for="location1" class="block font-medium text-gray-800 cursor-pointer">APAK
                                        Jakarta Pusat</label>
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
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-red-500 transition-colors cursor-pointer"
                            onclick="document.getElementById('location2').click()">
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
                <div id="scheduleSection" class="mb-8 hidden">
                    <h3 class="text-lg font-medium text-gray-700 mb-4">Pilih Jadwal Refill</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Schedule 1 -->
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-red-500 transition-colors cursor-pointer"
                            onclick="document.getElementById('schedule1').click()">
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
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-red-500 transition-colors cursor-pointer"
                            onclick="document.getElementById('schedule2').click()">
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
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-red-500 transition-colors cursor-pointer"
                            onclick="document.getElementById('schedule3').click()">
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
                        <div class="border border-gray-200 rounded-lg p-4 hover:border-red-500 transition-colors cursor-pointer"
                            onclick="document.getElementById('schedule4').click()">
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
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500"
                        placeholder="Masukkan catatan tambahan jika diperlukan"></textarea>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between pt-6">
                    <a href="{{ route('dashboard.create.relife') }} "
                        class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Kembali
                    </a>
                    <button>
                        <a id="submitButton" href="{{ route('customer.refile.pickupsection') }}"
                            class="px-6 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed"
                            role="button" aria-disabled="true" tabindex="0">
                            Lanjut
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const locationRadios = document.querySelectorAll('input[name="location"]');
            const scheduleRadios = document.querySelectorAll('input[name="schedule"]');
            const submitButton = document.getElementById('submitButton');
            const scheduleSection = document.getElementById('scheduleSection');

            // Pastikan section jadwal awalnya hidden
            scheduleSection.classList.add('hidden');

            // Inisialisasi: semua radio button tidak terpilih
            locationRadios.forEach(radio => radio.checked = false);
            scheduleRadios.forEach(radio => radio.checked = false);

            // Saat lokasi dipilih
            locationRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    console.log('Lokasi dipilih');
                    // Tampilkan section jadwal
                    scheduleSection.classList.remove('hidden');
                    scheduleSection.style.display = 'grid'; // Tambahkan ini

                    // Nonaktifkan tombol lanjut sampai jadwal dipilih
                    submitButton.disabled = true;

                    // Reset pilihan jadwal
                    scheduleRadios.forEach(s => s.checked = false);
                });
            });

            // Saat jadwal dipilih
            scheduleRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    console.log('Jadwal dipilih');
                    if (document.querySelector('input[name="location"]:checked') &&
                        document.querySelector('input[name="schedule"]:checked')) {
                        submitButton.disabled = false;
                        submitButton.classList.remove('bg-gray-400');
                        submitButton.classList.add('bg-red-500');
                        submitButton.classList.add('hover:bg-red-700');
                    }
                });
            });
        });

        // Fungsi untuk mengatur waktu pada jadwal yang dipilih
        function selectSchedule(id, date, time) {
            document.getElementById(id).checked = true;
            const scheduleLabel = document.querySelector(`label[for=${id}]`);
            scheduleLabel.innerHTML = `${date} <span class="font-medium text-gray-600">Waktu:</span> ${time}`;
        }
    </script>
