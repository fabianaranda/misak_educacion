<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personas;
use DB;
use App\Role;
class InterfacesController extends Controller
{
     // intefaz certificados 
    public  function interfas_menu_certificados( Request $request)
    {     $request->user()->authorizeRoles(['acceso total','certificados laboral','certificado registro laboral']);
        return view('interfaces.menu_certificados');
    }

         // intefaz  buscar persona para generar certificados 
    public  function interfas_buscar_persona_certificado(Request $request)
       {  $request->user()->authorizeRoles(['acceso total','certificados laboral']);
        return view('interfaces.buscar_persona_certificado');
      }

       // intefaz  certificados  registro sistema  
       public  function interfas_buscar_registro(Request $request)
       { 
        $request->user()->authorizeRoles(['acceso total','certificado registro laboral']);
           //$datos = personas::findOrFail($id_persona);
           return view('interfaces.certificado_registro_sistema');
       }


            // intefaz  certificados laborales   
            public  function interfas_certificados_laborales($id_persona ,Request $request)
            {        
                $request->user()->authorizeRoles(['acceso total','certificados laboral']);
                    
                $datos = DB:: table('programa')
                    ->join('personas', 'programa.codigo_programa', '=', 'personas.codigo_programa')
                    ->join('municipio', 'municipio.codigo_municipio', '=', 'personas.codigo_municipio')
                    ->join('departamento', 'departamento.codigo_departamento', '=', 'municipio.codigo_departamento')
                    ->where('personas.id',$id_persona)->get();
                return view('interfaces.certificados_laboral',compact('datos'));
            }

           // intefaz  certificados  registro sistema  
           public  function interfasRegistroSistema($id_persona ,Request $request)
           { 
            $request->user()->authorizeRoles(['acceso total','certificado registro laboral']);
             $datos = DB:: table('programa')
             ->join('personas', 'programa.codigo_programa', '=', 'personas.codigo_programa')
             ->join('municipio', 'municipio.codigo_municipio', '=', 'personas.codigo_municipio')
             ->join('departamento', 'departamento.codigo_departamento', '=', 'municipio.codigo_departamento')
             ->where('personas.id',$id_persona)->get();
             return view('interfaces.certificado_registro',compact('datos'));
               //return view('interfaces.certificado_registro');
           }
     

            
                   // intefaz  menu trabajadores  
                   public  function interfas_menu_trabajadores(Request $request)
                   {  
                    $request->user()->authorizeRoles(['acceso total','ingreso de empleado al sistema','listado general de los trabajadores']);
                       //$datos = personas::findOrFail($id_persona);
                       return view('interfaces.menu_trabajador');
                   }

            // intefaz  ingresar trabajador al sistema  
            public  function interfas_ingreso_trabajador(Request $request)
            {
                $request->user()->authorizeRoles(['acceso total','ingreso de empleado al sistema']);
                return view('interfaces.ingreso_trabajador');
            }

              // intefaz  informacion  guardado del trabajador   
              public  function interfas_informacion_trabjador($id_persona,Request $request)
              {
                $request->user()->authorizeRoles(['acceso total','ingreso de empleado al sistema']);
                /*
                $datos = DB:: table('personas')
                
                ->join('programa', 'personas.codigo_programa', '=', 'personas.id')
               
                ->where('personas.id',$id_persona)->get(); */
                
                  $datos = DB:: table('programa')
                 ->join('personas', 'programa.codigo_programa', '=', 'personas.codigo_programa')
                 ->join('municipio', 'municipio.codigo_municipio', '=', 'personas.codigo_municipio')
                 ->join('departamento', 'departamento.codigo_departamento', '=', 'municipio.codigo_departamento')
                 ->where('personas.id',$id_persona)->get();

                   return view('interfaces.informacion_trabajador',compact('datos'));
                }
              


             
                    // intefaz  listado general trabajador  
                    public  function interfasListadoGeneralTrabajador(Request $request)
                    {    $request->user()->authorizeRoles(['acceso total','Listado General de los Trabajadores']);
                        //$datos = personas::findOrFail($id_persona);
                        return view('interfaces.listado_general_trabajador');
                    }

                        // intefaz  actualizar datos empelado 
                    public  function interfas_actualizacion_empleado($id_persona,Request $request)
                    { 
                        $request->user()->authorizeRoles(['acceso total','ingreso de empleado al sistema']);
                          $datos = personas::findOrFail($id_persona);
                        return view('interfaces.actualizacion_datos_trabajador',compact('datos'));
                    }


                     //////////VISTAS a administrador total /////////////

                     public  function vista_interfas_menuAdminsitrador (Request $request ) 
                      {
                         ///para mostrar  vista menu   por  la persona encargada del censo ////
                         $request->user()->authorizeRoles('acceso total');
      
                            return view('/administrador.nemuAdministrador');

                     }

 


   public  function vista_interfas_ingrezar_usuarios (Request $request)
            
   {          $request->user()->authorizeRoles('administrador');
             $datos = Role::get();
             return view('/administrador.ingresar_usuarios',compact('datos'));
   }

   public  function vista_interfas_menu_usuarios (Request $request ) 
   {
        ///para mostrar  vista menu   por  la persona encargada del censo ////
        $request->user()->authorizeRoles('administrador');
      
       return view('/administrador.menu_usuarios');

   }


}
