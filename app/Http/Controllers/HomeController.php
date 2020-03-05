<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    //
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $slides = Slide::all();
        $productHot = Product::where([
            'pro_hot' => Product::HOT_ON,
            'pro_active' => Product::STATUS_PUBLIC
        ])->orderBy('id','DESC')->limit(5)->get();
        $articleNews = Article::orderBy('id','DESC')->limit(3)->get();
        $product_news = Product::where('pro_active',1)->orderBy('created_at','DESC')->limit(2)->get();
        $product_best_sale = Product::where('pro_active',1)->orderBy('pro_sale','DESC')->limit(2)->get();
        $product_best_pay = Product::where('pro_active',1)->orderBy('pro_pay','DESC')->limit(2)->get();
        $viewData=[
            'productHot' => $productHot,
            'articleNews'=>$articleNews,
            'product_news' => $product_news,
            'product_best_sale' => $product_best_sale,
            'product_best_pay' => $product_best_pay,
            'slides' =>$slides
        ];
        return view('home.index',$viewData);
    }
    public function contact(){
        return view('contact.contact');
    }
}
