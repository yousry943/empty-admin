<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\DashboardAuthenticate as Middleware;
use Illuminate\Routing\Controllers\Middleware as ControllersMiddleware;

class DashboardAuthenticate extends ControllersMiddleware
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
            return route('dashboard.login');
        }
    }
}
