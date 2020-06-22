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
                
				
				
				


<div class="col-md-12 col-sm-12 col-xs-12">

<div class="titulo_informacion">
    <h1 >Datos Personales
        <a onclick="return validarCamposVacios();UpdateTextArea();" id="btnGrabarHVSup" title="Guardar" class="btn btn-success btn-sm pull-right" value="Guardar" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ctl00$ctl00$ContenidoPanel$HojaDeVidaPanel$ContenidoHojaDeVida$ucInfoBasica$btnGrabarHVSup&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Guardar</a>
        
        <div class="clearfix"></div>
    </h1>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
       
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Tipo de documento</label>
            <select name=""  class="form-control">
	<option value="0">Seleccione</option>
	<option selected="selected" value="CC">Cédula de Ciudadanía</option>
	<option value="TI">Tarjeta de Identidad</option>
	<option value="CC">Cedula de ciudadania</option>

</select>
        </div>

        


        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Primer nombre</label>
            <input name="" type="text"  class="form-control OnlyTxt" autocomplete="off">
            
        </div>

        <div class="form-group input-group-sm">
            <label for="txtPrimerApellido"><span class="asterisco">*</span>Primer apellido</label>

            <input name="" type="text" value="" maxlength="20"  tabindex="5" class="form-control OnlyTxt" autocomplete="off">
            
        </div>
        <div class="form-group ">
            <label ><span class="asterisco">*</span>Fecha de nacimiento</label>
            <div class="clearfix"></div>
            <div class="form-inline input-group-sm">
                <select name=""  tabindex="7" class="form-control">
	<option value="">Día</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option  value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>

</select>
      <select name=""  tabindex="8" class="form-control" ">
	<option value="">Mes</option>
	<option value="1">Enero</option>
	<option value="2">Febrero</option>
	<option value="3">Marzo</option>
	<option value="4">Abril</option>
	<option value="5">Mayo</option>
	<option value="6">Junio</option>
	<option value="7">Julio</option>
	<option value="8">Agosto</option>
	<option value="9">Septiembre</option>
	<option selected="selected" value="10">Octubre</option>
	<option value="11">Noviembre</option>
	<option value="12">Diciembre</option>

</select>
                <select name="" id="" tabindex="9" class="form-control" >
	<option value="">Año</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option  value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	<option value="1904">1904</option>
	<option value="1903">1903</option>
	<option value="1902">1902</option>
	<option value="1901">1901</option>
	<option value="1900">1900</option>
	<option value="1899">1899</option>

</select>
            </div>
        </div>

        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Sexo</label>
            <select name=""  tabindex="11" class="form-control">
	<option value="">Seleccione</option>
	<option value="Femenino">Femenino</option>
	<option  value="Masculino">Masculino</option>

</select>

        </div>
		
        <div  class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Fecha expedicion CC</label>
           <input name="" type="date"  maxlength="20"  tabindex="2" class="form-control" autocomplete="off">
        </div>
		
		  <div id="ctl00_ctl00_ctl00_ContenidoPanel_HojaDeVidaPanel_ContenidoHojaDeVida_ucInfoBasica_TipoLibreta" class="form-group input-group-sm">
            <label id="lblTipoLibreta" style="display: none;"><span class="asterisco">*</span>Tipo de libreta</label>
            <select name="ctl00$ctl00$ctl00$ContenidoPanel$HojaDeVidaPanel$ContenidoHojaDeVida$ucInfoBasica$ddlTipoLibreta" id="ddlTipoLibreta" tabindex="12" class="form-control" style="display: none;">
	<option selected="selected" value="">Seleccione</option>
	<option value="P">Primera</option>
	<option value="S">Segunda</option>

</select>
        </div>

    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Número de documento</label>
            <input name="" type="text" value="1064436304" maxlength="20"  tabindex="2" class="form-control" autocomplete="off">
            
        </div>


        

        <div class="form-group input-group-sm">
            <label >Segundo nombre</label>
            <input name="" type="text"  tabindex="4" class="form-control OnlyTxt" autocomplete="off">
            
        </div>

        <div class="form-group input-group-sm">
            <label >Segundo apellido</label>
            <input name="" type="text" value="TUNUBALA" maxlength="20"  class="form-control OnlyTxt" autocomplete="off">
            
        </div>

        <div class="form-group input-group-sm">
            <label >Estado civil</label>
            <select name=""  tabindex="10" class="form-control">
	<option selected="selected" value="Seleccione">Seleccione</option>
	<option value="1">Soltero(a)</option>
	<option value="2">Casado(a)</option>
	<option value="3">Separado(a) o Divorciado(a)</option>
	<option value="4">Viudo(a)</option>
	<option value="5">Unión Libre</option>

</select>
        </div>

           <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Lugar de Expedición CC</label>
            <input name="" type="text"  tabindex="14" class="form-control" autocomplete="off">
        </div>
		 <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Carnet de salud</label>
            <input name="" type="text"  tabindex="14" class="form-control" autocomplete="off">
        </div>
		<!--
         <div  class="form-group input-group-sm">
            <label id="lblLibretaMilitar"><span class="asterisco">*</span>Libreta militar</label>
            <select name="" onchange="ShowTipolibretaMilitar();" id="ddlLibretaMilitar" tabindex="13" class="form-control">
	        <option value="">Seleccione</option>
	        <option value="1">Si</option>
	         <option value="0">No</option>
           </select>
        </div>-->

          <div  class="form-group input-group-sm">
            <label id="lblNumeroLibreta" style="display: none;"><span class="asterisco">*</span>Número de libreta</label>
            <input name="" type="text" maxlength="20" id="txtNumeroLibreta" tabindex="14" class="form-control" onkeypress="return AceptaNumero(event);" autocomplete="off" style="display: none;">
            
        </div>
    </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="form-group input-group-sm">
            <label for="ddlPaisNacimiento"><span class="asterisco">*</span>Comunidad Indigena</label>
            <select name="ctl00$ctl00$ctl00$ContenidoPanel$HojaDeVidaPanel$ContenidoHojaDeVida$ucInfoBasica$ddlPaisNacimiento" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ctl00$ctl00$ContenidoPanel$HojaDeVidaPanel$ContenidoHojaDeVida$ucInfoBasica$ddlPaisNacimiento\&#39;,\&#39;\&#39;)&#39;, 0)" id="ddlPaisNacimiento" tabindex="13" class="form-control">
	<option value="">SI</option>
	<option value="">NO</option>
	

</select>
        </div>

      
    </div> <!-- FIN COLUMNA 1-->
	
    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>¿Cual? </label>
            <input name="" type="text"  maxlength="20"  class="form-control" autocomplete="off">
           
        </div>
       
      


    </div>
</div>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-6 col-sm-12 col-xs-12">
        
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12"></div>
</div>



<div class="titulo_informacion">
    <h1 >Datos de Contacto del Empleado</h1>
</div>











<div class="col-md-12 col-sm-12 col-xs-12">






<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Correo electrónico</label>
            <div >
	
                    <div class="input-group-sm">
                   <input name="" type="text" value="" maxlength="20"  class="form-control" autocomplete="off">
            
                    </div>
                
             </div>
        </div>

        <div class="form-group input-group-sm">
            <label for="txtbarrio">Departamento de residencia</label>
             <select name="departamento" id="departamento" class="form-control" style="width:" required="" >
            	<option value="" selected disabled>Selecione Departamento</option>
                  @foreach($departamento as $key => $departamento)
                  <option value="{{$key}}"> {{$departamento}}</option>
                  @endforeach

             </select>
        </div>
                        
       

        <div class="form-group input-group-sm">
            <label ><span class="asterisco"></span>Dirección</label>
            <input name="" type="text" maxlength="250" class="form-control" autocomplete="off">
            
        </div>

    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group  input-group-sm">
            <label for="UpdatePanel12"><span class="asterisco">*</span>Teléfono de contacto</label>
            <div >
	
                    <div class="input-group-sm">
                       <input name="" type="text" value="" maxlength="20" class="form-control" autocomplete="off">
            
                    </div>
                
</div>

        </div>
                        
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Municipio de residencia</label>
          <select name="municipio" id="municipio" class="form-control" style="width:" required="" >
                </select>
        </div>

       
    </div>
</div>

                

<div class="titulo_informacion">
    <h1 >Información de la institución y dirección donde va laborar</h1>
</div>
                
<div class="col-xs-12">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Departamento donde va laboral</label>
            <div >
	
                     <select name="departamento" id="departemento_lugar_trabajo" class="form-control" style="width:" required="" >
            	<option value="" selected disabled>Selecione Departamento</option>
                  @foreach($departemento_lugar_trabajo as $key => $departemento_lugar_trabajo)
                  <option value="{{$key}}"> {{$departemento_lugar_trabajo}}</option>
                  @endforeach

             </select>
                
             </div>
        </div>

        <div class="form-group input-group-sm">
            <label for="txtbarrio">Institucion donde va laboral</label>
            <select name="municipio" id="nombre_institucion" class="form-control" style="width:" required="" >
                </select>
        </div>
                        
       

        <div class="form-group input-group-sm">
            <label ><span class="asterisco"></span>Sede de la institucion donde va laboral</label>
            <select name="municipio" id="sede_institucion" class="form-control" style="width:" required="" >
                </select>
        </div>

    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group  input-group-sm">
            <label for="UpdatePanel12"><span class="asterisco">*</span>Municipio donde va laboral</label>
            <div >
	
                    <div class="input-group-sm">
                        <select name="municipio" id="municipio_lugar_trabajo" class="form-control" style="width:" required="" >
                </select>
                    </div>
                
            </div>

        </div>
                        
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Tipo institucion donde va laboral</label>
            <select name="municipio" id="tipo_institucion" class="form-control" style="width:" required="" >
                </select>
        </div>

       
    </div>
</div>
</div>



                

<div class="titulo_informacion">
    <h1 >Tipo labor que ejerce el empleado</h1>
</div>
                
<div class="col-xs-12">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>tipo trabajo </label>
            <div >
	
                    <div class="input-group-sm">
                   <select name="departamento" id="tipo_trabajo" class="form-control" style="width:" required="" >
            	<option value="" selected disabled>Selecione Departamento</option>
                  @foreach($tipo_trabajo as $key => $tipo_trabajo)
                  <option value="{{$key}}"> {{$tipo_trabajo}}</option>
                  @endforeach

             </select>
            
                    </div>
                
             </div>
        </div>

        <div class="form-group input-group-sm">
            <label for="txtbarrio">Tipo contrato</label>
             <select name="profecion_id" id="servicio_acueducto" class="form-control"   style="width:" required="">
                                                <option value="" selected disabled>Seleccione Profesión Actual</option>
                                                  @foreach($tipo_contrato as $key => $tipo_contrato)
                                                 <option value="{{$key}}"> {{$tipo_contrato}}</option>
                                              @endforeach
                                          </select>

        </div>
		
		<div class="form-group input-group-sm">
            <label for="txtbarrio">Pensione</label>
             <select name="profecion_id" id="servicio_acueducto" class="form-control"   style="width:" required="">
                                                <option value="" selected disabled>Seleccione Pensione </option>
                                                  @foreach($pensiones as $key => $pensiones)
                                                 <option value="{{$key}}"> {{$pensiones}}</option>
                                              @endforeach
                                          </select>

            
        </div>
                        
       
 <!--
        <div class="form-group input-group-sm">
            <label ><span class="asterisco"></span>Salario asignado </label>
            <input name="" type="text" maxlength="250" class="form-control" autocomplete="off">
            
        </div>-->

    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="form-group  input-group-sm">
            <label for="UpdatePanel12"><span class="asterisco">*</span>Categoria labor </label>
            <div >
	
                    <div class="input-group-sm">
                   <select name="" id="categoria_trabajo" class="form-control" style="width:" required="" >
                </select>
                    </div>
                
            </div>

        </div>
                        
        <div class="form-group input-group-sm">
            <label ><span class="asterisco">*</span>Salario Asignado</label>
            <input name="" type="text" maxlength="250" class="form-control" autocomplete="off">
        </div>

       
    </div>
</div>
</div>














<div class="titulo_informacion">
    <h1 >Observaciones del empelado  al momento de de hacer el contrato laboral</h1>
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

    </div>
  </div>
  
  <div class="titulo_informacion"> <h1 ></h1>.</div>
</div>
				
				
				
				
                   <!--FIN de formulario-->
          
			

            

         
            
        
               
           
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
         <input type="button" onclick="limpiarFormulario()" value="Limpiar formulario">

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


<!-- selector  categoria_trabajo -->
<script type="text/javascript">
    $('#tipo_trabajo').change(function(){
    var tipo_trabajoID = $(this).val();    
    if(tipo_trabajoID){
        $.ajax({
           type:"GET",
           url:"{{url('get-categoria_trabajo-list')}}?id_tipo_trabajo="+tipo_trabajoID,
           success:function(res){               
            if(res){
                $("#categoria_trabajo").empty();
                $("#categoria_trabajo").append('<option>Seleccione Categoria</option>');
                $.each(res,function(key,value){
                    $("#categoria_trabajo").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#categoria_trabajo").empty();
            }
           }
        });
    }else{
        $("#categoria_trabajo").empty();
        
    }      
   });
 
</script>

<!-- selecionar direccion y lugar de trabajo -->
<script type="text/javascript">
    $('#departemento_lugar_trabajo').change(function(){
    var lugar_trabajoID = $(this).val();    
    if(lugar_trabajoID){
        $.ajax({
           type:"GET",
           url:"{{url('get-municipio_lugar_trabajo-list')}}?codigo_departamento_trabajo="+lugar_trabajoID,
           success:function(res){               
            if(res){
                $("#municipio_lugar_trabajo").empty();
                $("#municipio_lugar_trabajo").append('<option>Seleccione Categoria</option>');
                $.each(res,function(key,value){
                    $("#municipio_lugar_trabajo").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#municipio_lugar_trabajo").empty();
            }
           }
        });
    }else{
        $("#municipio_lugar_trabajo").empty();
        $("#nombre_institucion").empty();
    }      
   });
 
   $('#municipio_lugar_trabajo').on('change',function(){
    var  municipioID = $(this).val();    
    if( municipioID){
        $.ajax({
           type:"GET",
           url:"{{url('get-nombre-instituciono-list')}}?codigo_municipio_trabajo="+municipioID,
           success:function(res){               
            if(res){
                $("#nombre_institucion").empty();
                $("#nombre_institucion").append('<option>Seleccione Resguardo </option>');
                $.each(res,function(key,value){
                    $("#nombre_institucion").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#nombre_institucion").empty();
            }
           }
        });
    }else{
        $("#nombre_institucion").empty();
        $("#tipo_institucion").empty();
    }
        
   });
   
     $('#nombre_institucion').on('change',function(){
    var  municipioID = $(this).val();    
    if( municipioID){
        $.ajax({
           type:"GET",
           url:"{{url('get-tipo-institucion-list')}}?id_nombre_institucion="+municipioID,
           success:function(res){               
            if(res){
                $("#tipo_institucion").empty();
                $("#tipo_institucion").append('<option>Seleccione Tipo Institucion </option>');
                $.each(res,function(key,value){
                    $("#tipo_institucion").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#tipo_institucion").empty();
            }
           }
        });
    }else{
        $("#tipo_institucion").empty();
        $("#sede_institucion").empty();
    }
        
   });
   
   
     $('#tipo_institucion').on('change',function(){
    var  municipioID = $(this).val();    
    if( municipioID){
        $.ajax({
           type:"GET",
           url:"{{url('get-sede_institucion-list')}}?id_tipo_institucion="+municipioID,
           success:function(res){               
            if(res){
                $("#sede_institucion").empty();
                $("#sede_institucion").append('<option>Seleccione Tipo Institucion </option>');
                $.each(res,function(key,value){
                    $("#sede_institucion").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#sede_institucion").empty();
            }
           }
        });
    }else{
        $("#sede_institucion").empty();
        
    }
        
   });
   
</script>












<script type="text/javascript">
  

    //document.addEventListener('DOMContentLoaded', function () {
    //    document.getElementById('ddlSexo').onchange(showLibretaMilitar());
    //});

    function showLibretaMilitar() {
        //  var strLibretamilitar = v.options[v.selectedIndex].value;
        var e = document.getElementById("ddlSexo");
        if (isNullOrEmpty(e)) {
            return;
        }
        var strLibretamilitar = e.options[e.selectedIndex].value;

        if (strLibretamilitar == "M") {
            $('#lblLibretaMilitar').show();
            $('#ddlLibretaMilitar').show();
        }
        else {
            ddlLibretaMilitar.selectedIndex = 0;
            $('#lblLibretaMilitar').hide();
            $('#ddlLibretaMilitar').hide();
            $('#lblTipoLibreta').hide();
            $('#ddlTipoLibreta').hide();
            $('#lblNumeroLibreta').hide();
            $('#txtNumeroLibreta').hide();
        }
    }

    function ShowTipolibretaMilitar() {
        var e = document.getElementById("ddlLibretaMilitar");
        if (isNullOrEmpty(e)) {
            return;
        }
        var strTieneLibreta = e.options[e.selectedIndex].value;
        if (strTieneLibreta == '1') {
            $('#lblTipoLibreta').show();
            $('#ddlTipoLibreta').show();
            $('#lblNumeroLibreta').show();
            $('#txtNumeroLibreta').show();
        }
        else {
            $('#lblTipoLibreta').hide();
            $('#ddlTipoLibreta').hide();
            $('#lblNumeroLibreta').hide();
            $('#txtNumeroLibreta').hide();
        }
    }
	
</script>

	

@endsection