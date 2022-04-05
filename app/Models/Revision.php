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
}
