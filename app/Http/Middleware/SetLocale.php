<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; // Import the App facade

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = session('locale', 'en');
        App::setLocale($locale);

        return $next($request);
    }
}
