<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function __construct()
    {
        $categories = Category::all();
        View::share('categories',$categories);
    }
}
