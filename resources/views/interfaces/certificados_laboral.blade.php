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
                                    <td width="10px">
                              <a href="{{ route('users', $user->id)}}" 
                              class="btn btn-sm btn-danger">
                                      Generar certificado
                                  </a>
                              </td>
                            
                  </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</body>
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