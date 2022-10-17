<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(airoute('aimeos_shop_account'));
                return redirect()->route('home-page');
            }
        }
        $route = Route::getRoutes()->match($request);
        $currentroute = $route->getName();
        // dd($currentroute);
        if($currentroute=='logout'){

            return redirect()->route('home-page');
        }

        return $next($request);
    }
}
