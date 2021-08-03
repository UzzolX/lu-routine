<?php

namespace App\Http\Controllers\user;

use App\Models\Days\Sunday;
use App\Models\Days\Monday;
use App\Models\Days\Tuesday;
use App\Models\Days\Wednesday;
use App\Models\Days\Thursday;
use App\Models\Days\Saturday;
use App\Models\Days\Friday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function seeRoutine()
    {
        $sunday = Sunday::all();
        $monday = Monday::all();
        $tuesday = Tuesday::all();
        $wednesday = Wednesday::all();
        $thursday = Thursday::all();
        $saturday = Saturday::all();
        $friday = Friday::all();
        return view('user.see-routine', compact('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'saturday', 'friday'));
    }
}
