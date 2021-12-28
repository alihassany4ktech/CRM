<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Department;
use App\Designation;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class EmployeeController extends Controller
{
    public function employees()
    {
        $employees = User::where('type', '=', 'Employee')->orderBy('id', 'desc')->get();
        return view('dashboard.admin.employee.all', compact('employees'));
    }

    public function createEmployee()
    {
        $roles = Role::orderBy('id', 'desc')->get();
        $permissions = Permission::all();
        $departments = Department::all();
        $designations = Designation::all();
        return view('dashboard.admin.employee.create', compact('roles', 'permissions', 'departments', 'designations'));
    }

    public function saveEmployee(Request $request)
    {

        $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'exit_date' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'slack_username' => 'required',
            'joining_date' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:30',
            'role_name' => 'required',
            'skills' => 'required',
            'image' => 'required',
            'hourly_rate' => 'required',
            'cell' => 'required',
        ]);
        $employee_id = 'emp-' . $request->employee_id;
        if (User::where('employee_id', '=', $employee_id)->exists()) {
            $notification = array(
                'messege' => 'Employee Id Has Already Been Taken,please Use another',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        } else {
            $user = new User();
            $user->type = 'Employee';
            $user->status = 'Active';
            $user->employee_id = 'emp-' . $request->employee_id;
            $user->name = $request->name;
            $user->address = $request->address;
            $user->exit_date = $request->exit_date;
            $user->gender = $request->gender;
            $user->designation_id = $request->designation;
            $user->department_id = $request->department;
            $user->slack_username = $request->slack_username;
            $user->joining_date = $request->joining_date;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->skills = $request->skills;
            $user->hourly_rate = $request->hourly_rate;
            $user->phone = $request->cell;
            if ($request->hasfile('image')) {
                if (!empty($user->image) && ($user->image != "assets/images/userPic.png")) {
                    $image_path = $user->image;
                    unlink($image_path);
                }
                $image = $request->file('image');
                $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'employee_images/';
                $image->move($destinationPath, $name);
                $user->image = 'employee_images/' . $name;
            }
            $user->save();
            $user->assignRole($request->role_name);
            $notification = array(
                'messege' => 'Employee Save Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function updateEmployee(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'name' => 'required',
            'exit_date' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'slack_username' => 'required',
            'joining_date' => 'required',
            'email' => 'required',
            'role_name' => 'required',
            'skills' => 'required',
            'hourly_rate' => 'required',
            'cell' => 'required',
        ]);

        $user = User::find($request->id);
        $user->type = 'Employee';
        $user->status = 'Active';
        $user->employee_id = 'emp-' . $request->employee_id;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->exit_date = $request->exit_date;
        $user->gender = $request->gender;
        $user->designation_id = $request->designation;
        $user->department_id = $request->department;
        $user->slack_username = $request->slack_username;
        $user->joining_date = $request->joining_date;
        if ($request->password) {
            $user->password =  Hash::make($request->password);
        }

        $user->email = $request->email;
        $user->skills = $request->skills;
        $user->hourly_rate = $request->hourly_rate;
        $user->phone = $request->cell;

        if ($request->hasfile('image')) {
            if (!empty($user->image) && ($user->image != "assets/images/userPic.png")) {
                $image_path = $user->image;
                unlink($image_path);
            }
            $image = $request->file('image');
            $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'employee_images/';
            $image->move($destinationPath, $name);
            $user->image = 'employee_images/' . $name;
        }
        $delrole = '';
        $oldrole = $user->getRoleNames();
        foreach ($oldrole as $row) {
            $delrole = $row;
        }
        if ($request->role_name != $delrole) {

            $user->removeRole($delrole);
            $user->assignRole($request->role_name);
        }
        $user->update();
        $notification = array(
            'messege' => 'Employee Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function showEmployee($id)
    {
        $employee = User::find($id);
        $permissions = Permission::all();
        $departments = Department::all();
        $designations = Designation::all();
        return view('dashboard.admin.employee.show', compact('employee', 'permissions', 'departments', 'designations'));
    }

    // Designation Store

    public function designationStore(Request $request)
    {
        if ($request->ajax()) {
            $designation = new Designation();
            $designation->name = $request->name;
            $designation->save();
            return response()->json(['success' => 'Designation Add Successfully!']);
        }
    }

    // Department Store

    public function departmentStore(Request $request)
    {
        if ($request->ajax()) {
            $department = new Department();
            $department->name = $request->name;
            $department->save();
            return response()->json(['success' => 'Department Add Successfully!']);
        }
    }
}
