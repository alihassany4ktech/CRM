<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Module;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{

    // new
    public function rolePermissionStore(Request $request)
    {
        if ($request->ajax()) {
            if ($request->assignPermission == 'yes') {
                $role = Role::find($request->roleId);
                $role->givePermissionTo($request->permissionId);
                return response()->json(['success' => 'Assigned']);
            } else {
                $role = Role::find($request->roleId);
                $role->revokePermissionTo($request->permissionId);
                return response()->json(['success' => 'unAssigned']);
            }
        }
    }

    public function roleStore(Request $request)
    {
        if ($request->ajax()) {
            Role::create(['name' => $request->role_name, 'guard_name' => 'web', 'auth_id' => Auth::guard('admin')->user()->id]);
            return response()->json(['success' => 'Role Saved Successfully!']);
        }
    }

    public function addMember(Request $request)
    {
        if ($request->ajax()) {
            $members = $request->memberId;
            foreach ($members as $row) {
                $member = User::find($row);
                $member->roles()->detach();
                $member->assignRole($request->roleId);
            }

            return response()->json(['success' => 'Member Added Successfully!']);
        }
    }

    public function deleteRoleMember(Request $request)
    {
        if ($request->ajax()) {
            $user = User::find($request->memberId);
            $user->removeRole($request->roleId);
            return response()->json(['success' => 'Member Deleted Successfully!']);
        }
    }

    public function deleteRole(Request $request)
    {
        if ($request->ajax()) {
            $role = Role::find($request->roleId);
            $role->delete();
            return response()->json(['success' => 'Role Deleted Successfully!']);
        }
    }

    // end new
    public function rolesPermissions()
    {
        $roles = Role::where('auth_id', '=', Auth::guard('admin')->user()->id)->orderBy('id', 'desc')->get();
        $permissions = Permission::all();
        $modules = Module::all();
        return view('dashboard.admin.role.all', compact('roles', 'permissions', 'modules'));
    }








    public function saveRolePermission(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name',
            'permissions' => 'required',
        ]);
        $role = Role::create(['name' => $request->role_name, 'guard_name' => 'web', 'auth_id' => Auth::guard('admin')->user()->id]);
        $role->syncPermissions($request->permissions);
        $notification = array(
            'messege' => 'Role Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function editeRole($id)

    {
        $role = Role::find($id);
        return view('dashboard.admin.role.edit', compact('role'));
    }

    public function updateRole(Request $request)
    {
        $request->validate([
            'role_name' => 'required',
            'permissions' => 'required',
        ]);
        $role = Role::find($request->role_id);
        $oldpermissions = $role->getAllpermissions();
        $role->revokePermissionTo($oldpermissions);
        $role->syncPermissions($request->permissions);
        $notification = array(
            'messege' => 'Role Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
