<?php

namespace App\Http\Controllers\Auth;

use App\Event\Authentication\LoggedIn;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        $paramsData = [
            'title' => 'Login',
            'extendsJs' => [
                asset('assets/template/libs/particles.js/particles.js'),
                asset('assets/template/js/pages/particles.app.js'),
                asset('assets/template/js/pages/password-addon.init.js'),
            ]
        ];
        return view('auth.sign-in', $paramsData);
    }

    public function register()
    {
        $paramsData = [
            'title' => 'Register',
            'extendsJs' => [
                asset('assets/template/libs/particles.js/particles.js'),
                asset('assets/template/js/pages/particles.app.js'),
                asset('assets/template/js/pages/password-addon.init.js'),
            ]
        ];
        return view('auth.sign-up', $paramsData);
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            event(new LoggedIn(auth()->user(), $request));
            return redirect()->intended('/backoffice/dashboard');
        } else {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/backoffice')->with('error', 'User tidak aktif');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/backoffice');
    }
}
