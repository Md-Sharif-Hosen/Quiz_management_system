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
            "answer"=>"1,-2"
        ]);
        Question::create([
            'quiz_id'=>1,
            'question_title'=>"Which operator is used to continue the definition of macro in the next line?",
            'optionA'=>'#',
            "optionB"=>"$",
            "optionC"=>"##",
            "optionD"=>"/",
            "answer"=>"/,$"
        ]);
        Question::create([
            'quiz_id'=>1,
            'question_title'=>"Identify the invalid constant used in fseek() function as ‘whence’ reference.?",
            'optionA'=>'-SEEK_END',
            "optionB"=>"-SEEK_BEG",
            "optionC"=>"-SEEK_SET",
            "optionD"=>"-SEEK_CUR",
            "answer"=>"-SEEK_BEG"
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
            'quiz_id'=>1,
            'question_title'=>"First operating system designed using C programming language",
            'optionA'=>'DOS',
            "optionB"=>"Windows",
            "optionC"=>"UNIX",
            "optionD"=>"Mac",
            "answer"=>"UNIX"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>"Find the sum of 111 + 222 + 333",
            'optionA'=>'700',
            "optionB"=>"666",
            "optionC"=>"300",
            "optionD"=>"100",
            "answer"=>"666,100"
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
            "answer"=>"216,130"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>"What is the sum of 5x3 – 3x2 - 1 and 3x2 + 1?",
            'optionA'=>'5x3',
            "optionB"=>"6x2",
            "optionC"=>"5x",
            "optionD"=>"3x2",
            "answer"=>"5x3"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>"The wages of 10 workers for a six-day week is $ 1200. What are the one day’s wages of 4 workers?",
            'optionA'=>'$ 40',
            "optionB"=>"$ 80",
            "optionC"=>"$ 35",
            "optionD"=>"$ 60",
            "answer"=>"$ 80"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>"The wages of 10 workers for a six-day week is $ 1200. What are the one day’s wages of 4 workers?",
            'optionA'=>'$ 40',
            "optionB"=>"$ 80",
            "optionC"=>"$ 35",
            "optionD"=>"$ 60",
            "answer"=>"$ 80"
        ]);
        Question::create([
            'quiz_id'=>2,
            'question_title'=>" If David’s age is 27 years old in 2011. What was his age in 2003?",
            'optionA'=>'17 years',
            "optionB"=>"21 years",
            "optionC"=>"19 years",
            "optionD"=>"31 years",
            "answer"=>"19 years"
        ]);
        Question::create([
            'quiz_id'=>3,
            'question_title'=>"The 'ROM' stands for?",
            'optionA'=>'read only memory',
            "optionB"=>"random only memory",
            "optionC"=>"readily object memory",
            "optionD"=>"random available memory",
            "answer"=>"read only memory"
        ]);
        Question::create([
            'quiz_id'=>3,
            'question_title'=>"Line printer, a voice synthesizer and computer terminal screen are classic examples of?",
            'optionA'=>'analogue circuit devices',
            "optionB"=>"logic circuit devices",
            "optionC"=>"AND gate devices",
            "optionD"=>"output devices",
            "answer"=>"output devices"
        ]);
        Question::create([
            'quiz_id'=>3,
            'question_title'=>"Person who operates and controls the hardware components in a computer room is called?",
            'optionA'=>'data operator',
            "optionB"=>"computer operator",
            "optionC"=>"trail operator",
            "optionD"=>"processing operator",
            "answer"=>"computer operator"
        ]);
        Question::create([
            'quiz_id'=>3,
            'question_title'=>"In positive integers, largest number that can be stored with 'n' bits is called?",
            'optionA'=>'2n-3',
            "optionB"=>"2n-2",
            "optionC"=>"2n",
            "optionD"=>"2n-1",
            "answer"=>"2n-1"
        ]);
        Question::create([
            'quiz_id'=>3,
            'question_title'=>"In the line 300 INPUT NUM: PRINT 4.2*NUM*NUM+17 of a BASIC program, the '300' is?",
            'optionA'=>'line number',
            "optionB"=>"identifier",
            "optionC"=>"single number",
            "optionD"=>"variable",
            "answer"=>"line number"
        ]);
        Question::create([
            'quiz_id'=>4,
            'question_title'=>"The default access specifer for the class members is",
            'optionA'=>'public',
            "optionB"=>"protected",
            "optionC"=>"None of the above",
            "optionD"=>"private",
            "answer"=>"public,private"
        ]);
        Question::create([
            'quiz_id'=>4,
            'question_title'=>"Operators sizeof and ?",
            'optionA'=>'Both can be overloaded',
            "optionB"=>"Both cannot be overloaded",
            "optionC"=>"Only sizeof can be overloaded",
            "optionD"=>"Only ?: can be overloaded",
            "answer"=>"Both cannot be overloaded"
        ]);
        Question::create([
            'quiz_id'=>4,
            'question_title'=>"What is the full form of STL?",
            'optionA'=>'Standard template library.',
            "optionB"=>"System template library",
            "optionC"=>"Standard topics library",
            "optionD"=>"None of the above",
            "answer"=>"Standard template library."
        ]);
        Question::create([
            'quiz_id'=>4,
            'question_title'=>"Who invented C++?",
            'optionA'=>'Dennis Ritchie',
            "optionB"=>"Ken Thompson",
            "optionC"=>"Bjarne Stroustrup",
            "optionD"=>"Brian Kernighan",
            "answer"=>"Bjarne Stroustrup"
        ]);
        Question::create([
            'quiz_id'=>4,
            'question_title'=>"What is C++?",
            'optionA'=>'C++ is an object oriented programming language',
            "optionB"=>"C++ is a procedural programming language",
            "optionC"=>"C++ is a functional programming language",
            "optionD"=>"C++ supports both procedural and object oriented programming language",
            "answer"=>"C++ supports both procedural and object oriented programming language"
        ]);
        Question::create([
            'quiz_id'=>4,
            'question_title'=>"Which of the following user-defined header file extension used in c++?",
            'optionA'=>'h',
            "optionB"=>"cpp",
            "optionC"=>"hf",
            "optionD"=>"hg",
            "answer"=>"cpp"
        ]);

    }
}
