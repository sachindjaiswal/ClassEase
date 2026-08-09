<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //

    use SoftDeletes ;

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


    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
        'classId'
    ];

    
    public function class()
    {
        return $this->belongsTo(classes::class , 'classId');
    }
}
