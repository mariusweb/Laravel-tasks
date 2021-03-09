<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Birthday
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (date('m-d') == '03-09') {
            echo "<h2>Sendien jusu gimtadienis</h2>";
        } else {
            echo "<h2>Sendien ne jusu gimtadienis</h2>";
        }
        return $next($request);
    }
}
