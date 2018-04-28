<?php

namespace App\Http\Middleware;

use Closure;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        $url = $request->url();
    	if($url=='https://www.bestassignmentexperts.com/index.php')
    	{
    		return redirect('https://www.bestassignmentexperts.com');
    	}
           if (!$request->secure()&&env('APP_ENV')=='production') {
                return redirect()->secure($request->getRequestUri());
            }
			return $next($request); 
            
    }
}
