<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
    public function classes()
    {
        //function_body
        return view('admin.classes');
    }
    public function classes_store(request $request)
    {
        //function_body
        return redirect()->back()->with('done', 'User Created Successfully');
    }

}
