<?php

namespace App\Http\Controllers\Admin;

use App\Currency;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganisationSettingsController extends Controller
{
    public function settings()
    {
        $timezones = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);
        $currencies = Currency::all();
        $dateObject = Carbon::now();
        return view('dashboard.admin.settings.edit', compact('timezones', 'dateObject', 'currencies'));
    }
}
