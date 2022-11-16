<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AuthenticateRequest;

class LoginController extends Controller
{
    public function authenticate(AuthenticateRequest $request)
    {
        $credentials = [
            'mail' => $request->mail,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->to('/');
        }
        return back()->withErrors([
            'email' => "Le mot de passe ne correspond pas à l'email indiqué.",
        ]);
    }

    public function login()
    {
        return view('auth/login');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return view('Accueil');
    }
}
