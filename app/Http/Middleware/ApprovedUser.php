<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApprovedUser
{

    public function handle(Request $request, Closure $next): Response
    {
        if (cusr()->status == 'pending') {
            return redirect(route('pending'));
        }
        if (cusr()->status == 'blocked') {
            return redirect(route('blocked'));
        }
        return $next($request);
    }
}
