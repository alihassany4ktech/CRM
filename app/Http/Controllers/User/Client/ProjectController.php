<?php

namespace App\Http\Controllers\User\Client;

use App\Http\Controllers\Controller;
use App\Product;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::where('user_id', '=', Auth::guard('web')->user()->id)->get();
        return view('dashboard.user.client.project.all', compact('projects'));
    }
}
