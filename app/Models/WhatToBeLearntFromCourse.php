<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatToBeLearntFromCourse extends Model
{
    use HasFactory;

    protected $fillable = [
      'course_id',
      'to_be_learnt'
    ];

    /*
     * The course that owns this what_to_be_learnt
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
