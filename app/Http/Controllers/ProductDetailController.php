<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class ProductDetailController extends FrontendController
{
    //
    public function productDetail(Request $request){
        $url = $request->segment(2);
        $url=preg_split('/(-)/i',$url);
        if($id = array_pop($url)){
            $fivestar = Rating::where('ra_product_id',$id)->where('ra_number',5)->count();
            $forstar = Rating::where('ra_product_id',$id)->where('ra_number',4)->count();
            $threestar = Rating::where('ra_product_id',$id)->where('ra_number',3)->count();
            $twostar = Rating::where('ra_product_id',$id)->where('ra_number',2)->count();
            $onestar = Rating::where('ra_product_id',$id)->where('ra_number',1)->count();
            $eachstar =[
                1 => $onestar,
                2 => $twostar,
                3 => $threestar,
                4 => $forstar,
                5 => $fivestar
            ];
            $ratings = Rating::where('ra_product_id',$id)->orderBy('id','DESC')->get();
            $productDetail = Product::where('pro_active',Product::STATUS_PUBLIC)->find($id);
            $viewData= [
                'productDetail'=>$productDetail,
                'ratings' => $ratings,
                'eachstar' => $eachstar
            ];
            return view('product.detail',$viewData);
        }
        return redirect('/');
    }
    public function searh(Request $request){
        $key = $request->key;
        $products = Product::where('pro_name','like','%'.$key.'%')->orderBy('id','DESC')->paginate(12);
        return view('searh.index',compact('products'));
    }
}
