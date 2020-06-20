<?php

namespace App\Http\Controllers;
use App\personas;
use Illuminate\Http\Request;

class GuardarPersonaController extends Controller
{
    function create_trabajador(Request $data){
        $user = new  personas();
        $user->documento_identidad = $data['documento_identidad'];
        $user->codigo_municipio = $data['codigo_municipio'];
        $user->codigo_programa = $data['codigo_programa'];
        $user->tipo_identificacion  = $data['tipo_identificacion'];
        $user->sexo  = $data['sexo'];
        $user->fecha_nacimiento  = $data['fecha_nacimiento'];
        $user->nombre  = $data['nombre'];
        $user->apellidos = $data['apellidos'];
        $user->telefono = $data['telefono'];
        $user->numero_celular  = $data['numero_celular'];
        $user->estado_civil  = $data['estado_civil'];
   
        $user->fecha_contratacion = $data['fecha_contratacion'];
        $user->fin_contrato = $data['fin_contrato'];
        $user->ocupacion = $data['ocupacion'];
        $user->hoja_vida = $data['hoja_vida'];
        $user->direccion = $data['direccion'];
        $user->save();
        $user->id;
        //llamar tabla intermedio, muchos a muchos 
       /* foreach($economia->economia as $temp)
       {
        
            $economia = new economia_familia;
            $economia->hogar_id=$user->id;
            $economia->comidas_propias_id = $temp;
            $economia->save();
        
        }*/
        //return redirect()->route('interfaces.hogar');
       // return redirect()->route('interfaces.Ingresar_personas', ['id_Hogar' => $user->id]);
       return ['validate'=>true,'id'=>$user->id];
        //return view('interfaces.hogar');
    }
   
}
