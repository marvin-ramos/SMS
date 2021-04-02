<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Class extends Model
{
    use HasFactory;

    protected $fillable = [
    	'academic_id',
    	'level_id',
    	'shift_id',
    	'time_id',
    	'group_id',
    	'batch_id',
    	'start_date',
    	'end_date',
    	'active_id',
    ];
}
