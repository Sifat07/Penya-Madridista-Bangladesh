<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            
            if (str_contains($request->path(), 'admin')) { 
                return route('admin_login');
            }
            
            if (str_contains($request->path(), 'user')) { 
                return route('patient_login');
            }
            // return route('login');
        }
    }
}
