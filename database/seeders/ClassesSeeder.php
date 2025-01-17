<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Classes::truncate();
        Classes::create([
            'class_name'=>'CSE 1st Semester',
            'class_room_no'=>105,
            'teacher'=>'MD.Sharif Ahmed'
        ]);
        Classes::create([
            'class_name'=>'CSE 2nd Semester',
            'class_room_no'=>205,
            'teacher'=>'MD.Sharif Ahmed'
        ]);
        Classes::create([
            'class_name'=>'CSE 3rd Semester',
            'class_room_no'=>305,
            'teacher'=>'MD.Sharif Ahmed'
        ]);
    }
}
