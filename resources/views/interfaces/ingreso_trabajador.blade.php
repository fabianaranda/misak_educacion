@extends('layouts.menu')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <script src="/js/sweetalert2@9.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/js/sweetalert2@9.js"></script>

 <!--\\\\\\\ estilos css \\\\\\-->
 <link href="css/admin.css" rel="stylesheet" type="text/css" />
 
 <link rel="stylesheet" href="css/estilos_pie_pagina.css">

      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Personal</h1>
          <h2 class="">Ingreso Nuevo Personal</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Personal</a></li>
            <li class="active">Ingreso Nuevo Personal</li>
          </ol>
        </div>
      </div>
      <br>
      <br>
      <br>
      <!--informacion donde se encuentra-->
         <div  class="color_informacion_modulo " style="margin-top: 15px;">  
           <span  class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Programa de Educacion -Cabiildo de Guambia &gt; <font color="#060505">Ingreso  nuevo personal  </font> &gt; <font color="#060505"> </font> </span>        
         </div>

     <!-- fin informacion donde se encuentra -->
  <!---///////////FORMULARIO ///////////////7777----
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
                            <!-- formulario menu lateral . se llama por  route --->		
                            <iframe  frameborder="0" width="100%"  height="245"   allow="fullscreen".
							
                            src="./menu-lateral">
							
							</iframe>  
                            <!--  fin  de formulario menu laterial--->            
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
				                       <table class="estatic">
			                           <tbody>
			                            <tr>
				                           <td ><b href="" >INGRESO  NUEVO PERSONAL</b></td>
			                             </tr>
		                               </tbody>
		                                </table>
		                          </td>
				              <!--
				                <td style="width:3px;"></td>
		                          <td  title="Censo del Hogar Misak  " >
		                         <table class="active" >
			                     <tbody>
			                    <tr>
				                 <td >
				                   <b  href=""  >--</b>
				                 </td>
			                    </tr>
		                       </tbody>
		
		                       </table>
		                       </td>
			  
		                     --->
				         
                              </tr>
                            </tbody>
                              </table>
                              <!-- FIN TABLE-->
			                          		<!-- Informacion dentro del formulario -->													
										<div class="well resume-module module-jobs" >
                                       <h2 class="module-title">
                                          Agregar  nuevo personal  
                                        </h2>
   				                        <div class="js-box-laboral-experience" id="experiencia-laboral">
                                          <h3 class="h4">Ingrese a la persona que  realicen nuevo contrato laboral  con la organizacion .  </h3>
                                          <div class="module-collapsible collapse in" aria-expanded="true">
                                          <div class="module-summary-wrapper laboral-experience">
                                            <p class="text-muted">
                                            -
						                </div>
                                    </div>
                                 </div>
				              </div>
                                 </div><!--FIN titulo_infobasica dentro del formulario-->
								   <!-- FORMULARIO-->
	                 <form name="" id="persona" method="post" action="Vivienda-Hogar/Guardado" id="miForm" >
  
  	                <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:-->
                  {{ csrf_field() }}
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
     
                   <div class="col-md-12 col-sm-12 col-xs-12">
	
                         <!-- comienzo del formulario  -->
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <p>Información del personal </p>
                              </div>
                                
                           <!-- FIN  visualisar  informacion del personal -->    
                          <br>
                          <br>
                        

                       </div> <!-- fin titulo_informacion-->
                   <!--Inicio de formulario-->
             <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="col-md-6 col-sm-12 col-xs-12">

                  <div class="form-group input-group-sm">
                  <label ><span class="asterisco">*</span>Nombres</label>
                   <input name="nombre" type="text"  onkeyup="this.value = this.value.toUpperCase();"  class="form-control" style="" autocomplete="of"  value=""  required=""  >
              </div>
		        
			      	  <div class="form-group input-group-sm">
                    <label ><span class="asterisco">*</span>Apellidos</label>
                   <input name="apellidos" type="text"  onkeyup="this.value = this.value.toUpperCase();"  class="form-control" style="" autocomplete="of"  value=""  required=""  >
               </div>

          <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Tipo Identificación</label>
            <select name="tipo_identificacion" type="text"  maxlength="20" id="txtPrimerNombre" autocomplete="of" class="form-control " required="" >
              <option value="">Seleccione</option>
              <option value="TARJETA IDENTIDAD">Tarjeta de Identidad</option>
              <option value="CEDULA CIUDADANIA">Cédula de Ciudadania</option>
              <option value="PASAPORTE">Pasaporte</option>
            </select>
         </div>

	               <div class="form-group input-group-sm">
                    <label ><span class="asterisco">*</span>Número de Indentificación</label>
                   <input name="documento_identidad" type="number" min="30000000" min="9999999999" class="form-control" style="" autocomplete="of"  value="" required=""  >
               </div>
			   
			      
		 
         <div class="form-group input-group-sm">
           <label f><span class="asterisco">*</span>Genero</label>
           <select name="sexo" type="text"  maxlength="20"  autocomplete="of" class="form-control "  required="">
           <option value="">Selec</option>
           <option value="FEMENINO">Femenino</option>
	        	<option value="MASCULINO">Masculino</option>
          </select>
         </div>
       

      
            
           
         
        
			    <div class="form-group ">
           <label ><span class="asterisco">*</span>Fecha de nacimiento</label>
          
            <div class="form-inline input-group-sm">
            
            <input name="fecha_nacimiento" type="date"    class="form-control" style=""    required="" >
         
         </div>
      
    
       </div>
	   
	     			   
    </div>
                      <!-- fin comlumna 1 -->
	
                     <!--Columna 2 -->
         <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="form-group input-group-sm">
         

        
  <!--
           <div class="form-group input-group-sm">
           <label f><span class="asterisco">*</span>Sexo</label>
           <select name="sexo" type="text"  maxlength="20"  autocomplete="of" class="form-control " required="">
           <option value="">Selec</option>
           <option value="F">Femenino</option>
	        	<option value="M">Masculino</option>
          </select>
         </div>
		 -->
		  <div class="form-group input-group-sm">
           <label ><span class="asterisco">*</span>Estado civil</label>
           <select name="estado_civil" type="text"  maxlength="20" autocomplete="of" class="form-control " required="">
           <option  value="">Seleccione</option>
		        <option value="SOLTERO">Soltero(a)</option>
		       <option value="CASADO">Casado(a)</option>
		      <option value="SEPADADO">Separado(a) o Divorciado(a)</option>
		      <option value="VIUDO">Viudo(a)</option>
		     <option value="UNION LIBRE">Unión Libre</option>
          </select>
         </div>    
	 </div>
    
   <div class="form-group input-group-sm">
                    <label ><span class="asterisco">*</span>Numero Celular</label>
                   <input name="telefono" type="text" v class="form-control" style="" autocomplete="of"  value="" required=""  >
               </div>
       
   <div class="form-group input-group-sm">
     <label for="title">* Programa </label>
                <select name="codigo_programa" id="servicio_internet" class="form-control"   style="width:200p"  required="">
                <option value="" selected disabled>Programa</option>
                   @foreach($programa as $key => $programa)
                  <option value="{{$key}}"> {{$programa}}</option>
                  @endforeach
            </select>
       </div>
                  

                <div class="form-group input-group-sm">
                    <label ><span class="asterisco">*</span>Ocupacion</label>
                   <input name="ocupacion" type="text" v class="form-control" style="" autocomplete="of"  value=""  required="" >
               </div>

              
        </div>
             <!-- Colunmas  fecha  de contrato y fin de contrato -->
          <div class="col-md-6 col-sm-12 col-xs-12">
                 <div class="col-md-6 col-sm-12 col-xs-12">
                 <label ><span class="asterisco">*</span>Inicio Contrato</label>
                 <input name="fecha_contratacion" type="date"    class="form-control" style="" autocomplete="of"  value=""  required="" >
                 </div> 

                 <div class="col-md-6 col-sm-12 col-xs-12">
                 <label ><span class="asterisco">*</span>Fin Contrato</label>
                 <input name="fin_contrato" type="date"    class="form-control" style="" autocomplete="of"  value=""  required="" >
                 </div>
                 <br>
               
        </div>
         <!--  FIN Colunmas  fecha  de contrato y fin de contrato -->
         
           <br>
           <br>
                 <!--Cargar hoja de vida -->
                  <label   <span class="asterisco">*</span>Cargar Hoja de Vida formato PDF</label>
                <input type="file" name="docomento_pdf" class="btn-danger" >
                <!--Fin input cargar hoja de vida-->
  </div>
</div>
              <br>
              <br>
              <br>
              <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="titulo_informacion">
           <h1>*Ingresar la direccion del  Empleado </h1>
           </div>
           <div class="col-md-6">
        <label for="title">Seleccione Departamento:</label>
        <select name="departamento" id="departamento" class="form-control" style="width:" required="" >
            	<option value="" selected disabled>Selecione Departamento</option>
                  @foreach($departamento as $key => $departamento)
                  <option value="{{$key}}"> {{$departamento}}</option>
                  @endforeach

             </select>
            
             <label for="title">Seleccione Municipio:</label>
                <select name="codigo_municipio" id="municipio" class="form-control" style="width:" required="" >
                </select>

                <div class="form-group input-group-sm">
                    <label ><span class="asterisco">*</span>Direccion </label>
                   <input name="direccion" type="text" v class="form-control" style="" autocomplete="of"  value=""  required="" >
             </div>
             <!--
              <label for="title">Seleccione Resguardo:</label>
                <select name="resguardo" id="resguardo" class="form-control" style="width:" required="" >
                </select>
-->
             </div>


           <div class="col-md-6">
<!--
             <label for="title">Seleccione zona:</label>
                <select name="zona" id="zona" class="form-control" style="width:" required="" >
                </select>

             <label for="title">Seleccione vereda:</label>
                <select name="vereda" id="vereda" class="form-control" style="width:"  required="">
                </select>

             <label for="title">Seleccione sector :</label>
                <select name="codigo_sector" id="sector" class="form-control" style="width:" required="">
                </select>
                -->
           </div>
                 
         </div>

          <input type="button" onclick="limpiarFormulario()" value="Limpiar formulario">

            
           <div class="titulo_informacion"> </div>
          
           <div class="titulo_informacion">
               
           
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
 <!-- Para guardar informacion mediante un mdoal -->
<script type="text/javascript">
$('#persona').submit(function(e)
{
      e.preventDefault();//cancelar el envio
      var url=$("#persona").attr('action');
      var type=$("#persona").attr('method');
      $.ajax({
        type:type,
        url:base+'/'+url,
        data:$('#persona').serialize(),
        dataType:'json',
        success:function(response)
        {
          if(response.validate)
          {
            Swal.fire(
              'Exito',
              'Se ha guardado con éxito  al empleado',
              'success'
            )
            setTimeout(function(){  location.href=base+"/Informacion-trabajador/"+response.id; }, 2000);
          
		  }
          else{
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Se generó un error al guardar!',
            })
          }
        }
      })
    })
</script> 


 
<!-- selector de direccion  del trabjador -->
<script type="text/javascript">
    $('#departamento').change(function(){
    var departamentoID = $(this).val();    
    if(departamentoID){
        $.ajax({
           type:"GET",
           url:"{{url('get-municipio-list')}}?codigo_departamento="+departamentoID,
           success:function(res){               
            if(res){
                $("#municipio").empty();
                $("#municipio").append('<option>Seleccione Municipio</option>');
                $.each(res,function(key,value){
                    $("#municipio").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#municipio").empty();
            }
           }
        });
    }else{
        $("#municipio").empty();
        
    }      
   });
 
</script>
	

@endsection