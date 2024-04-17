<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
{
    if ($request->path() == 'login' && $request->isMethod('post') && $request->session()->has('user')) {
        return redirect('/');
    }

    if ($request->path() == 'login') {
        return $next($request);
    }

    return $next($request);
}
// public function handle(Request $request, Closure $next)
// {
//     if ($request->session()->has('user')) {
//         return $next($request);
//     } else {
//         return redirect('/');
//     }
// }

}
