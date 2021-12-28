<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SuperAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.superAdmin.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:super_admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in super admins table'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('superAdmin')->attempt($creds)) {
            return redirect()->route('superAdmin.dashboard');
        } else {
            return redirect()->route('superAdmin.login')->with('fail', 'Incorrect credentials');
        }
    }

    public function index()
    {
        return view('dashboard.superAdmin.home');
    }

    function logout()
    {
        Auth::guard('superAdmin')->logout();
        return redirect()->route('superAdmin.login');
    }

    // profile 

    public function profile()
    {
        return view('dashboard.superAdmin.profile');
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
            $profile = SuperAdmin::find($id);
            $profile->name = $request->name;
            $profile->email = $request->email;
            if ($request->hasfile('image')) {
                if (!empty($profile->image)) {
                    $image_path = $profile->image;
                    unlink($image_path);
                }
                $image = $request->file('image');
                $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'profile_images/';
                $image->move($destinationPath, $name);
                $profile->image = 'profile_images/' . $name;
            }

            $profile->update();
            return response()->json([
                'success' => 'Profile Updated Successfully!',
            ]);
        }
    }
}
