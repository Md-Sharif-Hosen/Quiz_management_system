<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        //function_body
        return view('forntend.home');
    }

    public function profile()
    {
        //function_body

        return view('forntend.profile');
    }

}
