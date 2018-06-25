<?php

namespace App\Http\Middleware;

use Closure;

class Benchmark
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        logger("Request " . $request->url());
        logger($request->all());

        $method_start_time = microtime(TRUE);

        $response = $next($request);


        $res = microtime(TRUE) - $method_start_time;
        logger("Took = $res Seconds");
        //logger(print_r($response, true));
        return $response;
    }
}
