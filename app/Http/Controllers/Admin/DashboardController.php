<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{   
    /**
    * __construct
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * index
     */
    public function index()
    {
        return view('admin.dashboard', ['type_menu' => 'dashboard']);
    }
}
