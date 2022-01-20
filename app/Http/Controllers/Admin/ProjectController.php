<?php

namespace App\Http\Controllers\Admin;

use App\Currency;
use App\User;
use App\Project;
use App\ProjectFile;
use App\ProjectMember;
use App\ProjectCategory;
use Illuminate\Http\Request;
use App\Exports\ProjectExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

class ProjectController extends Controller
{
    public function allProjects()
    {
        $projects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $completedProjects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('project_status', '=', 'Finished')->get();
        $noStartedProjects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('project_status', '=', 'No Started')->get();
        $inProgressProjects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('project_status', '=', 'In Progress')->get();
        $canceledProjects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('project_status', '=', 'Canceled')->get();
        $underReviewProjects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('project_status', '=', 'Under Review')->get();
        return view('dashboard.admin.project.all', compact('projects', 'completedProjects', 'noStartedProjects', 'inProgressProjects', 'canceledProjects', 'underReviewProjects'));
    }

    public function create()
    {
        $projectsCategories = ProjectCategory::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $currencies = Currency::all();
        return view('dashboard.admin.project.create', compact('projectsCategories', 'currencies'));
    }

    public function projectStore(Request $request)
    {
        $request->validate([
            'project_name' => 'required',
            'project_category' => 'required',
            'department' => 'required',
            'start_date' => 'required',
            'project_summary' => 'required',
            'note' => 'required',
            'client' => 'required',
            'project_budget' => 'required',
            'hours_allocated' => 'required',
        ]);
        $membersList = $request->employee;
        $project = new Project();
        $project->auth_id = Auth::guard('admin')->user()->id;
        $project->project_name = $request->project_name;
        $project->category_id = $request->project_category;
        $project->department = $request->department;
        $project->start_date = $request->start_date;
        if ($request->without_deadline == null) {
            $project->deadline = $request->deadline;
        }
        $project->project_summary = $request->project_summary;
        $project->notes = $request->note;
        $project->user_id = $request->client;


        if (($request->manage_task != null)) {
            $project->task_notification = 'enable';
        } else {
            $project->task_notification = 'disable';
        }
        $project->currency_id = $request->currency;
        $project->hours_allocated = $request->hours_allocated;
        $project->project_budget = $request->project_budget;
        $project->project_status = $request->project_status;
        $project->save();
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $fileData) {
                $file = new ProjectFile();
                // $file->user_id = $this->user->id;
                $file->project_id = $project->id;
                $name = $fileData->getClientOriginalName();
                $file->filename = $name;
                $destinationPath = 'project_files/';
                $fileData->move($destinationPath, $name);
                $file->save();
            }
        }

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

    public function editProject($id)
    {
        $project = Project::findOrFail($id);
        $currencies = Currency::all();
        $projectsCategories = ProjectCategory::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.project.edit', compact('project', 'projectsCategories', 'currencies'));
    }

    public function projectUpdate(Request $request)
    {
        $project =  Project::findOrFail($request->project_id);
        $project->project_name = $request->project_name;
        $project->category_id = $request->project_category;
        $project->department = $request->department;
        $project->start_date = $request->start_date;
        $project->completion_percent = $request->completion_percent;
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
        $project->feedback = $request->project_status;
        $project->update();
        $notification = array(
            'messege' => 'Project Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function categoryStore(Request $request)
    {
        if ($request->ajax()) {
            $category = new ProjectCategory();
            $category->auth_id = Auth::guard('admin')->user()->id;
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
        $employees = User::doesntHave('member', 'and', function ($query) use ($id) {
            $query->where('project_id', $id);
        })->where('type', '=', 'Employee')->get();
        return view('dashboard.admin.project.show', compact('project', 'employees'));
    }

    public function deleteProjectMember($id)
    {
        $projectMember = ProjectMember::findOrFail($id);
        $projectMember->delete();
        $notification = array(
            'messege' => 'Project Member Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function projectMembersAdd(Request $request)
    {
        if ($request->ajax()) {
            $membersList = $request->employee;
            for ($i = 0; $i < count($membersList); $i++) {
                $member = new ProjectMember();
                $member->user_id = $membersList[$i];
                $member->project_id = $request->project_id;
                $member->save();
            }

            return response()->json(['success' => 'Project Member Add Successfully!']);
        }
    }

    public function export()
    {
        return Excel::download(new ProjectExport, 'projectList.xlsx');
    }


    public function deleteFile(Request $request)
    {
        $file = ProjectFile::findOrFail($request->file_id);
        if (File::exists(public_path('project_files/' . $file->filename))) {
            File::delete(public_path('project_files/' . $file->filename));
            /*
                Delete Multiple File like this way
                Storage::delete(['project_files/test.png', 'project_files/test2.png']);
            */
            $file->delete();
            return response()->json(['success' => 'File Deleted Successfully!']);
        } else {
            return response()->json(['success' => 'File does not exists.']);
        }
    }

    public function downloadFile(Request $request)
    {
        $file = ProjectFile::findOrFail($request->file_id);
        if (File::exists(public_path('project_files/' . $file->filename))) {
            return Response::download(public_path('project_files/' . $file->filename));
        } else {
            return response()->json(['success' => 'File does not exists.']);
        }
    }

    public function addProjectFile($id)
    {
        return view('dashboard.admin.project.addfile', compact('id'));
    }

    public function projectFileStore(Request $request)
    {



        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $fileData) {
                $file = new ProjectFile();
                // $file->user_id = $this->user->id;
                $file->project_id = $request->project_id;
                $name = $fileData->getClientOriginalName();
                $file->filename = $name;
                $destinationPath = 'project_files/';
                $fileData->move($destinationPath, $name);
                $file->save();
            }
            $notification = array(
                'messege' => 'File Uploaded Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            if ($request->filename == null) {
                $notification = array(
                    'messege' => 'Choose Atleast One File or Enter File Name',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            } else {
                $file = new ProjectFile();
                $file->filename = $request->filename ? $request->filename : null;
                $file->link = $request->link;
                $file->project_id = $request->project_id;
                $file->save();
                $notification = array(
                    'messege' => 'File Link Add Successfully',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }
        }
    }
}
