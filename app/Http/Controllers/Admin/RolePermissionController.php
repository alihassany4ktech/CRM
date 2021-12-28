<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function rolesPermissions()
    {
        $roles = Role::orderBy('id', 'desc')->get();
        return view('dashboard.admin.role.all', compact('roles'));
    }

    public function createRolesPermissions()
    {
        $permissions = Permission::all();
        return view('dashboard.admin.role.create', compact('permissions'));
    }

    public function saveRolePermission(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name',
            'permissions' => 'required',
        ]);
        $role = Role::create(['name' => $request->role_name, 'guard_name' => 'web']);
        $role->syncPermissions($request->permissions);
        $notification = array(
            'messege' => 'Role Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function deleteRole($id)
    {
        $role = Role::find($id);
        $role->delete();
        $notification = array(
            'messege' => 'Role Deleted Successfully!',
            'alert-type' => 'error'
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

    // permissions 
    public function permissions()
    {
        $permissions = Permission::orderBy('id', 'desc')->get();
        return view('dashboard.admin.permissions.all', compact('permissions'));
    }

    public function createPermissions()
    {
        return view('dashboard.admin.permissions.create');
    }

    public function savePermission(Request $request)
    {
        $listOfPermissions = explode(',', $request->permissions); //create array from separated/coma permissions

        foreach ($listOfPermissions as $permission) {
            $permissions = new Permission();
            $permissions->name = $permission;
            $permissions->guard_name = 'web';
            $permissions->save();
        }
        $notification = array(
            'messege' => 'Permission Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    // delete permission 

    public function deletePermission($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        $notification = array(
            'messege' => 'Permission Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
