<?php

namespace App\Http\Controllers\Admin;

use App\TaskLabelList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskLabelController extends Controller
{
    // allTasksLabel list

    public function labelList()
    {
        $labelList = TaskLabelList::all();
        return view('dashboard.admin.task.labelList.all', compact('labelList'));
    }

    public function create()
    {
        return view('dashboard.admin.task.labelList.create');
    }

    public function labelStore(Request $request)
    {
        if ($request->ajax()) {
            $taslLabel = new TaskLabelList();
            $taslLabel->label_name = $request->name;
            $taslLabel->color = $request->color;
            $taslLabel->description = $request->description;
            $taslLabel->save();
            return response()->json(['success' => 'Task Label Saved Succseefully!']);
        }
    }

    public function labelUpdate(Request $request)
    {
        if ($request->ajax()) {
            $taslLabel =  TaskLabelList::find($request->lable_id);
            $taslLabel->label_name = $request->name;
            $taslLabel->color = $request->color;
            $taslLabel->description = $request->description;
            $taslLabel->update();
            return response()->json(['success' => 'Task Label Update Succseefully!']);
        }
    }

    public function edit($id)
    {
        $lable = TaskLabelList::find($id);
        return view('dashboard.admin.task.labelList.edit', compact('lable'));
    }

    public function delete($id)
    {
        $label = TaskLabelList::find($id);
        $label->delete();
        $notification = array(
            'messege' => 'Task Label Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
