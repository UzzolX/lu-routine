<?php

namespace App\Http\Controllers\routine\days;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Days\Tuesday;

class TuesdayController extends Controller
{
    public function index()
    {
        $tuesday = Tuesday::all();
        return view('admin.routine.days.tuesday.tuesday-index', compact('tuesday'));
    }

    public function create()
    {
        return view('admin.routine.days.tuesday.tuesday-create');
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

        $form_data = array(
            'session'   => $request->session,
            'day'  => $request->day,
            'section'  => $request->section,
            'batch'  => $request->batch,
            'nineAM_ninefiftyAM'  => $request->nineAM_ninefiftyAM,
            'tenAM_tenfiftyAM'  => $request->tenAM_tenfiftyAM,
            'elevenAM_elevenfiftyAM'  => $request->elevenAM_elevenfiftyAM,
            'twelvePM_twelvefiftyPM'  => $request->twelvePM_twelvefiftyPM,
            'twoPM_twofiftyPM'  => $request->twoPM_twofiftyPM,
            'threePM_threefiftyPM'  => $request->threePM_threefiftyPM,
            'fourPM_fourfiftyPM'  => $request->fourPM_fourfiftyPM,
            'break'  => $request->break,
        );

        Tuesday::create($form_data);
        return redirect('dashboard/tuesday/create')->with('message', 'Data added successfully.');
    }

    public function edit($id)
    {
        $tuesday = Tuesday::findOrFail($id);
        return view('admin.routine.days.tuesday.tuesday-edit', compact('tuesday'));
    }

    public function update(Request $request, $id)
    {
        $tuesday = Tuesday::findOrFail($id);
        $tuesday->session   = $request->session;
        $tuesday->day  = $request->day;
        $tuesday->section  = $request->section;
        $tuesday->batch  = $request->batch;
        $tuesday->nineAM_ninefiftyAM  = $request->nineAM_ninefiftyAM;
        $tuesday->tenAM_tenfiftyAM  = $request->tenAM_tenfiftyAM;
        $tuesday->elevenAM_elevenfiftyAM  = $request->elevenAM_elevenfiftyAM;
        $tuesday->twelvePM_twelvefiftyPM  = $request->twelvePM_twelvefiftyPM;
        $tuesday->twoPM_twofiftyPM  = $request->twoPM_twofiftyPM;
        $tuesday->threePM_threefiftyPM  = $request->threePM_threefiftyPM;
        $tuesday->fourPM_fourfiftyPM  = $request->fourPM_fourfiftyPM;
        $tuesday->break  = $request->break;
        $tuesday->save();
        return redirect('dashboard/tuesday')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $tuesday = Tuesday::findOrFail($id);
        $tuesday->delete();

        return redirect('dashboard/tuesday')->with('message', 'Data is successfully deleted');
    }
}
