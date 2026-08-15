<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'classId',
        'firstName',
        'middleName',
        'surname',
        'contact',
        'parentContact',
        'address',
    ];

    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $casts = [
        'firstName' => 'string',
        'middleName' => 'string',
        'surname' =>  'string',
        'contact' => 'string',
        'parentContact' => 'string',
        'address'=> 'string'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function class()
    {
        return $this->belongsTo(classes::class, 'classId');
    }
}
