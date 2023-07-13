<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        //function_body
        return view('forntend.layouts.website');
    }
}
