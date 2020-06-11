<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckPick
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
        if(!Session::has('pick_dest')){
            return redirect()->route('set.loc');
        }
        return $next($request);
    }
}
