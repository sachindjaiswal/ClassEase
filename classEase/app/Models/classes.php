<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    //
    protected $fillable = [
        'class_teacher',
        'class_name',
        'section',
        'room_no'
    ];

    protected $casts = [
        'class_name'=>'string',
        'section'=>'string',
        'room_no'=>'string',
        
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function teacher()
{
    return $this->belongsTo(teacher::class, 'class_teacher');
}
    
}
