<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'surname',
        'contact',
        'designation',
        'monthly_salary',
    ];

    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        "first_name"=> "string" ,
        "middle_name" => "string",
        "surname" => "string",
        "contact" => "string",
        "designation" =>  "string",
        "monthly_salary" => "integer"
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classes()
    {
        return $this->hasMany(classes::class, 'class_teacher');
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacherId');
    }
}
