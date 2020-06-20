<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
Use App\programas;
use DB;

class DireccionTrabajadorController extends Controller
{
    public function direccionTrabajador()
    {
       
              $departamento = DB::table("departamento")->pluck("nombre_depatamento","codigo_departamento");
                 ///leer los datos comidad propias y economia  de la familia misak, desde BD  tabla  comidas propias y tabla economia misak 
            
                
                 $programa = DB::table("programa")->pluck("nombre_programa","codigo_programa");
       // return view('interfaces.hogar',compact('departamento','id_vivienda'));
              //variables  de la tabalas, deprtamento, economia, comida
            return view('interfaces.ingreso_trabajador',compact('departamento','programa'));
        
       
    }



    public function getmunicipio(Request $request)

    {

        $municipio = DB::table("municipio")

        ->where("codigo_departamento",$request->codigo_departamento)

        ->pluck("nombre_municipio","codigo_municipio");

        return response()->json($municipio);

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
