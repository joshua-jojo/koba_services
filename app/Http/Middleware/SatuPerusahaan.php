<?php

namespace App\Http\Middleware;

use App\Models\Perusahaan;
use Closure;
use Illuminate\Http\Request;

class SatuPerusahaan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data = Perusahaan::count();
        if ($data) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
