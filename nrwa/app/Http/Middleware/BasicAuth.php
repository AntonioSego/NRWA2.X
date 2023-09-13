<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $credentials = [
            'username' => config('app.CUSTOM_USERNAME'),
            'password' => config('app.CUSTOM_PASSWORD'),
        ];
    
        if ($request->getUser() != $credentials['username'] || $request->getPassword() != $credentials['password']) {
            return response('Unauthorized entry', 401, ['WWW-Authenticate' => 'Basic']);
        }
    
        return $next($request);
    }
    

}
