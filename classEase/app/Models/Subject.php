<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'classId',
        'subjectName',
        'teacherId',
    ];
    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function class()
    {
        return $this->belongsTo(classes::class, 'classId');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherId');
    }
}