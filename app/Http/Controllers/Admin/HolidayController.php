<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HolidayController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.holiday.index');
    }
}
