<?php

namespace App\Http\Middleware;

use Closure;

class Hrd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        if (auth()->check()&& $request->user()->type_user == 'Admin') {
             return $next($request);
        }
        else if (auth()->check()&& $request->user()->type_user == 'Hrd') {
             return $next($request);
        }
        else if (auth()->check()&& $request->user()->type_user == 'Pegawai') {
             return $next($request);
        }
         else if (auth()->check()&& $request->user()->type_user == 'Keuangan') {
             return $next($request);
        }
        return redirect()->guest('/');
    }
    }
}
