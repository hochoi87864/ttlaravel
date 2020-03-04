<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use App\Models\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getLogout(){
        Auth::logout();
        return view('admin::login.login');
    }
    public function getLogin(){
        return view('admin::login.login'); 
    }
    public function postLogin(Request $request){
        $info_user = [
            'name' => $request->email ,
            'password' => $request->password
        ];
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->role == 1){
                return redirect()->route('admin.dashboard');
            } 
        }
        return redirect()->back()->with('error','Đăng nhập không thành công');
    }
    public function index()
    {
        $today = Carbon:: today()->format('Y-m-d');
        $now_month = Carbon::today()->format('Y-m');
        $total_money_now_month = Transaction::where('updated_at','like','%'.$now_month.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $now_month_for_caculate = Carbon::now()->month;
        if($now_month_for_caculate == 1){
            $before_month =12;
        }else{
            $before_month = $now_month_for_caculate-1;
        }
        $total_money_before_month = -1;
        if($before_month<10){
            $total_money_before_month=Transaction::where('updated_at','like','____-0'.$before_month.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        }
        else{
            $total_money_before_month=Transaction::where('updated_at','like','____-'.$before_month.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        }
        // dd($before_month);
        // dd($total_money_now_month);
        // dd($onemonth1);
        // if( $total_money_before_month = -1){
        //     echo "Lỗi rồi--------------------";
        // }
        $count_user = User::all()->count();
        $count_transaction_wait = Transaction::where('tr_status',0)->count();
        $onedago = Carbon:: today()->subDays(1)->format('Y-m-d');
        $twodago = Carbon:: today()->subDays(2)->format('Y-m-d');
        $threedago = Carbon:: today()->subDays(3)->format('Y-m-d');
        $fordago = Carbon:: today()->subDays(4)->format('Y-m-d');
        $fivedago = Carbon:: today()->subDays(5)->format('Y-m-d');
        $sixdago = Carbon:: today()->subDays(6)->format('Y-m-d');
        $totaltoday = Transaction::where('updated_at', 'like', '%'.$today.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalonedago = Transaction::where('updated_at', 'like', '%'.$onedago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totaltwodago = Transaction::where('updated_at', 'like', '%'.$twodago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalthreedago = Transaction::where('updated_at', 'like', '%'.$threedago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalfordago = Transaction::where('updated_at', 'like', '%'.$fordago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalfivedago = Transaction::where('updated_at', 'like', '%'.$fivedago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalsixdago = Transaction::where('updated_at', 'like', '%'.$sixdago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        // $chart = [
        //     $today=>  $totaltoday,
        //     $onedago=>  $totalonedago,
        //     $twodago=>  $totaltwodago,
        //     $threedago=>  $totalthreedago,
        //     $fordago=>  $totalfordago,
        //     $fivedago=>  $totalfivedago,
        //     $sixdago=>  $totalsixdago,    
        // ];
        $one = Carbon:: today()->subDays(1)->format('d-m');
        $two = Carbon:: today()->subDays(2)->format('d-m');
        $three = Carbon:: today()->subDays(3)->format('d-m');
        $for = Carbon:: today()->subDays(4)->format('d-m');
        $five = Carbon:: today()->subDays(5)->format('d-m');
        $six = Carbon:: today()->subDays(6)->format('d-m');
        $total_price_ten_days_edit1 = "".$totalsixdago.",".$totalfivedago.",".$totalfordago.",".$totalthreedago.",".$totaltwodago.",".$totalonedago.",".$totaltoday."";
        $time_chart = "".$six.",".$five.",".$for.",".$three.",".$two.",".$one.",Hôm nay";
        // dd($total_price_ten_days);
        $ratings   = Rating::limit(5)->orderBy('id','DESC')->get();
        $viewData = [
            'ratings' => $ratings,
            'total_price_ten_days' => $total_price_ten_days_edit1,
            'time_chart' => $time_chart,
            'count_transaction_wait' =>$count_transaction_wait,
            'count_user' => $count_user,
            'total_money_now_month'=>$total_money_now_month,
            'total_money_before_month' => $total_money_before_month

        ];
        return view('admin::content.test',$viewData);
    }
}
