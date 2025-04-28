@extends('layouts.app')

@section('title', 'Pilih Metode Pembayaran')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.progresbar') <!-- Jika ada progress bar -->

            <div class="bg-white rounded-lg shadow-md p-6 mb-8"">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Pilih Metode Pembayaran</h2>

                <!-- Daftar Metode Pembayaran -->
                <div class="space-y-4 mb-8">
                    <!-- Transfer Bank -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors cursor-pointer"
                        onclick="selectPaymentMethod('bank')">
                        <div class="flex items-start">
                            <input type="radio" id="bank" name="payment_method" value="bank" class="mt-1 mr-3">
                            <div class="flex-1">
                                <label for="bank" class="block font-medium text-gray-800 cursor-pointer">Transfer
                                    Bank</label>
                                <p class="mt-1 text-sm text-gray-600">Transfer ke rekening yang kami sediakan</p>
                            </div>
                        </div>
                    </div>

                    <!-- E-Wallet -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors cursor-pointer"
                        onclick="selectPaymentMethod('ewallet')">
                        <div class="flex items-start">
                            <input type="radio" id="ewallet" name="payment_method" value="ewallet" class="mt-1 mr-3">
                            <div class="flex-1">
                                <label for="ewallet"
                                    class="block font-medium text-gray-800 cursor-pointer">E-Wallet</label>
                                <p class="mt-1 text-sm text-gray-600">Bayar dengan e-wallet favorit Anda</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bayar di Tempat -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:border-blue-500 transition-colors cursor-pointer"
                        onclick="selectPaymentMethod('cod')">
                        <div class="flex items-start">
                            <input type="radio" id="cod" name="payment_method" value="cod" class="mt-1 mr-3">
                            <div class="flex-1">
                                <label for="cod" class="block font-medium text-gray-800 cursor-pointer">Bayar di
                                    Tempat</label>
                                <p class="mt-1 text-sm text-gray-600">Bayar setelah refill selesai</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between">
                    <a href="{{ route('customer.refile.pickupsection') }}"
                        class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Kembali
                    </a>
                    <a href="{{ route('customer.refile.confirmation') }}"
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
        function selectPaymentMethod(method) {
            document.getElementById(method).checked = true;
            document.getElementById('continueBtn').disabled = false;
        }

        function processPayment() {
            const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
            if (selectedMethod) {
                // Lakukan proses pembayaran sesuai metode yang dipilih
                alert(`Metode pembayaran dipilih: ${selectedMethod.value}`);

            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi: nonaktifkan tombol lanjut sampai metode dipilih
            document.getElementById('continueBtn').disabled = true;
        });

        // Fungsi untuk mengubah tampilan tombol "Lanjut" saat metode pembayaran dipilih
        function updateContinueButton() {
            const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
            const continueBtn = document.getElementById('continueBtn');

            if (selectedMethod) {
                continueBtn.classList.remove('bg-gray-400', 'pointer-events-none');
                continueBtn.classList.add('bg-red-800', 'hover:bg-red-700');
                continueBtn.disabled = false;
            } else {
                continueBtn.classList.add('bg-gray-400', 'pointer-events-none');
                continueBtn.classList.remove('bg-red-800', 'hover:bg-red-700');
                continueBtn.disabled = true;
            }
        }
        // Event listener untuk setiap radio button
        const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
        paymentMethods.forEach(method => {
            method.addEventListener('change', updateContinueButton);
        });
    </script>
@endsection
