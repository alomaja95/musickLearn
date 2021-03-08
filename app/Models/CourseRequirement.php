<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRequirement extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'requirement'
    ];

    /*
     * The course that owns this requirement
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
