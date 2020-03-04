<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('tr_status','ASC')->orderBy('id','DESC')->paginate(10);
        $viewData=[
            'transactions' => $transactions
        ];
        return view('admin::transaction.index',$viewData);
    }
    public function viewOrder(Request $request,$id){
        if($request->ajax()){
            $orders =  Order::where('or_transaction_id',$id)->get();
            $html = view('admin::components.order',compact('orders'))->render();
            return \response()->json($html);
        }
    }
    public function handleTransaction($id){
        $transaction = Transaction::find($id);
        $orders = Order::where('or_transaction_id',$id)->get();
        if($orders){
            foreach ($orders as $order) {
                $product = Product::find($order->or_product_id);
                $product->pro_number =  $product->pro_number - $order->or_qty;
                $product->pro_pay=  $product->pro_pay + $order->or_qty;
                $product->save();
            }
            $transaction->tr_status= 1;
            $transaction->save();
        }
        return redirect()->back()->with('success','Xử lý dơn hàng thành công !!!');
    }
    public function action(Request $request,$action,$id){
        if($action){
            $transaction = Transaction::find($id);
            switch ($action) {
                case 'delete':
                        $transaction->delete();
                        return redirect()->route('admin.get.list.transaction')->with('success','Đã hủy giao dịch thành công');
                    break;
            }
        }
    }
}
