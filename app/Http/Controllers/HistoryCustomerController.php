<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryCustomerController extends FrontendController
{
    public function index(){
        $user=Auth::user();
        $transactions= $user->Transaction;
        // dd($transactions);
        return view('history.index',compact('transactions'));
    }
    public function viewOrder(Request $request,$id){
        
        // dd($orders);
        if($request->ajax()){
            $orders =  Order::where('or_transaction_id',$id)->get();
            $html = view('admin::components.order',compact('orders'))->render();
            return \response()->json($html);
        }
    }
    public function deleteTransaction($id){
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('get.history.customer');
    }
    public function revecieProduct($id){
        $transaction = Transaction::find($id);
        $transaction->tr_status = 2;
        $transaction->save();
        return redirect()->route('get.history.customer');
    }
}
