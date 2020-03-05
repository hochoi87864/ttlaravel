<?php
namespace App\Http\Middleware;
use Closure;
class checkLoginUser{
    public function handle($request,Closure $next){
        if(!get_data_user('web')){
            if($request->ajax()) {
                return response()->json([
                    'error' => true
                ]);
            }
            return redirect()->route('get.login');
        }
        return $next($request);
    }
}