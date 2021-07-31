<?php

namespace App\Http\Controllers\routine\days;

use App\Models\Days\Sunday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SundayController extends Controller
{
    public function index()
    {
        $sunday = Sunday::all();
        return view('admin.routine.days.sunday.sunday-index', compact('sunday'));
    }

    public function create()
    {
        return view('admin.routine.days.sunday.sunday-create');
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

        Sunday::create($form_data);
        return redirect('dashboard/sunday')->with('message', 'sunday created successfully.');
    }
}
