<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPpdb
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
        if(auth()->check() && auth()->user()->is_admin == 0){
        // if(auth()->user()->is_admin==1){
            return $next($request);
        }else{

            return redirect('home')->with('error','Anda tidak dapat mengakses halaman ini');
        }
        // return $next($request);
        return redirect('ppdbuser_beranda')->with('error','Anda tidak dapat mengakses halaman ini');
    }
}
