<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; // Add this line

class InactivityTimeout
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $lastActivity = session('last_activity', 0);
            $timeout = config('session.lifetime');

            if (time() - $lastActivity > $timeout * 30) {
                Auth::logout();
                session()->flush();
                return redirect('/login')->with('logout_message', 'Your session has expired due to inactivity.');
            }
        }

        session(['last_activity' => time()]);

        return $next($request);
    }
}


