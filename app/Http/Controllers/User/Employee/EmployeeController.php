<?php

namespace App\Http\Controllers\User\Employee;


use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class EmployeeController extends Controller
{
    public function dashboard()
    {
        $totalProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->count();
        return view('dashboard.user.employee.home', compact('totalProjects'));
    }
}
