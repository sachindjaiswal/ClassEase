<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    protected $fillable = [
        "first_name",
        "middle_name",
        "surname",
        "email",
        "contact",
        "designation",
        "monthly_salary"
        
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
