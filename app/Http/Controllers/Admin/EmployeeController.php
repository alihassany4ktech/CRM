<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Department;
use App\Designation;
use App\EmployeeDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Exports\EmployeeExport;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

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
            $departmentName = Department::find($request->department);
            $designationName = Designation::find($request->designation);
            // dd($designationName->name);
            $user = new User();
            $user->type = 'Employee';
            $user->status = 'Active';
            $user->employee_id = 'emp-' . $request->employee_id;
            $user->name = $request->name;
            $user->address = $request->address;
            $user->exit_date = $request->exit_date;
            $user->gender = $request->gender;
            $user->designation = $designationName->name;
            $user->department = $departmentName->name;
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
        $department = Department::find($request->department);
        $designation = Designation::find($request->designation);
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
        $user->designation = $designation->name;
        $user->department = $department->name;
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
        $documents = EmployeeDocument::where('user_id', '=', $id)->get();
        return view('dashboard.admin.employee.show', compact('employee', 'permissions', 'departments', 'designations', 'documents'));
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

    public function documentStore(Request $request)
    {
        if ($request->ajax()) {
            $rules = array('document.*' => 'required|max:10000|mimes:jpg,png,gif,doc,docx,xls,xlsx,pdf,text');
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }
            $nameList = $request->name;
            for ($i = 0; $i < count($nameList); $i++) {
                $document  = new EmployeeDocument();
                $document->user_id = $request->id;
                $document->name = $nameList[$i];
                if ($request->hasFile('document')) {
                    $doc = $request->file('document');
                    $name = $doc[$i]->getClientOriginalName();
                    $destinationPath = 'employee_doc/';
                    $doc[$i]->move($destinationPath, $name);
                    $document->filename = $name;
                }
                $document->save();
            }
            return response()->json(['success' => 'Documenet Add Successfully!']);
        }
    }

    // download leads in excel file

    public function exportInToExcel()
    {
        return Excel::download(new EmployeeExport, 'employeeList.xlsx');
    }

    public function exportInToCSV()
    {
        return Excel::download(new EmployeeExport, 'leadEmployee.csv');
    }

    public function deleteDocument(Request $request)
    {
        if ($request->ajax()) {
            $file = EmployeeDocument::find($request->docId);
            $file_name = $file->filename;
            $file_path = public_path('employee_doc/' . $file_name);
            unlink($file_path);
            $file->delete();
            return response()->json(['success' => 'Documenet Deleted Successfully!']);
        }
    }

    public function downloadDocument(Request $request)
    {
        if ($request->ajax()) {
            $file = EmployeeDocument::find($request->docId);
            $file_name = $file->filename;
            $file_path = public_path('employee_doc/' . $file_name);
            return response()->download($file_path);
        }
    }
}
