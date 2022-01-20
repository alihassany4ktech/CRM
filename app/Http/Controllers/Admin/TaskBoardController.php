<?php

namespace App\Http\Controllers\Admin;

use App\Task;
use App\User;
use App\Project;
use App\TaskCategory;
use App\TaskLabelList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskBoardController extends Controller
{
    public function taskBoard()
    {
        $inCompleteTasks = Task::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('status', '=', 'Incomplete')->get();
        $completeTasks = Task::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('status', '=', 'Completed')->get();
        $categories = TaskCategory::all();
        $employees = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        $projects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $labelList = TaskLabelList::all();
        return view('dashboard.admin.taskBoard.all', compact('employees', 'labelList', 'projects', 'inCompleteTasks', 'completeTasks', 'categories'));
    }

    public function createCompletedTask()
    {
        $categories = TaskCategory::all();
        $employees = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        $projects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $labelList = TaskLabelList::all();
        return view('dashboard.admin.taskBoard.createCompletedTask', compact('employees', 'labelList', 'projects', 'categories'));
    }

    public function createIncompleteTask()
    {
        $categories = TaskCategory::all();
        $employees = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        $projects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $labelList = TaskLabelList::all();
        return view('dashboard.admin.taskBoard.createIncompleteTask', compact('employees', 'labelList', 'projects', 'categories'));
    }
}
