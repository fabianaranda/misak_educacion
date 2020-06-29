<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\nivel_academico;

class EducacionSuperiorController extends Controller
{
   

    public function create_educacion_superior(Request $request)
    {
        $personas = $request->personas;
        foreach ($personas as $key => $data) 
        {           
            //$data=request::all();
            $hogar = new nivel_academico;
            $hogar -> estado = $data["estado"];
            //$hogar -> tipo_educacion_superior = $data['tipo_educacion_superior'];
            $hogar -> nombre_nivel = $data['nombre_nivel'];

           
           // $hogar -> documento_id  = $data['documento_id'];
            $hogar-> id_personas = $data['id_personas'];
           
            
            $hogar->save();
        }
        if (true /*$resul*/)
        {
        
           //return view("mensajes.msj_correcto")->with("msj","Informacion de la vivienda Guardado");   
         return ['validate'=>true,'id_personas'=>$hogar->id_personas];
        
        }  else
        {
          return back()->with("errormsj","Datos no Guardado");
        }
    }
    
}
