@extends('auth.main')
@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-red-600 py-4 px-6">
                <h1 class="text-2xl font-bold text-white">APARRefill</h1>
                <p class="text-white text-opacity-90 text-sm mt-1">Distributor & Admin Portal</p>
            </div>

            <!-- Form Login -->
            <div class="p-6 space-y-6">
                <div class="text-center">
                    <h2 class="text-xl font-semibold text-gray-800">Login Distributor/Admin</h2>
                    @if ($errors->any())
                        <div class="mt-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 rounded">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="mt-4 p-3 bg-green-100 border-l-4 border-green-500 text-green-700 rounded">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
                </div>

                <!-- Customer access warning (only shown if somehow customer gets here) -->
                @auth
                    @if (auth()->user()->role === 'customer')
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded" role="alert">
                            <p class="font-bold">Akses Ditolak</p>
                            <p>Halaman ini khusus untuk Distributor & Admin. Silakan login melalui halaman customer.</p>
                            <a href="{{ route('customer.login') }}"
                                class="text-red-600 hover:text-red-800 underline text-sm mt-2 inline-block">Ke Halaman Customer
                                Login</a>
                        </div>
                    @endif
                @endauth

                <form id="loginForm" class="space-y-4" method="POST" action="{{ route('login.post') }}">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition
                            @error('email') border-red-500 @enderror"
                            required autofocus>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="••••••••"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition pr-10
                                @error('password') border-red-500 @enderror"
                                required>
                            <button type="button" id="togglePassword"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg font-medium transition duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';

            passwordInput.setAttribute('type', type);
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });

        // Auto-focus email field if empty, otherwise password
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            if (!emailInput.value) {
                emailInput.focus();
            } else {
                document.getElementById('password').focus();
            }
        });
    </script>
@endsection
