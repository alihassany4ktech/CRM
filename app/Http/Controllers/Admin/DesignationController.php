<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignationController extends Controller
{
    public function edit($id)
    {
        $designation = Designation::find($id);
        return view('dashboard.admin.employee.designation.edit', compact('designation'));
    }

    public function update(Request $request)
    {
        $employelist = $request->employee;
        $designation = Designation::find($request->id);
        $designation->name = $request->name;
        for ($i = 0; $i < count($employelist); $i++) {
            $employee = User::find($employelist[$i]);
            $employee->designation = $designation->name;
            $employee->designation_id = $request->id;
            $employee->update();
        }

        $designation->update();
        $notification = array(
            'messege' => 'Designation Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function designations()
    {
        $designations = Designation::all();
        return view('dashboard.admin.employee.designation.all', compact('designations'));
    }
    public function delete($id)
    {
        $designation = Designation::find($id);
        $designation->delete();
        $notification = array(
            'messege' => 'Designation Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
