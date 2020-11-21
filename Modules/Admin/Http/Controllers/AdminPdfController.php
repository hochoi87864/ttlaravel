<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Transaction;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminPdfController extends Controller
{
    public function index(Request $request)
    {  
        $transactions = Transaction::whereBetween('updated_at',[$request->statistical_date_start_pdf,$request->statistical_date_end_pdf])->get();
        $data = ['transactions' => $transactions,'statistical_date_start'=>$request->statistical_date_start_pdf,'statistical_date_end'=>$request->statistical_date_end_pdf];	
    	$pdf = \PDF::loadView('admin::components.testpdf-pdf', $data);
        return $pdf->download('statistical'.$request->statistical_date_start_pdf.'to'.$request->statistical_date_end_pdf.'.pdf');
        // return view('admin::components.testpdf-pdf',$data);
    }
}
