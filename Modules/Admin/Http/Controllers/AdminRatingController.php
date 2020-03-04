<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $ratings   = Rating::all();
        $viewData = [
            'ratings' => $ratings
        ];
        return view('admin::rating.index',$viewData);
    }
    public function action($action,$id){
        if($action){
            $rating = Rating::find($id);
            switch ($action) {
                case 'delete':
                    $product = Rating::find($id)->Product;
                    $product->pro_total_number -= $rating->ra_number;
                    $product->pro_total_rating -= 1;
                    $product->save();
                    $rating->delete();
                    return redirect()->route('admin.get.list.rating')->with('succes','Xóa đánh giá thành công!!!');
                    break;
            }
        }
        return redirect()->back();
    }
}
