<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class teacher extends Model
{
    //

    use SoftDeletes;
     
    protected $fillable = [
        "first_name",
        "middle_name",
        "surname",
        "email",
        "contact",
        "designation",
        "monthly_salary"
        
    ];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        "first_name"=> "string" ,
        "middle_name" => "string",
        "surname" => "string",
        "email" => "string",
        "contact" => "string",
        "designation" =>  "string",
        "monthly_salary" => "integer"
    ];
}
