<?php

namespace App\Http\Middleware;

use App\Models\Roles;
use Closure;

class CheckRole
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
        if(auth()->user()->role_id === Roles::ROLE_ADMIN) {
            return $next($request);
        }

        return abort(403);
    }
}
