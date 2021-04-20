<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class login
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
        // echo '<h1>hhhhhh</h1>';
        if(Auth::attempt(['email' => $request->log_email, 'password' => $request->log_pass])){
            $member = DB::table('add_admin')
            ->where('email','=',$request->log_email)
            ->select('Status')
            ->get();
            if($member[0]->Status=="Admin" ){
                return redirect('/viewadmin');
            }else{
                return redirect('/reseller');
            }
        }
        return $next($request);
    }
}
