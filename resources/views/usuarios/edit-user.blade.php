@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{  url('/usuarios/'.$datos_edit->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuarios.form')
</form>
</div>
@endsection