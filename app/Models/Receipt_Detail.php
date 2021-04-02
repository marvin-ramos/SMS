<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
    	'receipt_id',
    	'student_id',
    	'transaction_id',
    ];
}
