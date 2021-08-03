<?php

namespace App\Http\Controllers\routine\days;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Days\Friday;

class FridayController extends Controller
{
    public function index()
    {
        $friday = Friday::all();
        return view('admin.routine.days.friday.friday-index', compact('friday'));
    }

    public function create()
    {
        return view('admin.routine.days.friday.friday-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'session'    =>  'required',
            'day'   =>  'required',
            'section'   =>  'required',
            'batch'   =>  'required',
           // 'nineAM_ninefiftyAM'   =>  'required',
          //  'tenAM_tenfiftyAM'   =>  'required',
          //  'elevenAM_elevenfiftyAM'   =>  'required',
          //  'twelvePM_twelvefiftyPM'   =>  'required',
           // 'twoPM_twofiftyPM'   =>  'required',
          //  'threePM_threefiftyPM'   =>  'required',
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

        Friday::create($form_data);
        return redirect('dashboard/friday/create')->with('message', 'Data added successfully.');
    }

    public function edit($id)
    {
        $friday = Friday::findOrFail($id);
        return view('admin.routine.days.friday.friday-edit', compact('friday'));
    }

    public function update(Request $request, $id)
    {
        $friday = Friday::findOrFail($id);
        $friday->session   = $request->session;
        $friday->day  = $request->day;
        $friday->section  = $request->section;
        $friday->batch  = $request->batch;
        $friday->nineAM_ninefiftyAM  = $request->nineAM_ninefiftyAM;
        $friday->tenAM_tenfiftyAM  = $request->tenAM_tenfiftyAM;
        $friday->elevenAM_elevenfiftyAM  = $request->elevenAM_elevenfiftyAM;
        $friday->twelvePM_twelvefiftyPM  = $request->twelvePM_twelvefiftyPM;
        $friday->twoPM_twofiftyPM  = $request->twoPM_twofiftyPM;
        $friday->threePM_threefiftyPM  = $request->threePM_threefiftyPM;
        $friday->fourPM_fourfiftyPM  = $request->fourPM_fourfiftyPM;
        $friday->break  = $request->break;
        $friday->save();
        return redirect('dashboard/friday')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $friday = Friday::findOrFail($id);
        $friday->delete();

        return redirect('dashboard/friday')->with('message', 'Data is successfully deleted');
    }
}
