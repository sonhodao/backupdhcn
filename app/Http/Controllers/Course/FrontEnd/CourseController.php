<?php

namespace App\Http\Controllers\Course\FrontEnd;

use App\Http\Controllers\Controller;

use App\Models\CourseCategory;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function getCategory()
    {
        return view('courses.category');
    }

    public function getDetail()
    {
        return view('courses.detail');
    }

    public function getLearning()
    {
        return view('courses.learning');
    }

    public function getEmtyCourse()
    {
        return view('courses.my_course-emty');
    }

    public function getMyCourse()
    {
        return view('courses.my_course');
    }
}
