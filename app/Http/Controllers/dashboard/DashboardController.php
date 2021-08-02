<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Days\Sunday;
use App\Models\Days\Monday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $sunday = Sunday::all();
        $monday = Monday::all();
        return view('admin.dashboard.routine-index', compact('sunday', 'monday'));
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
