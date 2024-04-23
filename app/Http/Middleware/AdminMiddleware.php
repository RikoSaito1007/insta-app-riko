<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // The Auth::check() will returne true if the user iss logged_in
        // If the Auth::check() is true, and the role_id is == 1
        // then the user can access the admin dashboard (We wlll use this later on in the web.php)
        if (Auth::check() && Auth::user()->id == User::ADMIN_ROLE_ID) {
            return $next($request);
        }

        return redirect()->route('index');
    }
}
