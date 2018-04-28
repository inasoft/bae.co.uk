<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use App\Role;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
     //   dd($request->user()->hasRole('admin'));
         if (!$request->user()->hasRole('admin')) 
          {
            return redirect('/403-forbidden/oops-not-autorized'); 
            
          }
             
        return $next($request);
    }
    

    
         
    
}
