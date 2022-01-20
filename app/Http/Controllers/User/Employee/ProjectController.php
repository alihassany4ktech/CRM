<?php

namespace App\Http\Controllers\User\Employee;

use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::selectRaw('projects.id, projects.project_name, projects.project_summary, projects.start_date, projects.deadline,
         projects.notes, projects.category_id, projects.user_id, projects.feedback, projects.completion_percent, projects.created_at, projects.updated_at,
          projects.project_status');
        $projects = $projects->join('project_members', 'project_members.project_id', '=', 'projects.id');
        $projects = $projects->where('project_members.user_id', '=', Auth::guard('web')->user()->id)->get();
        $totalProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->count();
        $finishedProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->finished()->count();
        $inProcessProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->inProcess()->count();
        $onHoldProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->onHold()->count();
        $canceledProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->canceled()->count();
        $notStartedProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->notStarted()->count();
        $overdueProjects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', Auth::guard('web')->user()->id)->overdue()->count();
        return view('dashboard.user.employee.project.all', compact('projects', 'totalProjects', 'finishedProjects', 'inProcessProjects', 'onHoldProjects', 'canceledProjects', 'notStartedProjects', 'overdueProjects'));
    }
}
