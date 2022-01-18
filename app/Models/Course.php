<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['name','price','teacher_id','excerpt','content','thumbnail','category_id'];

    /**
     * Get the user that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function coursecategory(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'category_id', 'id');
    }
}
