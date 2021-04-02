<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
    	'transaction_date',
    	'fee_id',
    	'user_id',
    	'student_id',
    	'student_fee_id',
    	'paid',
    	'remarks',
    	'description',
    ];
}
