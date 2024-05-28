<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // echo $request->user()->role;
        // echo $role;
        if($request->user()->role !== $role){    
            Auth::guard('web')->logout();
            return redirect('login');
        }
        return $next($request);
    }
}
