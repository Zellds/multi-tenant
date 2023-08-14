<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $tenants = auth()->user()->tenants;

        return view('dashboard', ['tenants' => $tenants]);
    }
}
