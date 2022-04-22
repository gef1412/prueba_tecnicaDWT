<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $filtro = $request->filtro;
        //
        $usuarios = Usuarios::where('nombre', 'LIKE','%'.$filtro.'%')
        ->orwhere('apellidos', 'LIKE','%'.$filtro.'%')
        ->orwhere('email', 'LIKE','%'.$filtro.'%')
        ->orwhere('dni', 'LIKE','%'.$filtro.'%')
        ->orwhere('telefono', 'LIKE','%'.$filtro.'%')
        ->latest('id')
        ->paginate(10);

        $datos=[
            'datousuario'=>$usuarios,
            'filtro'=>$filtro
        ];

        return view('usuarios.index', $datos);
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

        $validacion=[
            'nombre'=> 'required | max:100',
            'apellidos'=> 'required | max:100',
            'email'=> 'required | email | max:100',
            'password'=> 'string | min:8',
            'telefono'=> 'digits:11 | min:8',
            'dni'=> 'required | digits:11',
            'fecha_nacimiento'=> 'date',
            'ciudad' => 'string',
        ];

        $error = [
            'required' => ':attribute es un campo obligatorio',
            'string' => 'El formato de :attribute es incorrecto ',
            'date' => ':attribute debe ser una fecha valida',
            'digits' => 'El numero excede el maximo de digitos',
        ];

        $this->validate($request, $validacion, $error);

        $userdata = $request->except('_token');
        Usuarios::insert($userdata);

           // return response()->json($userdata);
           return redirect('usuarios');

           //Mail::to($request->userdata())->send(new Inbox());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos_edit = Usuarios::FindorFail($id);
        return view('usuarios.edit-user', compact('datos_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validacion=[
            'nombre'=> 'required | max:100',
            'apellidos'=> 'required | max:100',
            'email'=> 'required | email | max:100',
            'password'=> 'string | min:8',
            'telefono'=> 'digits:11 | min:8',
            'dni'=> 'required | digits:11',
            'fecha_nacimiento'=> 'date',
            'ciudad' => 'string',
        ];

        $error = [
            'required' => ':attribute es un campo obligatorio',
            'string' => 'El formato de :attribute es incorrecto ',
            'date' => ':attribute debe ser una fecha valida',
            'digits' => 'El numero excede el maximo de digitos',
        ];

        $this->validate($request, $validacion, $error);

        $userdata = $request->except('_token', '_method');
        Usuarios::where('id', '=', $id)->update($userdata);
        $datos['datousuario'] = Usuarios::paginate(10);
        return view('usuarios.index', $datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuarios::destroy($id);
        return redirect('usuarios');
    }
}
