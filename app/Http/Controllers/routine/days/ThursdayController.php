<?php

namespace App\Http\Controllers\routine\days;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Days\Thursday;

class ThursdayController extends Controller
{
    public function index()
    {
        $thursday = Thursday::all();
        return view('admin.routine.days.thursday.thursday-index', compact('thursday'));
    }

    public function create()
    {
        return view('admin.routine.days.thursday.thursday-create');
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

        Thursday::create($form_data);
        return redirect('dashboard/thursday/create')->with('message', 'Data added successfully.');
    }

    public function edit($id)
    {
        $thursday = Thursday::findOrFail($id);
        return view('admin.routine.days.thursday.thursday-edit', compact('thursday'));
    }

    public function update(Request $request, $id)
    {
        $thursday = Thursday::findOrFail($id);
        $thursday->session   = $request->session;
        $thursday->day  = $request->day;
        $thursday->section  = $request->section;
        $thursday->batch  = $request->batch;
        $thursday->nineAM_ninefiftyAM  = $request->nineAM_ninefiftyAM;
        $thursday->tenAM_tenfiftyAM  = $request->tenAM_tenfiftyAM;
        $thursday->elevenAM_elevenfiftyAM  = $request->elevenAM_elevenfiftyAM;
        $thursday->twelvePM_twelvefiftyPM  = $request->twelvePM_twelvefiftyPM;
        $thursday->twoPM_twofiftyPM  = $request->twoPM_twofiftyPM;
        $thursday->threePM_threefiftyPM  = $request->threePM_threefiftyPM;
        $thursday->fourPM_fourfiftyPM  = $request->fourPM_fourfiftyPM;
        $thursday->break  = $request->break;
        $thursday->save();
        return redirect('dashboard/thursday')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $thursday = Thursday::findOrFail($id);
        $thursday->delete();

        return redirect('dashboard/thursday')->with('message', 'Data is successfully deleted');
    }
}
