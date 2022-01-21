<?php

namespace App\Http\Controllers\User\Client;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function dashboard()
    {
        $projects = Project::where('user_id', '=', Auth::guard('web')->user()->id)->get();
        $totalProjects = count($projects);
        return view('dashboard.user.client.dashboard', compact('totalProjects'));
    }
}
