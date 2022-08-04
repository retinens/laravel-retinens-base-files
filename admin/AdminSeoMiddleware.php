<?php

namespace App\Admin\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminSeoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $siteName = config('app.name');
        config()->set('seotools.meta.defaults.title', "$siteName Admin");
        return $next($request);
    }
}
