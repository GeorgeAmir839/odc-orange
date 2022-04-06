<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainer_name',
        'phone',
        'email'
    ];
    public function teashing(){
        return $this->hasMany(Teaching::class,'trainer_id','id');
    }
}
