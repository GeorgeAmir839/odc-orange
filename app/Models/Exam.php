<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
    ];
    public function course(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function Questions(){
        return $this->hasMany(Question::class,'exam_id','id');
    }

    public function  Revision(){
        return $this->hasMany(Revision::class,'exam_id','id');
    }

}
