<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'Status_message',
        'student_id',
    ];
    public function student(){
        return $this->belongsTo(User::class,'student_id','id');
    }

}
