<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Nicolaslopezj\Searchable\SearchableTrait;

class CourseCategory extends Model
{
    use HasFactory;
    use SearchableTrait;
    use NodeTrait;

    protected $table = 'course_categories';
    protected $fillable = ['title','slug','parent_id'];
}
