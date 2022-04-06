<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_level',
        'course_name',
        'category_id',
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function enroll(){
        return $this->hasMany(Enroll::class,'course_id','id');
    }

    public function exam(){
        return $this->hasMany(Exam::class,'course_id','id');
    }
    public function teashing(){
        return $this->hasMany(Teaching::class,'course_id','id');
    }


}
