<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $paramsData = [
            'title' => 'Homepage',
            'extendsJs' => [
                asset('assets/template/js/pages/landing.init.js')
            ]
        ];
        return view('templates.frontend.app', $paramsData);
    }
}
