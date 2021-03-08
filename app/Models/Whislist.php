<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whislist extends Model
{
    use HasFactory;

    protected $fillable = [
      'course_id',
      'user_id',

    ];

    /*
     * The course that owns this whishitem
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /*
     * The user that owns this wish
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
