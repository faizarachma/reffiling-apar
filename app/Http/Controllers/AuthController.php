<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            /** @var \App\Models\User $user */
            $user = Auth::user();

            return match($user->role) {
                'customer' => redirect()->route('customer.dashboard'),
                'admin' => redirect()->route('admin.dashboard'),
                default => redirect()->intended('/')
            };
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function register()
    {
        return view('auth.user.register');
    }


    public function registerPost(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'customer', // Set default role
        ]);


        Auth::login($user);

        return redirect()->route('customer.dashboard')->with('success', 'Registrasi berhasil!, Silahkan login');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out.');
    }

    public function profile()
    {
        return view('customer.profile');
    }


    public function showloginDistributor(){
        return view('auth.distributor-admin.login');
    }

   public function loginDistributor(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Periksa role yang diizinkan (admin atau agen)
            if ($user->role === 'customer') {
                Auth::logout();
                return back()
                    ->withErrors([
                        'email' => 'Hanya distributor dan admin yang dapat mengakses sistem ini.',
                    ])
                    ->onlyInput('email');
            }

            // Redirect berdasarkan role
            if ($user->role === 'agent') {
                return redirect()->intended(route('admin.dashboard'));
            } elseif ($user->role === 'operator') {
                return redirect()->intended(route('admin.dashboard'));
            }
        }

        // Jika autentikasi gagal
        return back()
            ->withErrors([
                'email' => 'Email atau password tidak valid.',
            ])
            ->onlyInput('email');
    }



    public function showloginOperator(){
        return view('auth.operator.login');
    }

}
