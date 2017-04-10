@extends('layout')

@section('title')
Index
@stop

@section('content')
Содержимое главной страницы!
<br>

@foreach($needs as $key => $need)
      <div>
        <p> {{$need}} </p>
      </div>
 @endforeach

@stop