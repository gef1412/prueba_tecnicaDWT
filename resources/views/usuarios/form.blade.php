@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
         <li> {{$error}} </li>
        @endforeach
    </ul>
</div>
    
@endif
<label for="email"> Email </label>
<input type="email" name="email" value="{{  isset($datos_edit->email)?$datos_edit->email :old('email') }}" id="email">
<br>
<label for="password"> Contraseña </label>
<input type="password" name="password" value="{{  isset($datos_edit->password)?$datos_edit->password : '' }}" id="password">
<br>
<label for="nombre"> Nombre </label>
<input type="text" name="nombre" value="{{  isset($datos_edit->nombre)?$datos_edit->nombre :old('nombre') }}" id="nombre">
<br>
<label for="apellidos"> Apellidos </label>
<input type="text" name="apellidos" value="{{  isset($datos_edit->apellidos)?$datos_edit->apellidos :old('apellidos') }}" id="apellidos">
<br>
<label for="telefono"> Telefono </label>
<input type="text" name="telefono" value="{{  isset($datos_edit->telefono)?$datos_edit->telefono :old('telefono') }}" id="telefono">
<br>
<label for="dni"> DNI </label>
<input type="text" name="dni" value="{{  isset($datos_edit->dni)?$datos_edit->dni :old('dni') }}" id="dni">
<br>
<label for="fecha_nacimiento"> Fecha de nacimiento </label>
<input type="date" name="fecha_nacimiento" value="{{  isset($datos_edit->fecha_nacimiento)?$datos_edit->fecha_nacimiento :old('fecha_nacimiento') }}" id="fecha">
<br>
@livewire('dropdown-ciudad', ['selectCiudad' => 1])
<br>
<input type="submit" value="Registrar">


<a href="{{ url('/usuarios') }}">
    <button>Regresar</button>
</a>