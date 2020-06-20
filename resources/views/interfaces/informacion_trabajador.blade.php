<meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('menu2.name', 'Impresion - constancia de ingreso trabajador al PECG') }}</title>
  


<link href="{{ asset('css/certificado.css') }}" rel="stylesheet">


 <form method="post" action="" id="form1">
          


  <br>
  <br>
  <style type="text/css">
        .style3
        {
            height: 16px;
        }


        .styleletrapagina
        {
            font-size:0.2px;
        }


    </style>



</head>

<body>
@foreach($datos as $key=>$temp)
<table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tbody>
  <tr bgcolor="#FFFFFF"; height="55px";>  
    <td width="76%" rowspan="2"><img src="{{ asset('images/logo.jpg') }}" width="286" height="59"></td>
    
    <td width="8%" valign="middle" class="contenido">Fecha Registro:</td>
    <td width="16%" valign="middle">{{$temp->fecha_ingreso_sistema}}</td>
    
  </tr>
  
  <tr>
    <td height="19" valign="middle" bgcolor="#FFFFFF" class="contenido">Codigo Contrato:</td>
    <td valign="middle" bgcolor="#FFFFFF">{{$temp->id}}</td>
  </tr>
  
  <tr bgcolor="#F4F7FB">
    <td colspan="3">
      <!--<p>&nbsp;</p>-->
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#999999">
        <tbody><tr bgcolor="#8398C5">
          <td colspan="4" class="tituloEtiqueta" align="center"><div align="center">DETALLES - EMPLEADO </div></td>
        </tr>
        <tr bgcolor="#327bb2">
          <td colspan="2" height="25px"; class="subtitulo4">
            Ingreso Datos al Sistema PECG
          </td>
          <td colspan="2" height="25px";><div align="left">
		  
      
            <span class="subtitulo4"><b>Linea de Contrato: </b></span>&nbsp;<font size="0.6px", color="#fff";>{{$temp->nombre_programa}}</font>
          </div></td>
        </tr>
        
      
        <tr bgcolor="#FFFFFF">
        <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>NOMBRE COMPLETO</strong></td>
          <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre}} {{$temp->apellidos}} &nbsp;</td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>TIPO DE DOCUMENTO</strong></td>
          <td width="23%" bgcolor="#FFF" class="subtitulo2">{{$temp->tipo_identificacion}}&nbsp;</td>
          <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>NUMERO DE DOCUMENTO</strong></td>
          <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->documento_identidad}}&nbsp;</td>
        </tr>
        <tr bgcolor="#FFFFFF">
          
          <td bgcolor="#ddd" class="style3"><strong>GÉNERO</strong></td>
          <td bgcolor="#FFF" class="style3">{{$temp->sexo}}&nbsp;</td>
          <td bgcolor="#ddd" class="style3"><strong>FECHA NACIMIENTO</strong></td>
          <td bgcolor="#FFF" class="style3"> {{$temp->fecha_nacimiento }}</td>
          
        </tr>

        <tr bgcolor="#FFFFFF">
          <td bgcolor="#ddd" class="subtitulo2"><strong>ESTADO CIVIL</strong></td>
          <td bgcolor="#FFF" class="subtitulo2"> {{$temp->estado_civil}}&nbsp;</td>
          <td bgcolor="#ddd" class="subtitulo2"><strong>TELEFONO</strong></td>
          <td bgcolor="#FFF" class="subtitulo2">{{$temp->telefono}}&nbsp;</td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td bgcolor="#ddd" class="subtitulo2"><strong>CORREO ELECTRÓNICO</strong></td>
          <td bgcolor="#FFF" class="subtitulo2"> {{$temp->	correo_electronico}}&nbsp;</td>
          <td bgcolor="#ddd" class="subtitulo2"></td>
          <td bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
        </tr>

        <tr bgcolor="#FFFFFF">
          <td colspan="4" class="subtitulo2">&nbsp;</td>
        </tr>


        <!--Aqui va el codigo de tablas  informacion del trabajador-->

         <tr bgcolor="#849AC6">
                      <td colspan="4" class="tituloEtiqueta" align="center"> <div align="center">DIRECCIÓN - EMPLEADO </div></td>
                    </tr>

                    
                <tr bgcolor="#FFFFFF">
                  <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>DEPARTAMENTO</strong></td>
                  <td width="23%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_depatamento }}&nbsp;</td>
                  <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>MUNICIPIO</strong></td>
                  <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_municipio }}&nbsp;</td> 
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>DIRECCIÓN</strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{$temp->direccion}}&nbsp;</td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td colspan="4" class="subtitulo2">&nbsp;</td>
                </tr>
              <!--Aqui finaliza el codigo de tablas direccion empleado-->

          <!--Aqui va el codigo de tablas informacion  trabajo -->
    
                    <tr bgcolor="#849AC6">
                      <td colspan="4" class="tituloEtiqueta" align="center"> <div align="center">INFORMACIÓN - CARGO</div></td>
                    </tr>

                    <tr bgcolor="#327bb2">
                      <td colspan="4" class="subtitulo4" align="center">
                        <span class="subtitulo2"><b><font size="0.6px"></font></b></span>
                      </td>
                    </tr>
        
                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>PROGRAMA</strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{$temp->nombre_programa}}&nbsp;</td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>TIPO CARGO</strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{$temp->ocupacion}}&nbsp;</td>
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>INICIO CONTRATO</strong></td>
                  <td width="23%" bgcolor="#FFF" class="subtitulo2">{{$temp->fecha_contratacion}}&nbsp;</td>
                  <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong>FIN DEL CONTRATO</strong></td>
                  <td width="26%" bgcolor="#FFF" class="subtitulo2">{{$temp->fin_contrato}}&nbsp;</td>
                </tr>

              


                <tr bgcolor="#FFFFFF">
                  <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
                  <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td bgcolor="#FFF" class="subtitulo2">  </td>
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td colspan="4" class="subtitulo2">&nbsp;</td>
                </tr>
    
    
        <!--Aqui finaliza el codigo de tablas informacion trabajo-->
         

          <!--Aqui va el codigo de tablas persona encargada de registar al trabajador  -->
    
          <tr bgcolor="#849AC6">
                      <td colspan="4" class="tituloEtiqueta" align="center"> <div align="center">PERSONA ENCARGADO DE GENERAR EL CERTIFICADO</div></td>
                    </tr>

                    <tr bgcolor="#327bb2">
                      <td colspan="4" class="subtitulo4" align="center">
                        <span class="subtitulo2"><b><font size="0.6px"></font></b></span>
                      </td>
                    </tr>
        
                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>NOMBRE COMPLETO </strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{ Auth::user()->name}}&nbsp;</td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>CARGO</strong></td>
                  <td colspan="3" bgcolor="#FFF" class="subtitulo2">{{$temp->ocupacion}}&nbsp;</td>
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td width="25%" bgcolor="#ddd" class="subtitulo2"><strong>CORREO ELECTRÓNICO</strong></td>
                  <td width="23%" bgcolor="#FFF" class="subtitulo2">{{ Auth::user()->email}}&nbsp;</td>
                  <td width="26%" bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td width="26%" bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
                </tr>


                <tr bgcolor="#FFFFFF">
                  <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td bgcolor="#FFF" class="subtitulo2">&nbsp;</td>
                  <td bgcolor="#ddd" class="subtitulo2"><strong></strong></td>
                  <td bgcolor="#FFF" class="subtitulo2">  </td>
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td colspan="4" class="subtitulo2">&nbsp;</td>
                </tr>
    
    
        <!--Aqui finaliza el codigo de tablas informacion trabajo-->



     
      >
        <tr bgcolor="#327bb2">
            <td colspan="4" class="subtitulo4" align="center"> <br><div align="center">PROGRAMA DE EDUCACION DEL CABILDO INDIGENA DE GUAMBIA NIT:817-000-162-9</div><br></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="4"><div align="justify">
              <!-- INGESAR INFORMACION, NORMAR LEGALES --->
              <p>-</p>
               <!--  FIN INGESAR INFORMACION, NORMAR LEGALES --->
              
            </div></td>  
          </tr>
          <!--
        <tr bgcolor="#FFFFFF">
          <td colspan="4"><div align="right"></div>            <div align="right"></div>
            <div align="left">
              <p>&nbsp;</p>
              <p align="center">________________________________
              </p>
            </div>            <div align="center" class="subtitulo3">
              <div align="center">
                <p><strong>Firma.</strong>  NºDocumento : CEDULA DE CIUDADANIA No.</p>
              </div>
          </div></td>
        </tr>-->
        
        <tr bgcolor="#FFFFFF">
          <td colspan="4"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#EEEEEE">
            <tbody><tr bgcolor="#849AC6">
              <td colspan="2" height="25px"; class="subtitulo4"><div align="center" class="Estilo16">FIRMA CONTRATANTE </div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td width="11%" height="24" bgcolor="#ddd" class="subtitulo2"><strong>NOMBRE</strong></td>
              <td width="89%" bgcolor="#D5DDEC">_________________________________</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="22" bgcolor="#ddd" class="subtitulo2"><strong>FIRMA</strong></td>
              <td bgcolor="#FFF">_________________________________</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="23" bgcolor="#ddd" class="subtitulo2"><strong>FECHA</strong></td>
              <td bgcolor="#FFF">_________________________________</td>
            </tr>
          </tbody></table>
            <br>
<table width="38%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tbody><tr>
              <td width="55%"><div align="center" class="subtitulo3"><a href="javascript:window.print();">IMPRIMIR</a></div></td>
              <td width="10%" class="subtitulo3">
                              <a href="{{ route('Actualizacion-Datos-Trabajador', $temp->id)}}" 
                              class="btn btn-sm btn-danger">
                                      Actualizar Datos
                                  </a>
                              </td>
                              
              <td width="45%" class="subtitulo3"><div align="center"><a href="javascript:window.location.href=&#39;../../Tradicional/Renovar/cptRenovacionCreIng.asp&#39;;">SALIR</a> </div></td>
            </tr>
          </tbody></table>          </td>
        </tr>
      </tbody></table>
      @endforeach
      <p align="left"><span class="Estilo4 Estilo5 Estilo6 Estilo7"><span class="Estilo4 Estilo5 Estilo6  Estilo8 Estilo9"><span class="Estilo5 Estilo6 Estilo8 Estilo9  Estilo11"><span class="Estilo9 Estilo5"><span class="Estilo6 Estilo8 Estilo9 Estilo13 Estilo14"><span style="font-size:10px">NOTA: CONSTANCIA DE INGRESO DEL TRABAJADOR DEL CABILDO INDIGENA DEL RESGUARDO DE GUMABIA- SILVIA CAUCA.</span></span></span></span></span></span></p>
      
      </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="3"><div align="center"></div></td>
  </tr>
</tbody></table>
<br>
<br>







           
		  

        



</form>
    
     

    