<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

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
        return view('templates.auth.content.sign-in', $paramsData);
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
        return view('templates.auth.content.sign-up', $paramsData);
    }
}
