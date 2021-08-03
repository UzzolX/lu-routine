<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Days\Sunday;
use App\Models\Days\Monday;
use App\Models\Days\Tuesday;
use App\Models\Days\Wednesday;
use App\Models\Days\Thursday;
use App\Models\Days\Saturday;
use App\Models\Days\Friday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $sunday = Sunday::all();
        $monday = Monday::all();
        $tuesday = Tuesday::all();
        $wednesday = Wednesday::all();
        $thursday = Thursday::all();
        $saturday = Saturday::all();
        $friday = Friday::all();
        return view('admin.dashboard.routine-index', compact('sunday','monday', 'tuesday', 'wednesday', 'thursday','saturday', 'friday'));
    }

    public function pdf()
    {
        
        $sunday = Sunday::all();
        $monday = Monday::all();
        //return view('admin.dashboard.pdf', compact('sunday', 'monday'));
        $data = [
            'sunday' => $sunday,
            'monday' => $monday
        ];
        $pdf = PDF::loadView('admin.dashboard.pdf', $data)->setPaper('a3', 'landscape');
        return $pdf->download('routine.pdf');
    }

}