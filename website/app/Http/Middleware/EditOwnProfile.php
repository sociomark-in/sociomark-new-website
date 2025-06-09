<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditOwnProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is trying to edit their own profile
        if (Auth::id() !== (int) $request->route('id')) {
            // If not, abort with a 403 (Unauthorized) error
            abort(403, 'Unauthorized action.');
        }

        // Allow the request to proceed if the check passes
        return $next($request);
    }
}
