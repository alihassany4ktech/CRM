<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\ProjectMember;
use App\ProjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function allProjects()
    {
        $projects = Project::all();
        $completedProjects = Project::where('project_status', '=', 'Finished')->get();
        $noStartedProjects = Project::where('project_status', '=', 'No Started')->get();
        $inProgressProjects = Project::where('project_status', '=', 'In Progress')->get();
        $canceledProjects = Project::where('project_status', '=', 'Canceled')->get();
        $underReviewProjects = Project::where('project_status', '=', 'Under Review')->get();
        return view('dashboard.admin.project.all', compact('projects', 'completedProjects', 'noStartedProjects', 'inProgressProjects', 'canceledProjects', 'underReviewProjects'));
    }

    public function create()
    {
        $projectsCategories = ProjectCategory::all();
        return view('dashboard.admin.project.create', compact('projectsCategories'));
    }

    public function projectStore(Request $request)
    {
        $membersList = $request->employee;
        $project = new Project();
        $project->project_name = $request->project_name;
        $project->category_id = $request->project_category;
        $project->department = $request->department;
        $project->start_date = $request->start_date;
        if ($request->without_deadline == null) {
            $project->deadline = $request->deadline;
        }
        $project->project_summary = $request->project_summary;
        $project->notes = $request->note;
        $project->user_id = $request->customer;


        if (($request->manage_task != null)) {
            $project->task_notification = 'enable';
        } else {
            $project->task_notification = 'disable';
        }
        $project->currency_id = $request->currency;
        $project->hours_allocated = $request->hours_allocated;
        $project->project_budget = $request->project_budget;
        $project->project_status = $request->project_status;
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $name = time() . 'file' . '.' . $file->getClientOriginalName();
                $destinationPath = 'project_files/';
                $file->move($destinationPath, $name);
                $data[] = $name;
                $project->file = json_encode($data);
            }
        }
        $project->save();
        for ($i = 0; $i < count($membersList); $i++) {
            $member = new ProjectMember();
            $member->user_id = $membersList[$i];
            $member->project_id = $project->id;
            $member->save();
        }
        $notification = array(
            'messege' => 'Project Save Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
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


    public function archiveDestroy($id)
    {
        Project::destroy($id);
        $notification = array(
            'messege' => 'Project Archived Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function archiveProjects()
    {
        $projects = Project::onlyTrashed()->orderBy('id', 'DESC')->get();
        return view('dashboard.admin.project.archive', compact('projects'));
    }


    public function restoreProject($id)
    {
        $project = Project::withTrashed()->findOrFail($id);
        $project->restore();
        $notification = array(
            'messege' => 'Project Reverted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $project->forceDelete();
        $notification = array(
            'messege' => 'Project Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function showProject($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.admin.project.show', compact('project'));
    }
}
