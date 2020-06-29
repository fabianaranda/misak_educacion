@extends('layouts.menu')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="/js/sweetalert2@9.js"></script>

<!--\\\\\\\ estilos css \\\\\\-->
<link href="css/admin.css" rel="stylesheet" type="text/css" />

<link type="text/css" rel="stylesheet" href="./cs/pqrs.css">
<link type="text/css" rel="stylesheet" href="./cs/pqrs.css">
<link href="{{ asset('./cs/pqrs.css') }}" rel="stylesheet">

<link href="{{ asset('css/estilos_pie_pagina.css') }}" rel="stylesheet">
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

<!-- FIN-->

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

                <table>
                    <tbody>
                        <tr>
                            <td style="width:3px;"></td>
                            <td title="Censo vivienda de familia Misak">
                                <table class="active">
                                    <tbody>
                                        <tr>
                                            <td><b href="">INGRESO NUEVO PERSONAL</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>



                            <td style="width:3px;"></td>
                            <td title="Miembros de la familia   Misak ">
                                <table class="estatic">
                                    <tbody>
                                        <tr>
                                            <td><b href="">NIVEL ACADEMICO</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>




<!--
                            <td style="width:3px;"></td>
                            <td title="Nivel educativo  que tiene  la persona que vive en la familia">
                                <table class="active">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b href="">OBSERVACIONES</b>
                                            </td>-->
                                        </tr>
                                    </tbody>

                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="color_infor noPrint" style="margin-top: 15px;">
                    <span class="color_infor  noPrint">Usted se encuentra en: &nbsp;&nbsp;Ingreso de trabajador &gt;
                        <font color="#666666">Nivel Academico</font></span>
                </div>
               <!-- <div class="well resume-module module-jobs">
                    <h2 class="module-title">
                        Agregar Nivel Academico obtenido por el trabajador
                    </h2>
                    <div class="js-box-laboral-experience" id="experiencia-laboral">
                        <h3 class="h4">Ingrese todo los estudios obtenidos por : </h3>
                        <div class="module-collapsible collapse in" aria-expanded="true">
                            <div class="module-summary-wrapper laboral-experience">
                                <p class="text-muted">
                                    -
                            </div>
                        </div>
                    </div>
                </div>-->

            </div>
            <!--FIN titulo_infobasica-->
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
                                NIVEL ACADEMICO (*)
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
                            <div class="col-md-6 form-group input-group-sm">
                                <div class="etiqueta2">Nombre del Nivel Academico. (*)</div>
                                <input name="nombre_nivel" type="text" class="control-dir form-control" id="a13"
                                    onchange="Bus();" value="" size="15" maxlength="200"
                                    onkeypress="return validar(event)" placeholder=" Ingrese el Nombre del Nivel Academico.">
                            </div>
							  <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Estado</div>
                                   <select name="estado" type="text" tabindex="3" class="form-control "
                                        autocomplete="of" required="">
                                        <option value="">Selec</option>
                                        <option value="En Cuerso">En Cuerso</option>
                                        <option value="Incompleto">Incompleto</option>
                                        <option value="Graduado">Graduado</option>
                                        


                                    </select>
                            </div>
							  <div class="col-md-3 form-group input-group-sm pull-left">
                                <div class="etiqueta2">Codigo Contrato</div>
                                 
									  <input name="id_personas" type="text" value="{{$id_persona}}" tabindex="3" class="form-control " tabindex="2">
                            </div>
							
							
                        </div>
                                
                           <div class="row">
                            <div class="col-md-12 text-center form-group input-group-sm">
                                <input class="btn btn-warning btn-md" type="submit" name="btnPreview"
                                    value="Agregar Estudios" id="boton">
                                &nbsp;&nbsp;
                               <!-- <input class="btn btn-warning btn-md" type="submit" id="btnSubmit" name="btnSubmit"
                                    value="Radicar" disabled="" onclick="return verif_data(&#39;IG0A39&#39;);">-->
									              
                        </div>
                           
                        
						 </div>
						  <div class="row">
                            <div class="col-md-12 form-group input-group-sm">
                                <div class="etiqueta2"> Nivel Academico Obtenidos</div>
                                <input type="text" name="txtDir" id="txtDir" maxlength="100" placeholder="Listado estudios realizados"
                                    class="form-control" readonly="readonly" autocomplete="on" required="">
                            </div>
                        </div>
						 
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>N° Estudios</th>
                        <th>Nombre de Estudios Realizados </th>

                        <th>Estado</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody id="bodyTable">
                </tbody>
            </table>

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



<script type="text/javascript">
var personas = [];
$(function() {
    function verTabla() {
        var form = {};
        $.map($('form').serializeArray(), function(n, i) {
            form[n['name']] = n['value'];
        });
        personas.push(form);
        var html = '';
        $.each(personas, function(index, value) {
            personas[index].integrantes = index + 1;
            html = html + '<tr>';

            html = html + '<td>' + personas[index].integrantes + '</td>';
            html = html + '<td>' + value.nombre_nivel + '</td>';
            html = html + '<td>' + value.estado + '</td>';



            html = html + '<td><button  class="borrar" click="borrar(' + index +
                ')">Actualizar</button></td>';
            html = html + '<td><button  class="borrar" click="borrar(' + index +
                ')">Eliminar</button></td>';

            html = html + '</tr>';
        });
        $('#bodyTable').html(html);
    }
    $('form').submit(function(e) {
        e.preventDefault(); //Evita que se envie el formulario
        verTabla();
    })
})


function borrar(idx) {
    borrar();
    personas.pop();
    personas.splice(idx, 1);
    verTabla();
}

$('#guardar').click(function() {
    if (personas.length > 0) {
        $.ajax({
            url: base + '/Nivel_Academico',
            type: 'POST',
            data: {
                personas
            },
            success: function(response) {

                Swal.fire(
                    'Exito',
                    'Se ha guardado con éxito ss',
                    'success'
                )
                setTimeout(function() {
                    location.href = base + "/Observaciones-Trabajador/" + response.id_personas;
                }, 2000);


            }

        });

    } else {
        alert('Debe ingresar personas en el Hogar')
    }
})
</script>

@endsection