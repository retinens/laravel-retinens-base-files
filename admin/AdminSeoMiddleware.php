<?php

namespace App\Admin\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminSeoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        config()->set('seotools.meta.defaults.title', 'Nutergia Admin');
        return $next($request);
    }
}
