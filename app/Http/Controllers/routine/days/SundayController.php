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
           // 'nineAM_ninefiftyAM'   =>  'required',
          //  'tenAM_tenfiftyAM'   =>  'required',
          //  'elevenAM_elevenfiftyAM'   =>  'required',
           // 'twelvePM_twelvefiftyPM'   =>  'required',
           // 'twoPM_twofiftyPM'   =>  'required',
          //  'threePM_threefiftyPM'   =>  'required',
          //  'fourPM_fourfiftyPM'   =>  'required',
          //  'break'   =>  'required',
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
        return redirect('dashboard/sunday/create')->with('message', 'Data added successfully.');
    }

    public function edit($id)
    {
        $sunday = Sunday::findOrFail($id);
        return view('admin.routine.days.sunday.sunday-edit', compact('sunday'));
    }

    public function update(Request $request, $id)
    {
        $sunday = Sunday::findOrFail($id);
        $sunday->session   = $request->session;
        $sunday->day  = $request->day;
        $sunday->section  = $request->section;
        $sunday->batch  = $request->batch;
        $sunday->nineAM_ninefiftyAM  = $request->nineAM_ninefiftyAM;
        $sunday->tenAM_tenfiftyAM  = $request->tenAM_tenfiftyAM;
        $sunday->elevenAM_elevenfiftyAM  = $request->elevenAM_elevenfiftyAM;
        $sunday->twelvePM_twelvefiftyPM  = $request->twelvePM_twelvefiftyPM;
        $sunday->twoPM_twofiftyPM  = $request->twoPM_twofiftyPM;
        $sunday->threePM_threefiftyPM  = $request->threePM_threefiftyPM;
        $sunday->fourPM_fourfiftyPM  = $request->fourPM_fourfiftyPM;
        $sunday->break  = $request->break;
        $sunday->save();
        return redirect('dashboard/sunday')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $sunday = Sunday::findOrFail($id);
        $sunday->delete();

        return redirect('dashboard/sunday')->with('message', 'Data is successfully deleted');
    }

}
