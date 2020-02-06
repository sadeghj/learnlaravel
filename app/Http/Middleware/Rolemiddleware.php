<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Rolemiddleware
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
        // return redirect('/login');
        if (Auth::check() && Auth::user()->isAdmin() ) {
            echo  "This user is Admin";
            return $next($request);
        }elseif(Auth::check()){
            echo "This user is NOT Admin";
        }
        abort(403);


    }
}
