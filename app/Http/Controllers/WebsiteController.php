<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function __construct() {
        // $this->middleware('isstudent');
    }

    // public function demo()
    // {
    //     //function_body
    //     return view('forntend.demo');
    // }
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
