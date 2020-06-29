<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class GeneratePdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateMyPDF()
    {
        $data = ['title' => 'Welcome to pakainfo.com'];
        $pdf = PDF::loadView('previewPDF', $data);
  
        return $pdf->download('pakainfo25_04_1992.pdf');
    }
}