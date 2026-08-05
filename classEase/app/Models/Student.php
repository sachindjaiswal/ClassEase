<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'classId',
        'firstName',
        'middleName',
        'surname',
        'email',    
        'password', 
        'contact',
        'parentContact',
        'address'
    ];

    protected $casts = [
        'firstName' => 'string',
        'middleName' => 'string',
        'surname' =>  'string',
        'email' => 'string',
        'password'=> 'string',
        'contact' => 'string',
'parentContact' => 'string',
        'address'=> 'string'
    ];
}
