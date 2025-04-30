@extends('auth.main')
@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-red-600 py-4 px-6">
                <h1 class="text-2xl font-bold text-white">APARRefill</h1>
            </div>

            <!-- Form Login -->
            <div class="p-6 space-y-6">
                <div class="text-center">
                    <h2 class="text-xl font-semibold text-gray-800">Masuk ke akun Anda</h2>
                    <p class="text-gray-500 mt-1">Kelola layanan dan pemesanan APAR Anda</p>
                </div>

                <form id="loginForm" class="space-y-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="nama@email.com"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition"
                            required>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="••••••••"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition pr-10"
                                required>
                            <button type="button" id="togglePassword"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember" type="checkbox"
                                class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                        </div>

                    </div>

                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg font-medium transition duration-200 shadow-md hover:shadow-lg">
                        Masuk
                    </button>
                </form>


                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Atau</span>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-gray-600">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-red-600 font-medium hover:text-red-800 ml-1">Daftar
                            sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
