<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee_Type extends Model
{
    use HasFactory;

    protected $fillable = [
    	'fee_type',
    ];
}
