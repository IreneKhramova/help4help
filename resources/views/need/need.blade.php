@extends('layout')

@section('title')
Задание
@stop

@section('content')
<div class="block">
    <div class="icon">
         <div class="service-icon">
            @if($need->user_from->photo !== null)
                <img src="{!! $need->user_from->photo !!}">
            @else
                <img src="/images/services/Branding-Identity.png">
            @endif
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
@if ($need->status == "new" && Auth::check())
    @if ($need->id_from != Auth::user()->id)
    <a href="{!! action('NeedController@executeNeed', $need->id ) !!}">Выполнить</a>
    @endif
@endif
@if ($need->status == "execute" && Auth::check())
    @if ($need->id_by == Auth::user()->id)
    <a href="{!! action('MessageController@showDialog', $need->user_from->id ) !!}">Написать сообщение</a>

    @elseif ($need->id_from == Auth::user()->id)
    <a href="{!! action('MessageController@showDialog', $need->user_by->id ) !!}">Написать сообщение</a>

    <!-- Задание выполнено -->
    <form action="{!! action('NeedController@completeNeed', ['id' => $need->id]) !!}">
    <button>Завершить задание</button>
    </form>
    @endif
@endif
</div>
@stop