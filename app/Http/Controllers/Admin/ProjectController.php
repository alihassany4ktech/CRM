<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function allProjects()
    {
        return view('dashboard.admin.project.all');
    }

    public function create()
    {
        $projectsCategories = ProjectCategory::all();
        return view('dashboard.admin.project.create', compact('projectsCategories'));
    }

    public function categoryStore(Request $request)
    {
        if ($request->ajax()) {
            $category = new ProjectCategory();
            $category->name = $request->name;
            $category->save();
            return response()->json(['success' => 'Project Category Save Successfully!']);
        }
    }

    public function deleteCategory(Request $request)
    {
        $category = ProjectCategory::find($request->category_id);
        $category->delete();
        return response()->json(['success' => 'Project Category Deleted Successfully!']);
    }
}
