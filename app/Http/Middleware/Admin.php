<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
class Admin
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
        switch (Session::get('hak_akses')){
        case 'admin':
            return $next($request);
        break;

        default:
            return redirect('login')->with('alert','Anda Tidak Bisa Mengakses Halaman Ini !');
            break;
        }
    }
}
