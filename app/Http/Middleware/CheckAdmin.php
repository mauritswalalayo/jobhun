<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckAdmin
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
        if(Auth::check()){
            if(Auth::user()->role=='admin')
                return $next($request);
            else{
                return redirect()->route('beranda')->with('pesan','Maaf anda tidak punya hak sebagai admin');
            }
        }
        else{
            return redirect()->route('home');
        }
    }
}
