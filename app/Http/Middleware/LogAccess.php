<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogAccess
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('Route accessed: ' . $request->path());

        return $next($request);
    }
}