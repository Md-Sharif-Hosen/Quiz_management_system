<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
    public function classes()
    {
        //function_body
        $classes_view = Classes::paginate(4);
        return view('admin.classes', compact('classes_view'));
    }
    public function classes_store(request $request)
    {
        //function_body
        $request->validate(
            [
                'class_name' => ['required', 'min:5'],
                'class_room_no' => ['required']
            ]
        );
        $classes = new Classes();
        $classes->class_name = request('class_name');
        $classes->class_room_no = request('class_room_no');
        $classes->teacher = request('teacher');
        $classes->save();
        return redirect()->back()->with('done', 'Class Created Successfully');
    }

    public function classes_edit($id)
    {
        //function_body
        $classes = Classes::find($id);
        return response()->json([
            'status'=>200,
            'classes'=>$classes
        ]);
    }
    public function classes_update(request $request)
    {
        //function_body
        $class_id=request('id');
        $classes_update=Classes::find($class_id);
        $classes_update->class_name = request('class_name');
        $classes_update->class_room_no = request('class_room_no');
        $classes_update->teacher = request('teacher');
        $classes_update->save();
        return redirect()->back()->with('Update','Class update successfully');

    }

    public function classes_delete($id)
    {
        //function_body
        $delete_class = Classes::where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Class Delete Successfully');
    }
}
