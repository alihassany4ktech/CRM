<?php

namespace App\Http\Controllers\Admin;

use App\Lead;
use App\User;
use App\Admin;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function showLoginForm()
    {
        return view('dashboard.admin.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('fail', 'Incorrect credentials');
        }
    }

    public function index()
    {
        return view('dashboard.admin.home');
    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function profile()
    {
        return view('dashboard.admin.profile');
    }

    public function profileUpdate(Request $request)
    {
        if ($request->ajax()) {
            $rules = array('name' => 'required|min:3|max:50');
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }
            $id = $request->id;
            $profile = Admin::find($id);
            $profile->name = $request->name;
            $profile->email = $request->email;
            if ($request->hasfile('image')) {
                if (!empty($profile->image) && ($profile->image != "assets/images/adminPic.png")) {
                    $image_path = $profile->image;
                    unlink($image_path);
                }
                $image = $request->file('image');
                $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'admin_images/';
                $image->move($destinationPath, $name);
                $profile->image = 'admin_images/' . $name;
            }

            $profile->update();
            return response()->json([
                'success' => 'Profile Updated Successfully!',
            ]);
        }
    }

    // Clients 

    public function clientDashboard()
    {
        $clients = User::all();
        $leads = Lead::all();
        $leadconversions = Lead::where('status', '=', 'converted')->get();
        return view('dashboard.admin.client.dashboard', compact('clients', 'leads', 'leadconversions'));
    }

    public function clients()
    {
        $clients = User::where('type', '=', 'Customer')->orderBy('id', 'desc')->get();
        return view('dashboard.admin.client.all', compact('clients'));
    }

    public function create()
    {
        $roles = Role::orderBy('id', 'desc')->get();
        $permissions = Permission::all();
        return view('dashboard.admin.client.create', compact('roles', 'permissions'));
    }

    public function saveClient(Request $request)
    {
        $request->validate([
            'company' => 'required',
            'address' => 'required',
            'shipping_address' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',
            'client_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'client_password' => 'required|min:5|max:30',
            'note' => 'required',
            'role_name' => 'required',
            // 'permissions' => 'required',
        ]);
        $user = User::Create(
            [
                'type' => 'Customer',
                'phone' => $request->phone,
                'company' => $request->company,
                'address' => $request->address,
                'shipping_address' => $request->shipping_address,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'name' => $request->client_name,
                'email' => $request->email,
                'note' => $request->note,
                'notification_status' => $request->notification_status,
                'login' => $request->login_status,
                'password' => Hash::make($request->client_password),

            ]
        );
        // $role = Role::where('name', '=', $request->role_name)->first();
        // $role->syncPermissions($request->permissions);
        $user->assignRole($request->role_name);
        $notification = array(
            'messege' => 'Client Save Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function updateClient(Request $request)
    {
        $request->validate([
            'company' => 'required',
            'address' => 'required',
            'shipping_address' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',
            'client_name' => 'required',
            'email' => 'required|email',
            'client_password' => 'required|min:5|max:30',
            'note' => 'required',
            'role_name' => 'required',
        ]);
        $client = User::find($request->client_id);
        $delrole = '';
        $oldrole = $client->getRoleNames();
        foreach ($oldrole as $row) {
            $delrole = $row;
        }
        if ($request->role_name != $delrole) {

            $client->removeRole($delrole);
            $client->assignRole($request->role_name);
        }
        // update feild
        $client->company = $request->company;
        $client->address = $request->address;
        $client->shipping_address = $request->shipping_address;
        $client->phone = $request->phone;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->zip = $request->zip;
        $client->client_name = $request->client_name;
        $client->email = $request->email;
        $client->client_password = $request->client_password;
        $client->note = $request->note;
        // 
        $client->login = $request->login_status;
        $client->notification_status = $request->notification_status;
        $client->update();
        $notification = array(
            'messege' => 'Client Profile Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function showClient($id)
    {
        $client = User::find($id);
        return view('dashboard.admin.client.show', compact('client'));
    }

    public function deleteClient($id)
    {
        $client = User::find($id);
        $client->delete();
        $notification = array(
            'messege' => 'Client Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
