<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Question::truncate();
        Question::create([
            'quiz_id'=>1,
            'question_title'=>"int x=~1; What is the value of 'x'?",
            'optionA'=>'1',
            "optionB"=>"-2",
            "optionC"=>"-1",
            "optionD"=>"2",
            "answer"=>"-2"
        ]);
        Question::create([
            'quiz_id'=>1,
            'question_title'=>"Which operator is used to continue the definition of macro in the next line?",
            'optionA'=>'#',
            "optionB"=>"$",
            "optionC"=>"##",
            "optionD"=>"/",
            "answer"=>"/"
        ]);
        Question::create([
            'quiz_id'=>1,
            'question_title'=>"Identify the invalid constant used in fseek() function as ‘whence’ reference.?",
            'optionA'=>'- SEEK_END',
            "optionB"=>" - SEEK_BEG",
            "optionC"=>"- SEEK_SET",
            "optionD"=>"- SEEK_CUR",
            "answer"=>" - SEEK_BEG"
        ]);
        Question::create([
            'quiz_id'=>1,
            'question_title'=>" Choose the invalid predefined macro as per ANSI C.",
            'optionA'=>'__FILE__',
            "optionB"=>" __TIME__",
            "optionC"=>"__C++__",
            "optionD"=>"__DATE__",
            "answer"=>"__C++__"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>"Find the sum of 111 + 222 + 333",
            'optionA'=>'700',
            "optionB"=>"666",
            "optionC"=>"300",
            "optionD"=>"100",
            "answer"=>"666"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>"Find the sum of 111 + 222 + 333",
            'optionA'=>'505',
            "optionB"=>"2500",
            "optionC"=>"500",
            "optionD"=>"None of these",
            "answer"=>"None of these"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>" Find the product of 72 × 3",
            'optionA'=>'216',
            "optionB"=>"643",
            "optionC"=>"145",
            "optionD"=>"130",
            "answer"=>"216"
        ]);
    }
}
