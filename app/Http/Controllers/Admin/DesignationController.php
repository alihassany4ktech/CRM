<?php

namespace App\Http\Controllers\Admin;

use App\Designation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function edit($id)
    {
        $designation = Designation::find($id);
        return view('dashboard.admin.employee.designation.edit', compact('designation'));
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
