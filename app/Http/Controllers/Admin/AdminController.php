<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        //function_body
        return view('admin.dashboardhome');
    }
    public function profile()
    {
        //function_body
        return view('admin.profile');
    }
}
