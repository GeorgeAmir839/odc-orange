<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_wrong_degree',
        'total_right_degree',
        'student_degree',
        'exam_id',
        'student_id'
    ];

    public function student(){
        return $this->belongsTo(User::class,'student_id','id');
    }
    
    public function exam(){
        return $this->belongsTo(Exam::class,'exam_id','id');
    }




}
