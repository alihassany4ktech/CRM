<?php

namespace App\Http\Controllers\Admin;

use App\Lead;
use App\User;
use App\Notice;
use App\Department;
use Illuminate\Http\Request;
use App\Exports\NoticeExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class NoticeBoardController extends Controller
{
    public function noticeBords()
    {
        $notices = Notice::where('auth_id', '=', Auth::guard('admin')->user()->id)->orderBy('id', 'desc')->get();
        return view('dashboard.admin.noticeboard.all', compact('notices'));
    }

    public function create()
    {
        $departments = Department::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $employees = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        return view('dashboard.admin.noticeboard.create', compact('departments', 'employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $notice = new Notice();
        $notice->auth_id = Auth::guard('admin')->user()->id;
        $notice->heading = $request->heading;
        $notice->description = $request->description;
        $notice->to = $request->to;
        if ($request->to == 'Employee') {
            $notice->department_id = $request->department;
            $notice->user_id = null;
        } elseif ($request->to == 'Individual Employee') {
            $notice->department_id = null;
            $notice->user_id = $request->employee;
        } else {
            $notice->department_id = null;
            $notice->user_id = null;
        }
        $notice->save();
        $notification = array(
            'messege' => 'Notice Saved Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $notice = Notice::find($id);
        $employees = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        $departments = Department::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.noticeboard.edit', compact('notice', 'departments', 'employees'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $notice = Notice::find($request->id);
        $notice->heading = $request->heading;
        $notice->description = $request->description;
        $notice->to = $request->to;
        if ($request->to == 'Employee') {
            $notice->department_id = $request->department;
            $notice->user_id = null;
        } elseif ($request->to == 'Individual Employee') {
            $notice->department_id = null;
            $notice->user_id = $request->employee;
        } else {
            $notice->department_id = null;
            $notice->user_id = null;
        }
        $notice->save();
        $notification = array(
            'messege' => 'Notice Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function delete($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        $notification = array(
            'messege' => 'Notice Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function exportInToExcel()
    {
        return Excel::download(new NoticeExport, 'noticeList.xlsx');
    }

    public function exportInToCSV()
    {
        return Excel::download(new NoticeExport, 'noticeList.csv');
    }
}
