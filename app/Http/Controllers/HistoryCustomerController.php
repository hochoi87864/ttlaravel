<?php

namespace App\Http\Controllers;

use App\Models\Favorite_product;
use App\Models\Order;
use App\Models\Product;
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
        $orders = Order::where('or_transaction_id',$id)->get();
        if($orders){
            foreach ($orders as $order) {
                $product = Product::find($order->or_product_id);
                $product->pro_number =  $product->pro_number - $order->or_qty;
                $product->pro_pay=  $product->pro_pay + $order->or_qty;
                $product->save();
            }
            $transaction->tr_status= 2;
            $transaction->save();
        }
        return redirect()->route('get.history.customer');
    }
    public function favoriteProduct(Request $request,$id){
        if($request->ajax()){
            foreach (Auth::user()->favoriteProduct as $product){
                if($product->id == $id){
                    return response()->json([
                        'success' => 0
                    ]);
                }
            }
            $favorite = new Favorite_product();
            $favorite->fp_product_id = $id;
            $favorite->fp_user_id = Auth::user()->id;
            $favorite->save();
            return response()->json([
                'success' => 1
            ]);
        }
    }
    public function listFavoriteProduct(){
        $products = Auth::user()->favoriteProduct;
        return view('favorite_product.index',compact('products'));
    }
    public function deleteFavoriteProduct($id)
    {
        $favorite_product_delete = Favorite_product::where([
            'fp_product_id' => $id,
            'fp_user_id' => Auth::user()->id
        ])->first();
        $favorite_product_delete->delete();
        return redirect()->back();
    }
}
