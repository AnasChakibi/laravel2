<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::has('loginId') && (url("login")==$request->url() || url("register")==$request->url()))
        {
          return redirect("space");
        }
      
        
        
        return $next($request);
    }
}