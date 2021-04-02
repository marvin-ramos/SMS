<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Fee extends Model
{
    use HasFactory;

    protected $fillable = [
    	'fee_id',
    	'student_id',
    	'level_id',
    	'amount',
    ];
}
