<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function __construct()
    {
        View::share('title', 'Real Estate');
    }

    public function login()
    {
        return view('admin.layout.auth.login');
    }

    public function logging(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == UserRoleEnum::ADMIN) {
                return redirect()->route('admin.welcome');
            } else {
                return redirect()->route('homepage');
            }
        } else {
            return redirect()->route('login')->withErrors([
                'email' => 'Email hoặc tài khoản không đúng',
                'password' => 'Email hoặc tài khoản không đúng',
            ]);
        }
    }

    public function register()
    {
        return view('admin.layout.auth.register');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');

    }

    public function callback($provider)
    {
        //get current login user of social
        $user = Socialite::driver($provider)->user();
        //check if user existed
        $isExistedUser = User::query()
            ->where('email', $user->getEmail())
            ->first();
        $user = User::updateOrCreate([
            'email' => $user->getEmail(),
        ], [
            'name' => $user->getName(),
        ]);

        Auth::login($user, true);

        if ($isExistedUser) {
            if (Auth::user()->role == UserRoleEnum::ADMIN) {
                return redirect()->route('admin.welcome');
            } else {
                return redirect()->route('homepage');
            }
        } else {
            return redirect()->route('register');
        }
    }

    public function registering(Request $request)
    {
        $password = Hash::make(request('password'));

        if (auth()->check()) {
            User::query()
                ->where('id', auth()->user()->id)
                ->update([
                    'password' => $password,
                ]);
        } else {
            $newUser = User::create([
                'name' => request('name'),
                'password' => $password,
                'email' => request('email'),
            ]);

            Auth::login($newUser);
        }

        if (Auth::user()->role == UserRoleEnum::ADMIN) {
            return redirect()->route('admin.welcome');
        } else {
            return redirect()->route('homepage');
        }

    }
}
