@extends('layouts.menu')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <script src="/js/sweetalert2@9.js"></script>
 
 <!--\\\\\\\ estilos css \\\\\\-->
 <link href="css/admin.css" rel="stylesheet" type="text/css" />
 
 <link rel="stylesheet" href="css/estilos_pie_pagina.css">

      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Ingreso de trabajador</h1>
          <h2 class="">Nivel Academico</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Ingreso de trabajador</a></li>
            <li class="active">Nivel Academico</li>
          </ol>
        </div>
      </div>
     
  <!---///////////FORMULARIO DE ENCUENTA POBLACIONAL////////////////7777----
  -----------
  ------------
  ------------>
  
 <!-- Modal -- Codigo  obtenido desde bootstrapp Modalhttps://getbootstrap.com/docs/4.0/components/modal/-->

        <!--  modal Informacion de Moduli -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      Informacion de modulo
      -
      -
      -
      -
    </div>

  </div>
</div> <!--///////fin de modal /////7-//--->

<!-- FIN-->
           
                 

     <!-- MODAL BUSCAR  CODIGO  DE VIVIENDA -->
     <strong>
				<div class="modal fade" id="myModal_buscar_codigo_vivienda" data-keyboard="false" data-backdrop="static">
				</strong>
                 <div class="modal-dialog modal-lg">
                   <div class="modal-content  ">
                   	 <img src="icon/Advertencia.png"  width="200px" align="center">
                       <div class="modal-header">
                       <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                       <h4 class="modal-title">Consultar la información de código de la vivienda, ingresado el número de identificación de la persona que está a cargo de la casa </h4>
                     </div>
                       <div class="modal-body">
                       
                         <div id="contenido_modal_confirm_alumno_matriculado"> 
                         
            
                          <!----------------=========================0---------------------> 	   

     <!----BUSCAR CODIGO VIVIENDA POR DOCUMENTO DE INDENTIDAD --------------------> 	   


            <div class="subir_informacion_general">
           	<div class="container clearfix">					
					<div class="col-sm-4 topmargin-sm">
					
				     <form id=""  class="form_cunsulta" name="form" action="/hogar" method="POST" role="Informacion_General" class="pocicion_formulario">
				     	      {{ csrf_field() }}
      						<div id="consulta_externa">
								<label>Ingresar el número de identificación   de la persona </label><br>
								<input  id="nuip" name="q" class="form-control" 	value=""  placeholder="Digíte el número sin puntos ni comas" title="El nùmero de cèdula debe ser de 2 a 10 dígitos" value=""  style="">
               	<span class="animated fadeIn"></span>

								
							</div>
							
							<br>
							<div class="nobottommargin tright">
								<input type="submit" id="boton" name="enviar" value="Buscar " class="boton tab-linker btn-block" style="">
							</div>
						</form>
                         
                     

						

					</div>
					
					 <br>
                     <br>
                     <br>
 

			
                   
					<div class="col-sm-5 topmargin-sm text-center">
						<h2>Detalle Del codigo </h2>

					</div>
					

					<div id="success" class="col-sm-5 well text-justify">
                            
						
					<div class="table-responsive">
						@if(isset($details))
					 Los Datos ingresados del estudiante : <b> {{ $query }} </b> Es :
					<table class="table table-bordered table-striped">
								<thead>
								<tr>
								<th>DEPARTAMENTO</th>
								<th>MUNICIPIO</th>
								<th>RESGUARDO</th>
							
								
                                  
								</tr></thead>
								<tbody>

									@foreach($details as $persona)
									<tr>
										<<td></td>
										<td></td>-->
										<td>{{$persona-> resguardo }}</td>
										<td> </td>
										
									</tr>
									@endforeach
									
									</tbody>
								</table> 

								@elseif(isset($message))
                                <h3> {{$message}}</h3>
                                 @endif
							</div>			
					       </div>													
				           </div>
			            </div>      
                         </div><!-- FIN DEL contenido_modal_confirm_alumno_matriculado--> 
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> <!----> 
                     </div>
                   </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
               </div><!-- /.modal -->
           <!-- FIN DEL MODAL  BUSCAR CODIGO DEL HOGAR-->






<!-- INICIO DE  CODIGO DE FORMULARIO -->


		       <div class="container">
                    <!--Informacion menu izquierda-->
                    <div class="col-md-3 col-sm-4 col-xs-12 ">    
                                  	<!--			
                            <iframe  frameborder="0" width="100%"  height="245"   allow="fullscreen".
							
                            src="./menu-lateral">
							
							</iframe>   --->           
                   </div>
                        <!-- Fin Informacion menu izquierda-->    
                        <div class="col-md-9 ">
                            <div class="ContenedorFormularioCenso">
                                <div class="titulo_informacion">
								                      
		                       <table >
	                             <tbody>
	                                  <tr>
			                            <td style="width:3px;"></td>
		                               <td  title="Censo vivienda de familia Misak" >
				                       <table class="active">
			                           <tbody>
			                            <tr>
				                           <td ><b href="" >INGRESO  NUEVO PERSONAL</b></td>
			                             </tr>
		                               </tbody>
		                                </table>
		                          </td>
				
				              
                                  
		                       <td style="width:3px;"></td>
		                        <td title="Miembros de la familia   Misak " >
		                          <table class="active">
					              <tbody>
			                      <tr>
				                   <td ><b  href="" >NIVEL ACADEMICO</b></td>
			                      </tr>
		                         </tbody>
		                       </table>
		                      </td>
		
                        
		
		                  	
				
				             <td style="width:3px;"></td>
		                       <td  title="Nivel educativo  que tiene  la persona que vive en la familia" >
		                        <table class="estatic" >
			                       <tbody>
			                        <tr>
				                    <td >
				                     <b  href=""  >OBSERVACIONES</b>
				                     </td>
			                           </tr>
		                            </tbody>
		
		                         </table>
		                        </td>
                              </tr>
                            </tbody>
                              </table>
   
			                           <div  class="color_infor noPrint" style="margin-top: 15px;">  
					                     <span  class="color_infor  noPrint">Usted se encuentra en: &nbsp;&nbsp;Ingreso de trabajador  &gt; <font color="#666666">Observaciones</font></span>        
			                           </div>															
										<div class="well resume-module module-jobs" >
                                       <h2 class="module-title">
                                       Observaciones del empelado  al momento de de hacer el contrato laboral 
                                        </h2>
   				                        <div class="js-box-laboral-experience" id="experiencia-laboral">
                                          <h3 class="h4">--: </h3>
                                          <div class="module-collapsible collapse in" aria-expanded="true">
                                          <div class="module-summary-wrapper laboral-experience">
                                            <p class="text-muted">
                                            -
						                </div>
                                    </div>
                                 </div>
				              </div>
                                 </div><!--FIN titulo_infobasica-->
								   <!-- FORMULARIO-->
	                 <form name="" method="post" action="Personas" id="miForm" >
  
  	                <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:-->
                  {{ csrf_field() }}
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
     
                   <div class="col-md-12 col-sm-12 col-xs-12">

                       <div class="titulo_informacion">
								
                         <!-- para visualisar el codigo del hogar -->
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <h1></h1>
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                   <div class="form-group ">
                                    <div class="clearfix"></div>
                                     <div class="form-inline input-group-sm">
                                        <label ><span class="asterisco">*</span>Codigo Contrato</label>
                                      <input name="hogar_id" type="text"  value="" tabindex="2"  class="form-control btn-warning" style="width:60px"  value="" >
                                     </div>
                               </div>  
                              </div>
                          </div>  
                           <!-- FIN  visualisar el codigo del hogar -->    
                          <br>
                          <br>
                          <br>

                       </div> <!-- fin titulo_informacion-->
                   <!--Inicio de formulario-->
                   <div class="titulo_informacion">
    <h1 ></h1>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-group input-group-sm">
        <label ><span class="asterisco">*</span>_</label>
        <a class="tooltipDemo">
            <i class="icon-question-sign"></i>
            <span>-----
                <br>
                -.</span>
        </a>
        <textarea name="" rows="20" cols="20"  tabindex="48" class="form-control OnlyTxtNum" autocomplete="off" onkeydown="textCounter(this,this.form.LentxtFuncionesR,2000);" onkeyup="textCounter(this,this.form.LentxtFuncionesR,2000);" style="min-height: 250px;"></textarea>
        <div class="well well-sm">
            Caracteres Ingresar                                                      
            <input readonly="" type="text" name="LentxtFuncionesR" size="3" maxlength="4" value="2000">
        </div>

    
  
	
        

               
						<!----				
           <div class="form-group input-group-sm">
             <label  style="width:300px" for="title">Telefono  :</label>
		        <input name="telefono" type="text"    class="form-control" style="" autocomplete="on"  value=""   >
          </div>-->
		  
		 <!--  <div class="form-group input-group-sm">
           
             <label  style="width:300px" for="title">Cargar documento de identidad formato PDF</label>
			 <input type="file" name="docomento_pdf" class="btn-danger">
			 
			 
             
          </div>-->
      </div>
  </div>
</div>
              <br>
              <br>
              <br>
          <input type="submit" class="Agregarpersona" value="Agregar Estudios" id="boton" class="btn btn-primary" >

          <input type="button" onclick="limpiarFormulario()" value="Limpiar formulario">

            
           <div class="titulo_informacion"> </div>
           <div class="titulo_informacion">
               
    
             </div>
	 </form> 
	
  
  <br>
  
  <!--Estilos para botones GUARDAR Y CONTINUAR Y AGREGAR PERSONAS EN GRUPO FAMILIAR-->
  <style>
   .Agregarpersona {
    text-decoration: none;
    padding: 4px;
    font-weight: 600;
    font-size: 10px;
    color: #ffffff;
    background-color: #5cb85c;
    border-radius: 6px;
    border: 2px solid #5cb85c;
    margin-left: 90px;
   }

  .boton_guardarContinuar {
    text-decoration: none;
    padding: 4px;
    font-weight: 600;
    font-size: 10px;
    color: #ffffff;
    background-color: #5cb85c;
    border-radius: 6px;
    border: 2px solid #5cb85c;
    margin-left: 250px;
    margin-left: -150px;
   }    
 </style>

          <div class="pull-right ">
            <button class="boton_guardarContinuar" id="guardar">GUARDAR Y CONTINUAR</button>
         </div>

    <br>
    <br>
    

   	 
                       <!-- ///FORMULARIO////     --
  <form  id="f_nuevo_usuario"  method="post"  action="Ingresar_personas" class="form-horizontal form_entrada" >
  	  <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:--
       {{ csrf_field() }}
       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
       <!----------------------> 
         </div>
        </div>
      </div> 
     </div>
    </div>
   </div> 
  </div>
 </div> 

    <br>
    <br>
		 <br>
     </div>
     </div>
     </div>
	   
	  <!--PIE DE PAGINA --->
    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>SISTEMA DE INFORMACIÓN POBLACIONAL MISAK - SIPEMP</h1>

                     <img src="{{ asset('images/logo.png') }}" alt="">
                     
                </div>
                
              

                <div class="colum2">

                    <h1>Contacto</h1>

                    <div class="row2">
                        <img src="{{ asset('icon/smartphone.png') }}">
                        <label>3217452529</label>
                    </div>
                   
                       <div class="row2">
                        <img src="{{asset('icon/contact.png')}}">
                         <label>CabildoGuambia@gmail.com</label>
                    </div>
                     
                   


                </div>

                <div class="colum3">

                    <h1>Direccion</h1>
                    
                    <div class="row2">
                        <img src="{{ asset('icon/house.png') }}">
                        <label>CARRERA 2 12 25-Silvia Cauca
                        </label>
                    </div>

                   <!-- <div class="row2">
                        <img src="icon/smartphone.png">
                        <label>+1-829-395-2064</label>
                    </div>-->

                   

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        &copy;2020 Todos los Derechos Reservados | <a href="">Cabido de Guambia</a>
                    </div>

                    <div class="informacion1">
                       <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href="">© Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia</a>
                    </div>
                </div>

            </div>
        
    </footer>
	

    <script>
  function limpiarFormulario() {
    document.getElementById("miForm").reset();
  }
</script>



<script type="text/javascript">
  var personas = [];
$(function()
{
  function verTabla()
  {
    var form = {};
    $.map($('form').serializeArray(), function(n, i){
      form[n['name']] = n['value'];
    });
    personas.push(form);
    var html = '';
    $.each(personas,function(index,value){
      personas[index].integrantes=index+1;
      html=html+'<tr>';
      
      html=html+'<td>'+ personas[index].integrantes +'</td>';
      html=html+'<td>'+ value.parentesco+'</td>';  
      html=html+'<td>'+ value.nombres+'</td>';
  
	  
	  
      html=html+'<td><button  class="borrar" click="borrar('+index+')">Actualizar</button></td>';
	   html=html+'<td><button  class="borrar" click="borrar('+index+')">Eliminar</button></td>';
      
	  html=html+'</tr>';
    });
    $('#bodyTable').html(html);
  }
  $('form').submit(function(e)
  {
    e.preventDefault();//Evita que se envie el formulario
    verTabla();
  })
})


function borrar(idx)
{   borrar(); 
   personas.pop();
    personas.splice(idx, 1);
  verTabla();
}

    $('#guardar').click(function(){
      if(personas.length>0)
      {
          $.ajax({
            url:base+'/Ingresar_personas',
            type:'POST',
            data:{personas},
            success:function(response)
            {
         
            Swal.fire(
              'Exito',
              'Se ha guardado con éxito ss',
              'success'
            )
            setTimeout(function(){  location.href=base+"/Personas/"+response.hogar_id; }, 2000);
         
          
        }
			
          });
		  
      }
      else{
        alert('Debe ingresar personas en el Hogar')
      }
    })
</script>

@endsection