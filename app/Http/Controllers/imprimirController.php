<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class imprimirController extends Controller
{
    public function imprimir(){
        
        $pdf = \PDF::loadView('imprimir');
        return $pdf->download('imprimir.pdf');
    }
}