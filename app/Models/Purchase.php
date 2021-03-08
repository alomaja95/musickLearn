<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
      'course_id',
      'status',
      'user_id'
    ];

    /*
     * The course that owns this purchase
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    /*
     * The user that purchased this course
     */
    public function buyer()
    {
        return $this->belongsTo(User::class);
    }

}
