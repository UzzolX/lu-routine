<?php

namespace App\Models\Days;

use Illuminate\Database\Eloquent\Model;

class Sunday extends Model
{
    protected $fillable = [
        'section_id',
        'batch_id',
        'course_id',
        'teacher_id',
        'room_id',
        'class_start',
        'class_end',
        'break'
    ];
}
