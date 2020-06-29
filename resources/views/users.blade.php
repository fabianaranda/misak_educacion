@extends('layouts.menu')

@section('content')

<html>
<head>
    <title>Laravel Update User Status Using Toggle Button Example - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

</head>
<body>
<div class="container">
        <h1>Laravel Update User Status Using Toggle Button Example - ItSolutionStuff.com</h1>
        <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Estado</th>
               </tr> 
            </thead>
            <tbody>
               @foreach($users as $user)
                  <tr>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                   
                      <td class="text-center">
                                        @if ($user->status == 1)
                                            <span class="badge badge-success">Censado</span>
                                        @else
                                            <span class="badge badge-danger">No Censado</span>
                                        @endif
                                    </td>
                    <td>
                        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
                     </td>
                  </tr>
               @endforeach
            </tbody>
        </table>
    </div>




<script>
</script>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>











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
            setTimeout(function(){  location.href=base+"/Nivel-Academico/"+response.id; }, 2000);
          
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






<script>
</script>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>


</html>


@endsection