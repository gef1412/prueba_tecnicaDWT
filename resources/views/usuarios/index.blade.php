@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('usuarios.index') }}" method="GET">
        <div class="btn-group">
            <input type="text" name="filtro" class="form-control">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </div>
    </form>
<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>DNI</th>
            <th>Fecha Nacimiento</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datousuario as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellidos }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->dni }}</td>
            <td>{{ $usuario->fecha_nacimiento }}</td>
            <td>{{ \Carbon\Carbon::parse($usuario->fecha_nacimiento)->age; }}</td>
            <td>{{ $usuario->ciudad }}</td>
            <td>
                <form action="{{ url('/usuarios/'.$usuario->id.'/edit') }}" method="get">
                    @csrf
                    <input type="submit" value="Editar">
                </form>
                <form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('Eliminar usuario?') " value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('/usuarios/create') }}" class="btn btn-success">
    <button>Registrar nuevo usuario</button>
</a>
</div>
@endsection