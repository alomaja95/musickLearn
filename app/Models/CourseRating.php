<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'rating',
        'student_id'
    ];

    /*
     * Relational models
     *
     * The student that rated this course
     */
    public function student()
    {
        return $this->belongsTo(User::class);
    }

    /*
     * The course that owns this rating
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
