<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'status'
    ];

    /*
     * The user that becomes our student
     */
    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
