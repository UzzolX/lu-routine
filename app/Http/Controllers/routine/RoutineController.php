<?php

namespace App\Http\Controllers\routine;

use App\Models\Days\Sunday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoutineController extends Controller
{
    public function index()
    {
        $sunday = Sunday::get();
        return view('admin.routine.routine-index', compact('sunday'));
    }
}
