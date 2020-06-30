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
        if (Auth::guard($guard)->check()) {
            foreach (config('auth.guards') as $key => $value) {
                if($key == $guard) {
                   if($value['provider']=="admins")
                    {
                         return redirect()->route('admin.home');
                    }
                     else if($value['provider']=="writers")
                    {

                         return redirect()->route('writer.home');
                    }
                    else if($value['provider']=="companies")
                    {

                         return redirect()->route('company.profile');
                    }
                     else if($value['provider']=="users")
                    {
                         return redirect()->route('user.profile');
                    }
                }
            }
        }
               return $next($request);
       // if (Auth::guard('admin')->check()) {
       // dd('r1');
       //      return redirect()->intended('/admin/product');
       //  }
       //  if (Auth::guard('writer')->check()) {
       //     dd('r2');
       //      return redirect()->intended('/writer/product');
       //  }
       //  if (Auth::guard('company')->check()) {
       //    //  dd('r3');
       //      return redirect()->intended('/company');
       //  }
       //  if (Auth::guard('user')->check()) {
       //      //dd('r4');
       //      return redirect()->intended('/user');
       //  }
       //  //dd('r5');
       //  return $next($request); 
       
    }
}
