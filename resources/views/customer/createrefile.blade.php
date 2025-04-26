@extends('layouts.app')

@section('title', 'Buat Permintaan Refill')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.progresbar')

            <!-- Product Selection -->
            @include('customer.refile.product')


            <!-- Navigation Buttons -->
            <div class="flex justify-between pt-10">
                <a href="{{ route('customer.refill.product') }}"
                    class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Kembali
                </a>
                <a onclick="window.location" href="{{ route('customer.refill.jadwalandlocation') }}"
                    class="px-6 py-2 bg-red-800 text-white rounded-md hover:bg-red-800 transition-colors">
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}
@endpush
