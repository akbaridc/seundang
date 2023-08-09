<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    public function login()
    {

        return view('templates.auth.content.sign-in', [
            'title' => 'Login',
            'includesJs' => [
                asset('assets/template/libs/particles.js/particles.js'),
                asset('assets/template/js/pages/particles.app.js'),
                asset('assets/template/js/pages/password-addon.init.js'),
            ]
        ]);
    }

    public function register()
    {

        return view('templates.auth.content.sign-up', [
            'title' => 'Register',
            'includesJs' => [
                asset('assets/template/libs/particles.js/particles.js'),
                asset('assets/template/js/pages/particles.app.js'),
                asset('assets/template/js/pages/password-addon.init.js'),
            ]
        ]);
    }
}
