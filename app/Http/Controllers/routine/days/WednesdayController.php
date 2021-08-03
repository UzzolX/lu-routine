<?php

namespace App\Http\Controllers\routine\days;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Days\Wednesday;

class WednesdayController extends Controller
{
    public function index()
    {
        $wednesday = Wednesday::all();
        return view('admin.routine.days.wednesday.wednesday-index', compact('wednesday'));
    }

    public function create()
    {
        return view('admin.routine.days.wednesday.wednesday-create');
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

        Wednesday::create($form_data);
        return redirect('dashboard/wednesday/create')->with('message', 'Data added successfully.');
    }

    public function edit($id)
    {
        $wednesday = Wednesday::findOrFail($id);
        return view('admin.routine.days.wednesday.wednesday-edit', compact('wednesday'));
    }

    public function update(Request $request, $id)
    {
        $wednesday = Wednesday::findOrFail($id);
        $wednesday->session   = $request->session;
        $wednesday->day  = $request->day;
        $wednesday->section  = $request->section;
        $wednesday->batch  = $request->batch;
        $wednesday->nineAM_ninefiftyAM  = $request->nineAM_ninefiftyAM;
        $wednesday->tenAM_tenfiftyAM  = $request->tenAM_tenfiftyAM;
        $wednesday->elevenAM_elevenfiftyAM  = $request->elevenAM_elevenfiftyAM;
        $wednesday->twelvePM_twelvefiftyPM  = $request->twelvePM_twelvefiftyPM;
        $wednesday->twoPM_twofiftyPM  = $request->twoPM_twofiftyPM;
        $wednesday->threePM_threefiftyPM  = $request->threePM_threefiftyPM;
        $wednesday->fourPM_fourfiftyPM  = $request->fourPM_fourfiftyPM;
        $wednesday->break  = $request->break;
        $wednesday->save();
        return redirect('dashboard/wednesday')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $wednesday = Wednesday::findOrFail($id);
        $wednesday->delete();

        return redirect('dashboard/wednesday')->with('message', 'Data is successfully deleted');
    }
}
