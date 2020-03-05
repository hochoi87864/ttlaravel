<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShoppingCartController extends FrontendController
{
    //
    public function editProductItem(Request $request){

        $number = $request->number_edit;
        $pro_id = $request->pro_id;
        $rows = \Cart::content();
        // get number product in stock
        $number_product_in_stock = Product::find($pro_id)->pro_number;
        $product_in_stock_name = Product::find($pro_id)->pro_name;
        $number_product_in_cart = $rows->where('id', $pro_id)->first()->qty;
        // dd($number_product_in_stock, $number_product_in_cart);
        if($number>$number_product_in_stock){
            return redirect()->back()->with('warning','Sản phẩm '.$product_in_stock_name.' chỉ còn '.$number_product_in_stock.' trong kho');
        }
        // get rowID in shopping cart for update
        $rowId = $rows->where('id', $pro_id)->first()->rowId;
        // dd($test);
        // // dd($rowId,$number);
        \Cart::update($rowId, $number);
        return redirect()->back()->with('success','Cập nhật số lượng sản phẩm thành công');

    }
    public function addProduct(Request $request,$id){
        // $product = Product::find($id);
        // dd($product->pro_number);
        // dd( (2-1 > 0)?'Đúng':'Sai');
        // $a = \Cart::content()->where('id', $id);
        // if($a->first()){
        //     dd($a);
        // }
        // else{
        //     dd("Không");
        // }
        // dd($a->first()->qty);
      if($request->ajax()){
        $product = Product::find($id);
        $product_in_cart = \Cart::content()->where('id', $id);
        if($product_in_cart->first()){
        $then_number_product_in_cart = $product_in_cart->first()->qty +1;
        if($then_number_product_in_cart > $product->pro_number)
        return response()->json([
            'success' => 0,
            'cart_count' => \Cart::count(),
            'pro_number_in_stock' => $product->pro_number
        ]);
        }
        if(!$product) return redirect()->route('home');
        $price = $product->pro_price;
        if($product->pro_sale){
            $price = $price*(100-$product->pro_sale)/100;
        }
        if($product->pro_number==0){
             return redirect()->back()->with('warning','Sản phẩm đã hết hàng ');
        }
        \Cart::add([
         'id' => $product->id,
         'name' => $product->pro_name,
         'qty' =>1,
         'price' => $price, 
         'options' => [
             'avatar' => $product->pro_avatar,
             'price_old' => $product->pro_price,
             'sale'=> $product->pro_sale
             ]
         ]);
         return response()->json([
            'success' => 1,
            'cart_count' => \Cart::count()
        ]);
      }
      else{
          return '0';
      }
    }
    public function getListShoppingCart(){
        $products = \Cart::content();
        return view('shoppingCart.index',compact('products'));
    }
    public function getFormPay(){
        $products = \Cart::content();
        return view('shoppingCart.form',compact('products'));
    }
    public function deleteProductItem($key){
        \Cart::remove($key);
        return redirect()->back();
    }
    public function saveInfoShoppingCart(Request $request){
        // dd($request->all());
        $totalMoney = str_replace(',','',\Cart::subtotal(0,3));
        $transactionId = Transaction::insertGetId([
            'tr_user_id'=> get_data_user('web'),
            'tr_total' => $totalMoney,
            'tr_note'=> $request->note,
            'tr_address' => $request->address,
            'tr_phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        if($transactionId){
            $products = \Cart::content();
            foreach($products as $product)
            {
                Order::insert([
                    'or_transaction_id'=>$transactionId,
                    'or_product_id'=>$product->id,
                    'or_qty'=>$product->qty,
                    'or_price'=>$product->options->price_old,
                    'or_sale'=>$product->options->sale,
                    'created_at' => Carbon::now(),
                    'updated_at'=>Carbon::now()
                ]);
            }
            \Cart::destroy();
        }
        
        return redirect()->route('home');
    }
}
