<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function class_name_relation()
    {
        //function_body
        return $this->belongsTo(Classes::class,'class_name');
    }
    public function quiz_submit_user()
    {
        //function_body
        return $this->hasOne(QuizResult::class);
    }
 public function question_relations()
 {
     //function_body
     return $this->hasMany(Question::class,'quiz_id','id');
 }
}
