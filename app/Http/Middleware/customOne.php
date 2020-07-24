<?php
namespace App\Http\Middleware;
use Closure;
class customOne{
    public function handle($request, Closure $next, $name){
        return $next($request);
    }
}
