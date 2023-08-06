<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Quiz::truncate();
        Quiz::create([
            "quizz_subject"=>"C Programing",
            "class_name"=>1,
            "teacher"=>"Md.Sharif Ahmed",
            "cover_image"=>"quizz/c.jpg",
            'status'=>1
        ]);
        Quiz::create([
            "quizz_subject"=>"Math",
            "class_name"=>2,
            "teacher"=>"Md.Sharif Ahmed",
            "cover_image"=>"quizz/math.webp",
            'status'=>1
        ]);

    }
}
