<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
        public function showFormLogin()
        {
            return view('auth.login.login');
        }
        public function handleLogin()
        {

        }
        public function showFormRegister()
        {
            return view('auth.login.register');
        }
        public function handleRegister()
        {
            $data = request()->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
            ]);

            $user = User::query()->create($data);

            Auth::login($user);

            request()->session()->regenerate();

            return redirect()->route('welcome');

        }
        public function logout()
        {

        }
}
