<?php

namespace App\Http\Middleware;
use Response;  
use Closure;


class CheckHeader
 {
    public function handle($request, Closure $next) 
    {
        if(!isset($_SERVER['x-awesome'])){  
            return Response::json(array('message'=>'x-awesome custom header is not set'));  
        }  
  
        if($_SERVER['x-awesome'] != true){  
            return Response::json(array('error'=>'x-awesome custom header is false'));  
        }  
  
        return $next($request);  
    }
}
