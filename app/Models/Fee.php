<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
    	'academic_id',
    	'level_id',
    	'fee_types_id',
    	'fee_heading',
    	'amount',
    ];
}
