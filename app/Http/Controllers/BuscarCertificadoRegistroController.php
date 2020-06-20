<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\personas;

class BuscarCertificadoRegistroController extends Controller
{
    public function buscar_certificado_ID(){   
        $q = Input::get ( 'q' );
       $Personas = DB:: table('personas')
      
       ->where ('personas.documento_identidad', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $Personas) > 0)
          return view ( 'interfaces.certificado_registro_sistema',compact('Personas'))->withDetails ( $Personas)->withQuery ( $q );
          else
          
          return view ( 'interfaces.certificado_registro_sistema' )->withMessage ( '¡El trabajador no se encuentra registrado en el sistema!' );
      }
}
