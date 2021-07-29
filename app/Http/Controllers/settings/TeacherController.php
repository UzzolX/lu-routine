<?php

namespace App\Http\Controllers\settings;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::latest()->paginate(5);
        return view('admin.teacher.teacher-index', compact('teacher'));
    }

    public function create()
    {
        return view('admin.teacher.teacher-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_code'    =>  'required',
            'teacher_name'   =>  'required',
            'teacher_position'   =>  'required'
        ]);

        $form_data = array(
            'teacher_code'   => $request->teacher_code,
            'teacher_name'  => $request->teacher_name,
            'teacher_position'  => $request->teacher_position
        );

        Teacher::create($form_data);
        return redirect('dashboard/teacher')->with('message', 'teacher created successfully.');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.teacher-edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_code'    =>  'required',
            'teacher_name'   =>  'required',
            'teacher_position'   =>  'required'
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->teacher_code = $request->teacher_code;
        $teacher->teacher_name = $request->teacher_name;
        $teacher->teacher_position = $request->teacher_position;
        $teacher->save();
        return redirect('dashboard/teacher')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect('dashboard/teacher')->with('message', 'Data is successfully deleted');
    }
}
