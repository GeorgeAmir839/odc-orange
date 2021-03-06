<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rongquestions extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_answer',
        'question_id',  
    ];
    public function questions(){
        return $this->belongsTo(Question::class,'question_id','id');
    } 
}
