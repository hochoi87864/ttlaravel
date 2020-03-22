<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPassword;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{

    // use SendsPasswordResetEmails;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    public function getFormResetPassword(){
        return view('auth.resetpassword');
    }
    public function senCodeResetPassword(Request $request){
        $email = $request->email;
        $checkUser = User::where('email',$email)->first();
        if(!$checkUser){
            return redirect()->back()->with('notExist','Email không tồn tại !!!');
        }
        $code = md5(time().$email);
        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();
        $url = route('get.link.reset.password',['code'=> $checkUser->code,'email'=>$email]);
        $data = [
            'url' => $url
        ];
        Mail::send('email.resetpassword', $data, function($message) use ($email){
	        $message->to($email,'ResetPassword')->subject('Lấy lại mật khẩu');
	    });
        return redirect()->back()->with('Success','Thành công');
    }
    public function resetPassword(Request $request){
        $email = $request->email;
        $code = $request->code;
        $checkUser = User::where([
            'code' => $code,
            'email' => $email
        ])->first();
        if(!$checkUser){
            return redirect()->route('home');
        }
        return view("auth.reset",['email'=>$request->email]);
    }
    public function saveResetPassword(Request $request){
        $validator = Validator::make($request->all(),[
            'passwordreset' => 'required',
            'confirmpasswordreset' => 'required|same:passwordreset'
        ],
        [
            'passwordreset.required' => 'Mật khẩu không được để trống',
            'confirmpasswordreset.required' => 'Mật khẩu nhập lại không được để trống !',
            'confirmpasswordreset.same' => 'Mật khẩu nhập lại không khớp !'
        ]
    );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator, 'loginErrors');
        }
        $email = $request->email;
        $code = $request->code;
        $checkUser = User::where([
            'code' => $code,
            'email' => $email
        ])->first();
        if(!$checkUser){
            return redirect()->route('home');
        }
        $checkUser->password = bcrypt($request->passwordreset);
        $checkUser->save();
        return redirect()->route('home')->with('resetPasswordSuccess','resetPasswordSuccess');
    }
}
