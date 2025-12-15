<?php

namespace App\Http\Middleware;
use RealRashid\SweetAlert\Facades\Alert;

use Closure;
use Illuminate\Http\Request;

class afterlogin_u
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
          if(Session('cid'))
        {

        }
        else
        {
            Alert::error('Warning', 'Login First !');
            return redirect('/');    
        }
        return $next($request);
    }
}
