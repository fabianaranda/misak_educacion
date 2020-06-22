<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
Use App\programas;
Use App\pensiones;
Use App\tipo_contrato;
use DB;

class DireccionTrabajadorController extends Controller
{
    public function direccionTrabajador()
    {
                // llamar tipo programa
              $tipo_trabajo = DB::table("tipo_trabajo")->pluck("nombre_tipo_trabajo","id_tipo_trabajo");
              
                // llamar para la direccion del lugar donde va trabajr y la institucion educativa
                $departemento_lugar_trabajo = DB::table("departemento_lugar_trabajo")->pluck("nombre_depatamento_trabajo","codigo_departamento_trabajo");
              
              // llamar tipo pensiones
               $pensiones = DB::table("pensiones")->pluck("nombre_pensiones","id_pesiones");

               // llamar tipo contrato
               $tipo_contrato = DB::table("tipo_contrato")->pluck("nombre_tipo_contrato","id_tipo_contrato");

              $departamento = DB::table("departamento")->pluck("nombre_depatamento","codigo_departamento");
                 ///leer los datos comidad propias y economia  de la familia misak, desde BD  tabla  comidas propias y tabla economia misak 
            
                
                 $programa = DB::table("programa")->pluck("nombre_programa","codigo_programa");
       // return view('interfaces.hogar',compact('departamento','id_vivienda'));
              //variables  de la tabalas, deprtamento, economia, comida
            return view('interfaces.ingreso_trabajador',compact('departamento','programa','tipo_trabajo','pensiones','tipo_contrato','departemento_lugar_trabajo'));
        
       
    }



    public function getmunicipio(Request $request)

    {

        $municipio = DB::table("municipio")

        ->where("codigo_departamento",$request->codigo_departamento)

        ->pluck("nombre_municipio","codigo_municipio");

        return response()->json($municipio);

    }

/// llamar tabla categoria_trabajo
    public function getcategoria_trabajo(Request $request)

    {

        $categoria_trabajo = DB::table("categoria_trabajo")

        ->where("id_tipo_trabajo",$request->id_tipo_trabajo)

        ->pluck("nombre_categoria_trabajo","id_categoria_trabajo");

        return response()->json($categoria_trabajo);

    }

    
/// llamar table direccion y lugar de trabajo
public function getmunicipio_lugar_trabajo(Request $request)

{

    $municipio_lugar_trabajo = DB::table("municipio_lugar_trabajo")

    ->where("codigo_departamento_trabajo",$request->codigo_departamento_trabajo)

    ->pluck("nombre_municipio_trabajo","codigo_municipio_trabajo");

    return response()->json($municipio_lugar_trabajo);

}

    
/// llamar table nombre_institucion
public function getnombre_institucion(Request $request)

{

    $nombre_institucion= DB::table("nombre_institucion")

    ->where("codigo_municipio_trabajo",$request->codigo_municipio_trabajo)

    ->pluck("nombre_institucion_trabajo","id_nombre_institucion");

    return response()->json($nombre_institucion);

}

    
/// llamar table tipo_institucion
public function getnombre_tipo_institucion(Request $request)

{

    $tipo_institucion= DB::table("tipo_institucion")

    ->where("id_nombre_institucion",$request->id_nombre_institucion)

    ->pluck("nombre_tipo_institucion","id_tipo_institucion");

    return response()->json($tipo_institucion);

}


/// llamar table sede_institucion
public function getnombre_sede_institucion(Request $request)

{

    $sede_institucion= DB::table("sede_institucion")

    ->where("id_tipo_institucion",$request->id_tipo_institucion)

    ->pluck("nombre_sede_institucion","id_sede_institucion");

    return response()->json($sede_institucion);

}




/*
    public function getresguardo(Request $request)

    {

        $resguardo = DB::table("resguardo")

        ->where("codigo_municipio",$request->codigo_municipio)

        ->pluck("nombre_reguardo","codigo_resguardo");

        return response()->json($resguardo);

    }



    public function getzona(Request $request)                                                                                                                                   

    {

        $zona = DB::table("zona")

        ->where("codigo_resguardo",$request->codigo_resguardo)

        ->pluck("nombre_zona","codigo_zona");

        return response()->json($zona);

    }



    public function getvereda(Request $request)

    {

        $vereda = DB::table("vereda")

        ->where("codigo_zona",$request->codigo_zona)

        ->pluck("nombre_vereda","codigo_vereda");

        return response()->json($vereda);

    }



     public function getsector(Request $request)

    {

        $sector = DB::table("sector")

        ->where("codigo_vereda",$request->codigo_vereda)

        ->pluck("nombre_sector","codigo_sector");

        return response()->json($sector);

    } */
}
