@extends('layouts.app')
@component('mail::message')
<form action="" method="post">
@csrf
<label for="to">{{__('To')}}</label>
<input type="email" name="email" value="" id="email">
<br>
<label for="subject">{{__('Subject')}}</label>
<input  type="text" name="subject" value="" id="subject">
<br>
<label for="body">{{__('Compose Email')}}</label>
<input  type="text" name="body" value="" id="body">

Thanks,<br>
{{ config('app.name') }}

<br>
<input type="submit" value="Enviar">
</form>
@endcomponent