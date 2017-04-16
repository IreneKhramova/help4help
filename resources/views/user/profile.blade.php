@extends('layout')

@section('title')
Profile
@stop

@section('content')
Профиль пользователя 
<div>
        <p> {{$user}} </p>
      </div>
@stop