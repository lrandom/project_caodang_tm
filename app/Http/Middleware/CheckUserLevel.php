<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Closure;

class CheckUserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle ($request, Closure $next)
    {
        $user = Auth::user();
        if ($user === null) {
            return redirect(URL::to('/').'/login');
        }

        if ($user->level === '1') {
            //nếu là user
            return redirect(URL::to('/'));
        }

        return $next($request);
    }
}

