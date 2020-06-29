<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Caffeinated\Shinobi\Models\Role;
use App\User;
use App\Role;
use App\programas;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('administrador.menu_usuarios', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
   // {
       // $user = User::find($id);

       // return view('users.show', compact('user'));
  //  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario guardado con éxito');
    }

         
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
   



    public function indexz( $id_persona)
    {   
        //$users = User::get();
        $users = User::findOrFail($id_persona);
        return view('users',compact('users'));
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
      return response()->json(['success'=>'Status change successfully.']);
    }

    
    function create_trabajador(Request $data){
        $user = new  programas();
        $user->nombre_programas= $data['nombre_programas'];
      

        $user->save();
        $user->id;
       
        //return redirect()->route('interfaces.hogar');
       // return redirect()->route('interfaces.Ingresar_personas', ['id_Hogar' => $user->id]);
       return ['validate'=>true,'id'=>$user->id];
        //return view('hola');
    }
}
