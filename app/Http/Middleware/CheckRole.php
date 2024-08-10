<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role !== 'manager') {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
