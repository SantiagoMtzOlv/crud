<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\direcciones;
use Illuminate\Http\Request;
//use App\direccion;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = Usuarios::paginate(3);

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $direccion=request()->except(['_token']);

        usuarios::insert($direccion);
        //direcciones::insert($datosDireccion);
        return redirect('usuarios');
        //return response()->json($datosUsuarios);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=usuarios::findOrFail($id);
        //$direccon=direccion::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios=request()->except(['_token','_method']);
        usuarios::where('id','=',$id)->update($datosUsuarios);
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuario_id)
    {
        //
        usuarios::destroy($usuario_id);
        return redirect('usuarios');
    }
}        