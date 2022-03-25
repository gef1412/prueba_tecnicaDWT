@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{  url('/usuarios') }}" method="post">
@csrf
@include('usuarios.form')
</form>
</div>
@endsection