@extends('layouts.app')

@section('title', 'Buat Permintaan Refill')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.progresbar')

            <!-- Product Selection -->
            @include('customer.refile.product')

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
