<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_name',
        'question_answer',
        'exam_id',
    ];
    public function exam(){
        return $this->belongsTo(Exam::class,'exam_id','id');
    }
    public function Message(){
        return $this->hasMany(Rongquestions::class,'question_id','id');
    }


}
