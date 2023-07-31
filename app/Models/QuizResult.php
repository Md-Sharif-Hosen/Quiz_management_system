<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user_relation()
    {
        //function_body
        return $this->hasMany(User::class,'id','user_id');
    }
    public function quiz_relation()
    {
        //function_body
        return $this->hasMany(Quiz::class,'id','quiz_id');
    }
    public function question_relation()
    {
        //function_body
        return $this->hasMany(Question::class,'id','ques_id');
    }
}
