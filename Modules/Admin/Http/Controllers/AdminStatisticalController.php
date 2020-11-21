<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminStatisticalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::statistical.index');
    }
    public function getStatistical(Request $request){
        $statistical_date_start = date("Y-m-d H:i:s", strtotime($request->statistical_date_start));
        $statistical_date_end = date("Y-m-d H:i:s", strtotime($request->statistical_date_end));
        $transactions = Transaction::whereBetween('updated_at',[$request->statistical_date_start,$request->statistical_date_end])->get();
        // return view('admin::components.listStatistical',['transactions'=>$transactions,'statistical_date_start'=>$statistical_date_start,'statistical_date_end'=>$statistical_date_end])->render();
        $html =  view('admin::components.listStatistical',['transactions'=>$transactions,'statistical_date_start'=>$statistical_date_start,'statistical_date_end'=>$statistical_date_end])->render();
        return response()->json($html);
    }
}
