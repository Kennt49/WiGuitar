<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
//use PDF;
 use Barryvdh\DomPDF\Facade\Pdf;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
       
    $pdf = Pdf::loadView('testPDF', $data);
    return $pdf->download('invoice.pdf');
    }
}