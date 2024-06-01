<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserToken
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Check if the user has a valid token
            $token = $request->bearerToken();
            if ($token) {
                return $next($request);
            }
        }else{
            return response(['message' => 'Unauthorized'], 401);
    }
        }

        // Unauthorized response
        
}
