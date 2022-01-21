<?php

namespace App\Http\Controllers\User\Client;

use App\Product;
use App\Project;
use Carbon\Carbon;
use ProjectSeeder;
use App\ProjectFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::where('user_id', '=', Auth::guard('web')->user()->id)->get();
        return view('dashboard.user.client.project.all', compact('projects'));
    }

    public function projectDetails($id)
    {
        $project = Project::find($id);
        $daysLeft = 0;
        if ($project->deadline) {
            $daysLeft = $project->deadline->diff(Carbon::now())->format('%d') + ($project->deadline->diff(Carbon::now())->format('%m') * 30) + ($project->deadline->diff(Carbon::now())->format('%y') * 12);
        }
        return view('dashboard.user.client.project.show', compact('project', 'daysLeft'));
    }

    public function addProjectFile($id)
    {
        return view('dashboard.user.client.project.addfile', compact('id'));
    }

    public function projectFileStore(Request $request)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $fileData) {
                $file = new ProjectFile();
                $file->user_id = Auth::guard('web')->user()->id;
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
                $file->user_id = Auth::guard('web')->user()->id;
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
    public function deleteFile(Request $request)
    {
        $file = ProjectFile::findOrFail($request->file_id);
        if ($file->link == null) {
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
        } else {
            $file->delete();
            return response()->json(['success' => 'File Link Deleted Successfully!']);
        }
    }
}
