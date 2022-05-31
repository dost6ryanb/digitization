<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class EnsureAccountActive
{

    public function handle(Request $request, Closure $next, $redirectToRoute = null)
    {
        if (! $request->user() ||
            ! $request->user()->IsActive()) {
            return $request->expectsJson()
                ? abort(403, 'Your account is not verified.')
                : Redirect::guest(URL::route($redirectToRoute ?: 'activation.notice'));
        }

        return $next($request);
    }
}
