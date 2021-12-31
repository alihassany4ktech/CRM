<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Department;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;

class DepartmenetController extends Controller
{

    public function edit($id)
    {
        $department = Department::find($id);
        return view('dashboard.admin.employee.department.edit', compact('department'));
    }

    public function departments()
    {
        $departments = Department::all();
        return view('dashboard.admin.employee.department.all', compact('departments'));
    }

    public function delete($id)
    {
        $department = Department::find($id);
        $department->delete();
        $notification = array(
            'messege' => 'Department Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request)
    {
        $employelist = $request->employee;
        $department = Department::find($request->id);
        $department->name = $request->name;
        for ($i = 0; $i < count($employelist); $i++) {
            $employee = User::find($employelist[$i]);
            $employee->department = $department->name;
            $employee->department_id = $request->id;
            $employee->update();
        }

        $department->update();
        $notification = array(
            'messege' => 'Department Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
