<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use DB;
use App\personas;
class PersonasCertificadosController extends Controller
{
  public function buscar_persona(){   
    $q = Input::get ( 'q' );
   $Personas = DB:: table('personas')
  
   ->where ('personas.documento_identidad', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $Personas) > 0)
      return view ( 'interfaces.buscar_persona_certificado',compact('Personas'))->withDetails ( $Personas)->withQuery ( $q );
      else
      
      return view ( 'interfaces.buscar_persona_certificado' )->withMessage ( '¡El trabajador no se encuentra registrado en el sistema!' );
  }
}
