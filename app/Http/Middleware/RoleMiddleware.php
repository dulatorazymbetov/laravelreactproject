<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = auth()->user();
        if($user){
            foreach($user->modules as $key => $value){
                if($value->url === $role){
                    return $next($request);
                }
            }
        }
        return response()->json('No Permissions', 406);
    }
}
