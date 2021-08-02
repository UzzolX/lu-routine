<?php

namespace App\Http\Controllers\user;

use App\Models\Days\Sunday;
use App\Models\Days\Monday;
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
        return view('user.see-routine', compact('sunday', 'monday'));
    }
}
