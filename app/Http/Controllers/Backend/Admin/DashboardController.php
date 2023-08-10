<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $paramsData = [
            'title' => 'Dasboard',
            'sidebar' => [
                'parent' => 'Dashboard'
            ],
            'breadcumb' => (object) [
                'title' => 'Dasboard',
                'link' => [
                    '<li class="breadcrumb-item active">Dashboard</li>',
                ]
            ],
        ];

        return view('backend.admin.dashboard', $paramsData);
    }
}
