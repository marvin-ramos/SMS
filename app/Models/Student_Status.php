<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Status extends Model
{
    use HasFactory;

    protected $fillable = [
    	'student_id',
    	'student_class_id',
    ];
}
