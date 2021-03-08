<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CourseSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'title',
        'slug',
        'position',
        'description'
    ];

    /*
     * Mutators
     */
    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug($slug).'_'.Carbon::now()->timestamp.'_'.Str::random(40);
    }

    /*
     * Relational methods
    * Lessons under this section
     */
    public function lessons()
    {
        return $this->hasMany(CourseSectionContent::class);
    }
}
