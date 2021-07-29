<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.course.course-index');
    }

    public function create()
    {
        return view('admin.course.course-create');
    }


}
