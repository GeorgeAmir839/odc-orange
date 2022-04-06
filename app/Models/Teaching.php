<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainer_id',
        'course_id',  
    ];
    public function trainers(){
        return $this->belongsTo(Trainer::class,'trainer_id','id');
    }
    public function courses(){
        return $this->belongsTo(Course::class,'course_id','id');
    }

}
