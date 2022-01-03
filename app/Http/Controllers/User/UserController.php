<?php

namespace App\Http\Controllers\User;

use Exception;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            return redirect()->route('user.home');
        } else {
            return redirect()->route('user.login')->with('fail', 'Incorrect credentials');
        }
    }

    public function dashboard()
    {
        return view('dashboard.user.home');
    }

    function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('user.login');
    }


    // socil login 
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('provider_id', $user->id)->where('provider_name', '=', 'google')->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->route('user.home');
            } else {
                $newuser = new User();
                $newuser->role = 'Customer';
                $newuser->name = $user->name;
                $newuser->email = $user->email;
                $newuser->provider_id = $user->id;
                $newuser->provider_name = 'google';
                $newuser->password = Hash::make($user->id);
                $newuser->save();
                Auth::login($newuser);
                return redirect()->route('user.home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    // socil login 
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        try {

            $user = Socialite::driver('facebook')->user();
            dd($user);
            $finduser = User::where('provider_id', $user->id)->where('provider_name', '', 'facebook')->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->route('user.home');
            } else {
                $newuser = new User();
                $newuser->role = 'Customer';
                $newuser->name = $user->name;
                $newuser->email = $user->email;
                $newuser->provider_id = $user->id;
                $newuser->provider_name = 'facebook';
                $newuser->password = Hash::make($user->id);
                $newuser->save();

                Auth::login($newuser);

                return redirect()->route('user.home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
