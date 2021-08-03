<?php

namespace App\Http\Controllers\routine\days;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Days\Saturday;

class SaturdayController extends Controller
{
    public function index()
    {
        $saturday = Saturday::all();
        return view('admin.routine.days.saturday.saturday-index', compact('saturday'));
    }

    public function create()
    {
        return view('admin.routine.days.saturday.saturday-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'session'    =>  'required',
            'day'   =>  'required',
            'section'   =>  'required',
            'batch'   =>  'required', 
           // 'nineAM_ninefiftyAM'   =>  'required',
           // 'tenAM_tenfiftyAM'   =>  'required',
           // 'elevenAM_elevenfiftyAM'   =>  'required',
           // 'twelvePM_twelvefiftyPM'   =>  'required',
           // 'twoPM_twofiftyPM'   =>  'required',
           // 'threePM_threefiftyPM'   =>  'required',
           // 'fourPM_fourfiftyPM'   =>  'required',
           // 'break'   =>  'required',        
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

        Saturday::create($form_data);
        return redirect('dashboard/saturday/create')->with('message', 'Data added successfully.');
    }

    public function edit($id)
    {
        $saturday = Saturday::findOrFail($id);
        return view('admin.routine.days.saturday.saturday-edit', compact('saturday'));
    }

    public function update(Request $request, $id)
    {
        $saturday = Saturday::findOrFail($id);
        $saturday->session   = $request->session;
        $saturday->day  = $request->day;
        $saturday->section  = $request->section;
        $saturday->batch  = $request->batch;
        $saturday->nineAM_ninefiftyAM  = $request->nineAM_ninefiftyAM;
        $saturday->tenAM_tenfiftyAM  = $request->tenAM_tenfiftyAM;
        $saturday->elevenAM_elevenfiftyAM  = $request->elevenAM_elevenfiftyAM;
        $saturday->twelvePM_twelvefiftyPM  = $request->twelvePM_twelvefiftyPM;
        $saturday->twoPM_twofiftyPM  = $request->twoPM_twofiftyPM;
        $saturday->threePM_threefiftyPM  = $request->threePM_threefiftyPM;
        $saturday->fourPM_fourfiftyPM  = $request->fourPM_fourfiftyPM;
        $saturday->break  = $request->break;
        $saturday->save();
        return redirect('dashboard/saturday')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $saturday = Saturday::findOrFail($id);
        $saturday->delete();

        return redirect('dashboard/saturday')->with('message', 'Data is successfully deleted');
    }
}
