@extends('layout')

@section('title')
Задание
@stop

@section('content')
<div class="block">
    <div class="icon">
         <div class="service-icon">
            <img src="/images/services/Branding-Identity.png">
        </div>
        <a href="{{ URL::to('/user', ['id' => $need->user_from->id]) }}">
        	<h4 class="service-head">{{$need->user_from->name}}</h4>
        </a>
    </div>
    <div class="text">
        <p>{{$need->text}}</p>
    </div>
    <p>Категория: {{$need->category->name}}</p>
    <p>За выполнение заплатят баллов: {{$need->points}}</p>
    <p>Дата размещения задания: {{$need->created_at}}</p>
</div>
@stop