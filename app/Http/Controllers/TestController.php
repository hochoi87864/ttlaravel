<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        $a = User::find(1)->Transaction;
        dd($a);
    }
}
