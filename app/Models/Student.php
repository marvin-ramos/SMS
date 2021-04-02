<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
    	'firstname',
    	'lastname',
    	'middlename',
    	'birthday',
    	'gender_id',
    	'address',
    	'status_id',
    	'contact_number',
    	'national_id',
    	'rac',
    	'passport',
    	'village_id',
    	'community_id',
    	'district_id',
    	'province_id',
    	'city_id',
    	'profile',
    ];
}
