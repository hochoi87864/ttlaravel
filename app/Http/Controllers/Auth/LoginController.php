<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    // public function getLogin(){
    //     return redirect()->back()->with('needloginForAction','needLogin');
    // }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return response()->json([
                'success' => 1
            ]);
        }
        else{
            return response()->json([
                'success' => 0
            ]);
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }

    /**
     * Tao 1 cái phương thức kiểm tra thông tin
     */
    public function checkAuth(Request $request) {
        $credentials = $request->only(['email', 'password']);

        if(\App\User::where('email', $credentials['email'])->where('password', $credentials['password'])) {
            return response()->json([
                'error' => false
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'Sai tài khoản hoặc mật khẩu'
        ]);
    } 
}
