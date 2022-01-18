<?php

namespace App\Http\Controllers\Course\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;

class IndexController extends Controller
{
    //
    public function getIndex()

    {
        return view('courses.index');
    }
    
}
