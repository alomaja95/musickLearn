<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
        'language',
        'location'
    ];

    /*
     * The lesson that owns this subtitle
     */
    public function lesson()
    {
        return $this->belongsTo(CourseSectionContent::class);
    }
}
