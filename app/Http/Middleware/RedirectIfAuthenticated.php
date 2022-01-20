<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin.dashboard');
                }
                break;
            case 'superAdmin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('superAdmin.dashboard');
                }
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    if (Auth::guard('web')->user()->type = "Employee") {
                        return redirect()->route('user.home');
                    } else {
                        return redirect()->route('user.client.dashboard');
                    }
                }
                break;
        }


        return $next($request);
    }
}
