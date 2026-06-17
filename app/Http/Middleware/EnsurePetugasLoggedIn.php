<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePetugasLoggedIn
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('petugas_id')) {
            return redirect()->route('admin.login')
                ->with('error', 'Silakan login sebagai petugas.');
        }

        return $next($request);
    }
}
