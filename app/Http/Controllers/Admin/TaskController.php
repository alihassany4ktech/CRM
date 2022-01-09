<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\TaskCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class TaskController extends Controller
{
    public function allTasks()
    {
        return view('dashboard.admin.task.all');
    }

    public function create()
    {
        $categories = TaskCategory::all();
        $employees = User::where('type', '=', 'Employee')->get();
        $projects = Project::all();
        return view('dashboard.admin.task.create', compact('categories', 'employees', 'projects'));
    }

    public function categoryStore(Request $request)
    {
        if ($request->ajax()) {
            $category = new TaskCategory();
            $category->category_name = $request->category_name;
            $category->save();
            return response()->json(['success' => 'Category Saved Succseefully!']);
        }
    }

    public function deleteCategory(Request $request)
    {
        if ($request->ajax()) {
            $category =  TaskCategory::find($request->category_id);
            $category->delete();
            return response()->json(['success' => 'Category Deleted Succseefully!']);
        }
    }

    public function labelStore(Request $request)
    {
        if ($request->ajax()) {
            dd($request);
        }
    }
}
