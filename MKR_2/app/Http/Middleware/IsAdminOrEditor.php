<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdminOrEditor
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user->isAdminOrEditor()) {
            return $next($request);
        }
        return response()->json(['error' => 'Access denied'], 403);
    }
}
