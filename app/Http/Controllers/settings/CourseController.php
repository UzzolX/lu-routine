<?php

namespace App\Http\Controllers\settings;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::latest()->paginate(5);
        return view('admin.course.course-index', compact('course'));
    }

    public function create()
    {
        return view('admin.course.course-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code'    =>  'required',
            'course_title'   =>  'required'
        ]);

        $form_data = array(
            'course_code'   => $request->course_code,
            'course_title'  => $request->course_title
        );

        Course::create($form_data);
        return redirect('dashboard/course')->with('message', 'Course created successfully.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.course-edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->course_code = $request->course_code;
        $course->course_title = $request->course_title;
        $course->save();
        return redirect('dashboard/course')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect('dashboard/course')->with('message', 'Data is successfully deleted');
    }


}
