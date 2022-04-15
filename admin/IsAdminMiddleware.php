<?php

namespace App\Admin\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->user() && $request->user()->type == 'admin') {
            return $next($request);
        }
        return redirect(route('home'));
    }
}
