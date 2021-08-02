<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Days\Sunday;
use App\Models\Days\Monday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $sunday = Sunday::all();
        $monday = Monday::all();
        return view('admin.dashboard.routine-index', compact('sunday', 'monday'));
    }
}
