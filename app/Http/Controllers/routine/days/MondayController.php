<?php

namespace App\Http\Controllers\routine\days;

use App\Course;
use App\Teacher;
use App\Models\Days\Monday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MondayController extends Controller
{
    public function index()
    {
        $monday = Monday::all();
        return view('admin.routine.days.monday.monday-index', compact('monday'));
    }

    public function create()
    {
        $monday = Monday::all();
        $course = Course::all();
        $teacher = Teacher::all();
        return view('admin.routine.days.monday.monday-create', compact('monday', 'teacher', 'course'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'session'    =>  'required',
            'day'   =>  'required',
            'section'   =>  'required',
            'batch'   =>  'required',
            'nineAM_ninefiftyAM'   =>  'required',
            'tenAM_tenfiftyAM'   =>  'required',
            'elevenAM_elevenfiftyAM'   =>  'required',
            'twelvePM_twelvefiftyPM'   =>  'required',
            'twoPM_twofiftyPM'   =>  'required',
            'threePM_threefiftyPM'   =>  'required',
            'fourPM_fourfiftyPM'   =>  'required',
            'break'   =>  'required',
        ]);

        $input = $request->all();
        $nineAM_ninefiftyAM = $input['nineAM_ninefiftyAM'];
        $input['nineAM_ninefiftyAM'] = implode(',', $nineAM_ninefiftyAM);
        Monday::create($input);
        return redirect('dashboard/monday')->with('message', 'Data added successfully.');
    }

    public function edit($id)
    {
        $monday = Monday::findOrFail($id);
        $teacher = Teacher::all();
        return view('admin.routine.days.monday.monday-edit', compact('monday', 'teacher'));
    }

    public function update(Request $request, $id)
    {

        $monday = Monday::findOrFail($id);
        $input = $request->all();
        $nineAM_ninefiftyAM = $input['nineAM_ninefiftyAM'];
        $input['nineAM_ninefiftyAM'] = implode(',', $nineAM_ninefiftyAM);
        $monday->update($input);
        return redirect('dashboard/monday')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $monday = Monday::findOrFail($id);
        $monday->delete();

        return redirect('dashboard/monday')->with('message', 'Data is successfully deleted');
    }
}
