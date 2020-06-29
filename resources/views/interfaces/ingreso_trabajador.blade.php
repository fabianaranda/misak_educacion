@extends('layouts.menu')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="/js/sweetalert2@9.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="/js/sweetalert2@9.js"></script>

<!--\\\\\\\ estilos css \\\\\\-->
<link href="css/admin.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/estilos_pie_pagina.css">

<link type="text/css" rel="stylesheet" href="./cs/pqrs.css">

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
<div class="color_informacion_modulo " style="margin-top: 15px;">
    <span class="color_infor  ">Usted se encuentra en: &nbsp;&nbsp;<font color="#060505"> Programa de Educacion
            -Cabiildo de Guambia &gt; <font color="#060505">Ingreso nuevo personal </font> &gt; <font color="#060505">
            </font> </span>
</div>

<!-- fin informacion donde se encuentra -->
<!---///////////FORMULARIO ///////////////7777----
  -----------
  ------------
  ------------>

<!-- Modal -- Codigo  obtenido desde bootstrapp Modalhttps://getbootstrap.com/docs/4.0/components/modal/-->

<!--  modal Informacion de Moduli -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            Informacion de modulo
            -
            -
            -
            -
        </div>

    </div>
</div>
<!--///////fin de modal /////7-//--->








<!-- INICIO DE  CODIGO DE FORMULARIO -->


<div class="container">
    <!--Informacion menu izquierda-->
    <div class="col-md-3 col-sm-4 col-xs-12 ">
        <!-- formulario menu lateral . se llama por  route --->
        <iframe frameborder="0" width="100%" height="245" allow="fullscreen" . src="./menu-lateral">

        </iframe>
        <!--  fin  de formulario menu laterial--->
    </div>
    <!-- Fin Informacion menu izquierda-->

    <div class="col-md-9 ">
        <div class="ContenedorFormularioCenso">
            <div class="titulo_informacion">

                <table>
                    <tbody>
                        <tr>
                            <td style="width:3px;"></td>
                            <td title="Censo vivienda de familia Misak">
                                <table class="estatic">
                                    <tbody>
                                        <tr>
                                            <td><b href="">INGRESO NUEVO PERSONAL</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            
				                <td style="width:3px;"></td>
		                          <td  title="Censo del Hogar Misak  " >
		                         <table class="active" >
			                     <tbody>
			                    <tr>
				                 <td >
				                   <b  href=""  >NIVEL ACADEMICO</b>
				                 </td>
			                    </tr>
		                       </tbody>
		
		                       </table>
		                       </td>
			  
		                     

                        </tr>
                    </tbody>
                </table>
                <div class="titulo_informacion"></div>
                <!-- FIN TABLE-->
                <!-- Informacion dentro del formulario --
                <div class="well resume-module module-jobs">
                    <h2 class="module-title">
                        Agregar nuevo personal
                    </h2>
                    <div class="js-box-laboral-experience" id="experiencia-laboral">
                        <h3 class="h4">Ingrese a la persona que realicen nuevo contrato laboral con la organizacion .
                        </h3>
                        <div class="module-collapsible collapse in" aria-expanded="true">
                            <div class="module-summary-wrapper laboral-experience">
                                <p class="text-muted">
                                    -
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN titulo_infobasica dentro del formulario-->

                <!-- FORMULARIO-->




                <div class="container">

                    <!--
            <ol class="breadcrumb">
                <li>
                    <a href="">Inicio</a>
                </li>                        
                <li>
                    <a href="">Contacto</a>
                </li>
                <li class="active">Radicar Solicitudes</li>
            </ol>-->
                    <!--<div class="jumbotron">-->
                    <div class="row titulo">
                        <div class="col-md-3">
                            <img class="img-responsive imagenTitulo" src="{{ asset('images/logo.png') }}"
                                alt="Logo Entidad">
                        </div>
                        <div class="col-md-9 text-center textoTitulo ">
                            Formulario para Ingresar Empleado
                        </div>
                    </div>
                    <div class="row informacion1">
                        <div class="col-md-12 text-center">
                            Recuerde que los campos con un asterisco (*) son obligatorios.
                        </div>
                    </div>
                    <!--</div>-->
                     <form name="" id="persona" method="post" action="Vivienda-Hogar/Guardado" id="miForm" >
                          <!--validar la solicitud. Puede usar el ayudante csrf_field para generar el campo de token:-->
                  {{ csrf_field() }}
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
                        <div class="row etiqueta1">

                        </div>
                        <div class="row separador">
                            <div class="col-md-12 form-group text-center">
                                Información General (*)
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Nombre.(*)</div>

                                <input type="text" name="nombre" maxlength="50" id="txtName"
                                    placeholder="Ingrese su Nombre" class="form-control" required="">

                            </div>
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Primer Apellido.(*)</div>

                                <input type="text" name="primer_apellido" id="txtApe1" maxlength="25"
                                    placeholder="Ingrese su Primer Apellido" class="form-control" required="">
                            </div>
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Segundo Apellido.</div>

                                <input type="text" name="segundo_apellido" id="txtApe2" maxlength="25"
                                    placeholder="Ingrese su Segundo Apellido" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2">Tipo Identificación.(*)</div>
                                <div>
                                    <select name="tipo_identificacion" id="slc_tipId" class="form-control text-center">
                                        <option value="">&lt;&lt; Seleccione &gt;&gt;</option>
                                        <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                        <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
                                        <option value="Pasaporte">Pasaporte</option>



                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2">Numero Identificación.(*)</div>
                                <input type="number" name="documento_identidad" id="txtNid" maxlength="15"
                                    placeholder="Ingrese su Numero de identificación" class="form-control"
                                    onchange="verificaExistente(this.value)" min="0" required="">
                            </div>
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2">Lugar de Expedicion.(*)</div>
                                <input type="text" name="ugar_expedicion" id="txtCorreo" maxlength="50"
                                    placeholder="Ingrese el Lugar de Expedicion" class="form-control"
                                    onchange="validarEmail()" autocomplete="on" required="">
                                <span id="spmMail" style="color: #FF0000; display:none">No es un correo electrónico
                                    válido, por favor verifiquelo</span>
                            </div>




                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Genero.(*)</div>

                                <select name="sexo" id="slc_tipId" class="form-control text-center">
                                    <option value="">&lt;&lt; Seleccione &gt;&gt;</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>




                                </select>

                            </div>
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Fecha de nacimiento.(*)</div>

                                <input type="date" name="fecha_nacimiento" id="txtApe1" maxlength="25"
                                    placeholder="Ingrese su Fecha de nacimiento" class="form-control" required="">
                            </div>
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Carnet de salud.(*)</div>

                                <input type="text" name="carnet_salud" id="txtApe2" maxlength="25"
                                    placeholder="Ingrese su Carnet de salud" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Comunidad Indigena.(*)</div>

                                <select name="comunidad_indigena" id="slc_tipId" class="form-control text-center">
                                    <option value="">&lt;&lt; Seleccione &gt;&gt;</option>
                                    <option value="0">SI</option>
                                    <option value="1">NO</option>
                                </select>

                            </div>
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">¿Cual?</div>
                                <input type="text" name="comunidad_indigena_cual" id="txtApe1" maxlength="25"
                                    placeholder="Ingrese al Comunidad al que pertenece" class="form-control"
                                    required="">
                            </div>
                            <!-- <div class="col-md-4 form-group input-group-sm">                                     
                        <div class="etiqueta2 usuario">Carnet de salud.(*)</div>
                        
                        <input type="text" name="txtApe2" id="txtApe2" maxlength="25" placeholder="Ingrese su Carnet de salud" class="form-control">
                    </div>-->
                        </div>

                        <div class="row separador">
                            <div class="col-md-12 form-group text-center">
                                Dirección del Empleado.(*)
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group input-group-sm">
                                <div class="etiqueta2">-</div>
                                <input type="text" name="txtDir" id="txtDir" maxlength="100"
                                    placeholder="-"
                                    class="form-control" readonly="readonly" autocomplete="on" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Departamento</div>
                                <select name="departamento" id="departamento" class="form-control" style="width:"
                                    required="">
                                    <option value="" selected disabled>Selecione Departamento</option>
                                    @foreach($departamento as $key => $departamento)
                                    <option value="{{$key}}"> {{$departamento}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Municipio</div>
                                <select name="municipio" id="municipio" class="form-control" style="width:" required="">
                                </select>
                            </div>
                            <div class="col-md-6 form-group input-group-sm">
                                <div class="etiqueta2">Barrio / Vereda.(*)</div>
                                <input type="text" name="direccion" id="txtBarrio" onchange="Bus();" maxlength="50"
                                    placeholder="Ingrese su Direccion" onkeypress="return validar(event)"
                                    class="form-control" autocomplete="on" required="">
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6 form-group input-group-sm">
                                <div class="etiqueta2">Correo electrónico. (*)</div>
                                   <input type="email" name="correo" id="txtCorreo" maxlength="50"
                                    placeholder="Ingrese el Lugar de Expedicion" class="form-control"
                                    onchange="validarEmail()" autocomplete="on" required="">
                                <span id="spmMail" style="color: #FF0000; display:none">No es un correo electrónico
                                    válido, por favor verifiquelo</span>
                            </div>
                            <div class="col-md-6 form-group input-group-sm">
                                <div class="etiqueta2">Teléfono de contacto(*)</div>
                                <input type="text" name="telefono" id="txtBarrio" onchange="Bus();" maxlength="50"
                                    placeholder="Ingrese el Teléfono de contacto" onkeypress="return validar(event)"
                                    class="form-control" autocomplete="on" required="">
                            </div>
                        </div>

                        <!--
                <div class="row">
                    <div class="col-md-4 form-group input-group-sm">                        
                        <div class="etiqueta2">Usuario Fomag.</div>                        
                        <div class="col-sm-offset-6 form-group input-group-lg">
                            <input class="checkbox" type="checkbox" name="chkUFomag" id="chkUFomag" value="off" onclick="activa();">                           
                        </div>
                        <span name="spm_usFomag" id="spm_usFomag" style="">                                
                            <select name="slc_usFomag" id="slc_usFomag" class="form-control text-center">
<option value="">&lt;&lt; Seleccione &gt;&gt;</option>
<option value="1">Beneficiario</option>
<option value="2">Titular</option>
<option value="3">Apoderado</option>
</select>

                        </span>                            
                    </div>
                    <div class="col-md-4 form-group input-group-sm">
                        <div class="etiqueta2">Teléfono Fijo.(*)</div>
                        <input type="text" name="txtTelF" id="txtTelF" maxlength="7" placeholder="Número de Teléfono" class="form-control" onkeypress="return soloNumeros(event)" required="">
                    </div>
                    <div class="col-md-4 form-group input-group-sm">
                        <div class="etiqueta2">Teléfono Celular.(*)</div>
                        <input type="text" name="txtTelM" id="txtTelM" maxlength="10" placeholder="Número de Celular" class="form-control" onkeypress="return soloNumeros(event)" required="">
                    </div>
                </div>-->
                        <!--Informacion del porgrama donde va trabajar-->
                        <div class="row separador">
                            <div class="col-md-12 form-group text-center">
                                Programa donde va trabajar
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group input-group-sm">
                                <div class="etiqueta2">- </div>
                                <input type="text" name="txtDir" id="txtDir" maxlength="100" placeholder="-"
                                    class="form-control" readonly="readonly" autocomplete="on" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">tipo trabajo</div>
                                <select name="departamento" id="tipo_trabajo" class="form-control" style="width:"
                                    required="">
                                    <option value="" selected disabled>Selecione Programa</option>
                                    @foreach($tipo_trabajo as $key => $tipo_trabajo)
                                    <option value="{{$key}}"> {{$tipo_trabajo}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">*Categoria labor</div>
                                <select name="id_categoria_trabajo" id="categoria_trabajo" class="form-control"
                                    style="width:" required="">
                                </select>
                            </div>
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Tipo contrato</div>
                                <select name="profecion_id" id="id_tipo_contrato" class="form-control" style="width:"
                                    required="">
                                    <option value="" selected disabled>Seleccione Profesión Actual</option>
                                    @foreach($tipo_contrato as $key => $tipo_contrato)
                                    <option value="{{$key}}"> {{$tipo_contrato}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Pension</div>
                                <select name="profecion_id" id="servicio_acueducto" class="form-control" style="width:"
                                    required="">
                                    <option value="" selected disabled>Seleccione Pensione </option>
                                    @foreach($pensiones as $key => $pensiones)
                                    <option value="{{$key}}"> {{$pensiones}}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Salario Asignado.(*)</div>
                                <div class="etiqueta2 empresa" style="display: none">Nombre de la Empresa.(*)</div>
                                <input type="text" name="salario" id="txtName" placeholder="Ingrese el Salario Asignado"
                                    class="form-control" required="">

                            </div>
							   <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">FECHA DE CONTRATO.(*)</div>
                                <div class="etiqueta2 empresa" style="display: none">Nombre de la Empresa.(*)</div>
                                <input type="date" name="fecha_contratacion" id="txtName" placeholder="Ingrese el Salario Asignado"
                                    class="form-control" required="">

                            </div>
							   <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">FECHA TERMINACIÓN CONTRATO.(*)</div>
                                <div class="etiqueta2 empresa" style="display: none">Nombre de la Empresa.(*)</div>
                                <input type="date" name="fin_contrato" id="txtName" placeholder="Ingrese el Salario Asignado"
                                    class="form-control" required="">

                            </div>
                            <!--
                    <div class="col-md-4 form-group input-group-sm">                        
                        <div class="etiqueta2 usuario">Primer Apellido.(*)</div>
                        <div class="etiqueta2 empresa" style="display: none">Sigla de la Empresa.(*)</div>
                        <input type="text" name="txtApe1" id="txtApe1" placeholder="Ingrese su Primer Apellido" class="form-control" required="">                                
                    </div>
                    <div class="col-md-4 form-group input-group-sm">                                     
                        <div class="etiqueta2 usuario">Segundo Apellido.</div>
                        <div class="etiqueta2 empresa" style="display: none">Representante Legal</div>
                        <input type="text" name="txtApe2" id="txtApe2" placeholder="Ingrese su Segundo Apellido" class="form-control">
                    </div>-->
                        </div>
                        <!--
				  <div class="row">
                    <div class="col-md-4 form-group input-group-sm">
                        <div class="etiqueta2">Tipo Identificación.(*)</div>                            
                        <div><select name="slc_tipId" id="slc_tipId" class="form-control text-center">
<option value="">&lt;&lt; Seleccione &gt;&gt;</option>
<option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
<option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
<option value="Nit">Nit</option>
<option value="Pasaporte">Pasaporte</option>
<option value="Registro Civíl">Registro Civíl</option>
<option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
</select>
</div> 
                    </div>
                    <div class="col-md-4 form-group input-group-sm">
                        <div class="etiqueta2">Numero Identificación.(*)</div>
                        <input type="number" name="txtNid" id="txtNid" maxlength="15" placeholder="Ingrese su Numero de identificación" class="form-control" onchange="verificaExistente(this.value)" min="0" required=""> 
                    </div>
                    <div class="col-md-4 form-group input-group-sm">
                        <div class="etiqueta2">Correo Electrónico.(*)</div>
                        <input type="email" name="txtCorreo" id="txtCorreo" maxlength="50" placeholder="Ingrese su Correo Electrónico" class="form-control" onchange="validarEmail()" autocomplete="on" required="">
                        <span id="spmMail" style="color: #FF0000; display:none">No es un correo electrónico válido, por favor verifiquelo</span>
                    </div>
                </div>--->

                        <div class="row separador">
                            <div class="col-md-12 form-group text-center">
                                Información de la institución y dirección donde va laborar
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group input-group-sm">
                                <div class="etiqueta2">- </div>
                                <input type="text" name="txtDir" id="txtDir" maxlength="100" placeholder="-"
                                    class="form-control" readonly="readonly" autocomplete="on" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Departamento donde va laboral</div>
                                <select name="departamento" id="departemento_lugar_trabajo" class="form-control"
                                    style="width:" required="">
                                    <option value="" selected disabled>Selecione Departamento</option>
                                    @foreach($departemento_lugar_trabajo as $key => $departemento_lugar_trabajo)
                                    <option value="{{$key}}"> {{$departemento_lugar_trabajo}}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">*Municipio donde va laboral</div>
                                <select name="municipio" id="municipio_lugar_trabajo" class="form-control" style="width:" required="" >
                              </select>
                            </div>
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Institucion donde va laboral</div>
                                <select name="municipio" id="nombre_institucion" class="form-control" style="width:" required="" >
                                </select>
                            </div>
                            <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Tipo institucion donde va laboral</div>
                                <select name="municipio" id="tipo_institucion" class="form-control" style="width:" required="" >
                               </select>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group input-group-sm">
                                <div class="etiqueta2 usuario">Sede de la institucion donde va laboral.(*)</div>
                                <div class="etiqueta2 empresa" style="display: none">Nombre de la Empresa.(*)</div>
                                
                                <select name="id_sede_institucion" id="sede_institucion" class="form-control" style="width:" required="" >
                                </select>
                            </div>
                            <!--
                    <div class="col-md-4 form-group input-group-sm">                        
                        <div class="etiqueta2 usuario">Primer Apellido.(*)</div>
                        <div class="etiqueta2 empresa" style="display: none">Sigla de la Empresa.(*)</div>
                        <input type="text" name="txtApe1" id="txtApe1" placeholder="Ingrese su Primer Apellido" class="form-control" required="">                                
                    </div>
                    <div class="col-md-4 form-group input-group-sm">                                     
                        <div class="etiqueta2 usuario">Segundo Apellido.</div>
                        <div class="etiqueta2 empresa" style="display: none">Representante Legal</div>
                        <input type="text" name="txtApe2" id="txtApe2" placeholder="Ingrese su Segundo Apellido" class="form-control">
                    </div>-->
                        </div>

                        <div class="row separador">
                            <div class="col-md-12 form-group text-center align-text-botton">
                                Anexos. Ingreso hoja de vida
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group input-group-sm">
                                <div class="etiqueta2">- </div>
                                <input type="text" name="txtDir" id="txtDir" maxlength="100" placeholder="-"
                                    class="form-control" readonly="readonly" autocomplete="on" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel-default col-md-6">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <strong>Información Importante: </strong>
                                    </h4>
                                </div>
                                <ul class="list-group">




                                    <li class="list-group-item">
                                        <div class="row toggle" id="dropdown-detail-11" data-toggle="detail-11">
                                            <div class="col-md-5">
                                                <strong>Solicitud de información pública </strong>
                                            </div>
                                            <div class="col-md-1 pull-right">
                                                <i class="glyphicon glyphicon-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div id="detail-11" style="display: none;">
                                            <div class="container">
                                                <div class="fluid-row">
                                                    <div class="col-md-5 text-justify">
                                                        Facultad que tienen las personas de solicitar y obtener acceso a
                                                        la información sobre
                                                        las actualizaciones derivadas del cumplimiento de las funciones
                                                        atribuidas a la entidad
                                                        y sus distintas dependencias.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row toggle" id="dropdown-detail-11" data-toggle="detail-11">
                                            <div class="col-md-5">
                                                <strong>Solicitud de información pública </strong>
                                            </div>
                                            <div class="col-md-1 pull-right">
                                                <i class="glyphicon glyphicon-chevron-down"></i>
                                            </div>
                                        </div>
                                        <div id="detail-11" style="display: none;">
                                            <div class="container">
                                                <div class="fluid-row">
                                                    <div class="col-md-5 text-justify">
                                                        Facultad que tienen las personas de solicitar y obtener acceso a
                                                        la información sobre
                                                        las actualizaciones derivadas del cumplimiento de las funciones
                                                        atribuidas a la entidad
                                                        y sus distintas dependencias.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--        
                    <div class="col-md-6 form-group input-group-sm">
                        <div class="etiqueta2">Tipo de PQRS.(*)</div>                        
                        <div><select name="slc_tipPQR" id="slc_tipPQR" class="form-control text-center">
<option value="">&lt;&lt; Seleccione &gt;&gt;</option>
<option value="3">CONSULTA</option>
<option value="5">FELICITACION</option>
<option value="1">PETICION</option>
<option value="2">QUEJA</option>
<option value="7">RECLAMO</option>
<option value="9">SOLICITUD INFORMACION PUBLICA</option>
<option value="6">SUGERENCIA</option>
</select>
</div>
                    </div>-->
                            <!--
                    <div class="col-md-6 form-group">
                        <div class="etiqueta2 ">Descripción de Caso.(*)</div>
                        <textarea class="form-control" rows="3" name="txtObservacion" id="txtObservacion" placeholder="Digite el texto que resume su solicitud." onkeydown="valida_longitud(this.name)" onkeyup="valida_longitud(this.name)" onblur="valida_longitud(this.name)" required=""></textarea>
                    </div>-->
                            <div class="col-md-6 form-group input-group-sm">
                                <div class="etiqueta2">Anexar la hoja de vida , recomendamos formato PDF . Tamaño
                                    máximo de 5 Megabyte cada uno.</div>
                                <br>
                                <input class="form-control-file" type="file" name="filePqr2" id="filePqr2"
                                    accept=".doc,.xls,.ppt,.tif,.jpg,.gif,.pdf,.txt,.zip,.rtf,.dia,.zargo,.csv,.odt,.docx,.bmp,.avi,.mpg,.tar,.xlsx,.pptx,.ods,.odp,.pub,.m1v,.mp4,.mp3,.xlsm,.jpeg,.JPEG,.PDF,.png,.7z"
                                    size="5120">
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group input-group-sm">
                                <div class="etiqueta2">- </div>
                                <input type="text" name="txtDir" id="txtDir" maxlength="100" placeholder="-"
                                    class="form-control" readonly="readonly" autocomplete="on" required="">
                            </div>
                        </div>


                        <br>
                        <!-- <div class="row">
                    <div class="col-md-12 text-center form-group input-group-sm">
                        <input type="checkbox" id="chkAutoriza" name="chkAutoriza" onclick="check(this)">&nbsp;Con el diligenciamiento de este formato autorizo expresamente el uso de mis datos personales según Ley 1581 de 2012
                    </div>
                </div>         
                <div class="row">
                    <div class="col-md-12 text-center form-group input-group-sm">
                        <p style="width:70%;text-align:rigth;"><a href="http://www.fiduprevisora.com.co/documents/autorizacion-de-tratamiento-de-datos-personales.pdf" target="_blank" id="lkAutoriza" name="lkAutoriza">Ver autorización de tratamiento de datos personales</a></p>
                    </div>
                </div>  -->
                        <br>
                        <div class="row">
                            <div class="col-md-12 text-center form-group input-group-sm">
                                <input class="btn btn-warning btn-md" type="button" name="btnPreview"
                                    value="Previsualizar" onclick="ver_pdf();">
                                &nbsp;&nbsp;
                                <input class="btn btn-warning btn-md" type="submit" id="btnSubmit" name="btnSubmit"
                                    value="Radicar" disabled="" onclick="return verif_data(&#39;IG0A39&#39;);">
                            </div>
                        </div>
						<div class="pull-right ">
                    <button class="boton_guardarContinuar" id="guardar">GUARDAR Y CONTINUAR</button>
                </div>
                    </form>
                    <br>
                </div>
                <input type="hidden" name="txtEntidad" id="txtEntidad" value="">
                <input type="hidden" name="txtSigla" id="txtSigla" value="FIDUPREVISORA S.A.">








                <!--FIN de formulario-->










                


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
                <!-- <a href="">Informacion Compañia</a>--| <a href="">Privacion y Politica</a>--> | <a href="">©
                    Desarrollado: Ingeniero Fabian Aranda T - |Cabildo de Guambia</a>
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
$('#persona').submit(function(e) {
    e.preventDefault(); //cancelar el envio
    var url = $("#persona").attr('action');
    var type = $("#persona").attr('method');
    $.ajax({
        type: type,
        url: base + '/' + url,
        data: $('#persona').serialize(),
        dataType: 'json',
        success: function(response) {
            if (response.validate) {
                Swal.fire(
                    'Exito',
                    'Se ha guardado con éxito  al empleado',
                    'success'
                )
                setTimeout(function() {
                    location.href = base + "/Nivel-Academico/" + response.id;
                }, 2000);

            } else {
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
$('#departamento').change(function() {
    var departamentoID = $(this).val();
    if (departamentoID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-municipio-list')}}?codigo_departamento=" + departamentoID,
            success: function(res) {
                if (res) {
                    $("#municipio").empty();
                    $("#municipio").append('<option>Seleccione Municipio</option>');
                    $.each(res, function(key, value) {
                        $("#municipio").append('<option value="' + key + '">' + value +
                            '</option>');
                    });

                } else {
                    $("#municipio").empty();
                }
            }
        });
    } else {
        $("#municipio").empty();

    }
});
</script>


<!-- selector  categoria_trabajo -->
<script type="text/javascript">
$('#tipo_trabajo').change(function() {
    var tipo_trabajoID = $(this).val();
    if (tipo_trabajoID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-categoria_trabajo-list')}}?id_tipo_trabajo=" + tipo_trabajoID,
            success: function(res) {
                if (res) {
                    $("#categoria_trabajo").empty();
                    $("#categoria_trabajo").append('<option>Seleccione Categoria</option>');
                    $.each(res, function(key, value) {
                        $("#categoria_trabajo").append('<option value="' + key + '">' +
                            value + '</option>');
                    });

                } else {
                    $("#categoria_trabajo").empty();
                }
            }
        });
    } else {
        $("#categoria_trabajo").empty();

    }
});
</script>

<!-- selecionar direccion y lugar de trabajo -->
<script type="text/javascript">
$('#departemento_lugar_trabajo').change(function() {
    var lugar_trabajoID = $(this).val();
    if (lugar_trabajoID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-municipio_lugar_trabajo-list')}}?codigo_departamento_trabajo=" +
                lugar_trabajoID,
            success: function(res) {
                if (res) {
                    $("#municipio_lugar_trabajo").empty();
                    $("#municipio_lugar_trabajo").append('<option>Seleccione Categoria</option>');
                    $.each(res, function(key, value) {
                        $("#municipio_lugar_trabajo").append('<option value="' + key +
                            '">' + value + '</option>');
                    });

                } else {
                    $("#municipio_lugar_trabajo").empty();
                }
            }
        });
    } else {
        $("#municipio_lugar_trabajo").empty();
        $("#nombre_institucion").empty();
    }
});

$('#municipio_lugar_trabajo').on('change', function() {
    var municipioID = $(this).val();
    if (municipioID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-nombre-instituciono-list')}}?codigo_municipio_trabajo=" + municipioID,
            success: function(res) {
                if (res) {
                    $("#nombre_institucion").empty();
                    $("#nombre_institucion").append('<option>Seleccione Resguardo </option>');
                    $.each(res, function(key, value) {
                        $("#nombre_institucion").append('<option value="' + key + '">' +
                            value + '</option>');
                    });

                } else {
                    $("#nombre_institucion").empty();
                }
            }
        });
    } else {
        $("#nombre_institucion").empty();
        $("#tipo_institucion").empty();
    }

});

$('#nombre_institucion').on('change', function() {
    var municipioID = $(this).val();
    if (municipioID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-tipo-institucion-list')}}?id_nombre_institucion=" + municipioID,
            success: function(res) {
                if (res) {
                    $("#tipo_institucion").empty();
                    $("#tipo_institucion").append('<option>Seleccione Tipo Institucion </option>');
                    $.each(res, function(key, value) {
                        $("#tipo_institucion").append('<option value="' + key + '">' +
                            value + '</option>');
                    });

                } else {
                    $("#tipo_institucion").empty();
                }
            }
        });
    } else {
        $("#tipo_institucion").empty();
        $("#sede_institucion").empty();
    }

});


$('#tipo_institucion').on('change', function() {
    var municipioID = $(this).val();
    if (municipioID) {
        $.ajax({
            type: "GET",
            url: "{{url('get-sede_institucion-list')}}?id_tipo_institucion=" + municipioID,
            success: function(res) {
                if (res) {
                    $("#sede_institucion").empty();
                    $("#sede_institucion").append('<option>Seleccione Tipo Institucion </option>');
                    $.each(res, function(key, value) {
                        $("#sede_institucion").append('<option value="' + key + '">' +
                            value + '</option>');
                    });

                } else {
                    $("#sede_institucion").empty();
                }
            }
        });
    } else {
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
    } else {
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
    } else {
        $('#lblTipoLibreta').hide();
        $('#ddlTipoLibreta').hide();
        $('#lblNumeroLibreta').hide();
        $('#txtNumeroLibreta').hide();
    }
}
</script>



@endsection