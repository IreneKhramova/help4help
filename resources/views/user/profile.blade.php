@extends('layout')

@section('title')
Профиль
@stop

@section('content')
<div class="block">
    <div class="service-icon">
    @if($user->photo !== null)
        <img src="{!! $user->photo !!}">
    @else
    	<img src="/images/services/Branding-Identity.png">
    @endif
    </div>
        <h4 class="service-head">{{$user->name}}</h4>
    </a>
    <h3>Рейтинг: {{$user->rating}}</h3>

    <div class="skills">
        <p>Навыки: {{$user->skills}}</p>
    </div>
</div>
@if (Auth::check())
	@if(Auth::user()->id === $user->id)
		<h3>Баланс: {{$user->balance}}</h3>
        <a href="{!! '/user/' . $user->id . '/edit' !!}">Редактировать</a>

        <a href="{!! action('NeedController@showNeedListByUserFrom', $user->id) !!}">Мои заявки</a>

        <a href="{!! action('NeedController@showNeedListByUserBy', $user->id) !!}">Задания, которые я выполняю</a>
	@endif
@endif
<h3>Отзывы о пользователе</h3>
@if (Auth::check())
    @if(Auth::user()->id !== $user->id)
<h3>Добавить отзыв</h3>
<div class="col-md-12">
<form role="form" class="form-horizontal col-md-5" action="{!! '/user/' . $user->id . '/comment' !!}" method="post">
{{ csrf_field() }}
 <div class="form-group">
  <label for="text" class="control-label">Текст</label>
  <input type="text" class="form-control" name="text" placeholder="Текст">
 </div>
 <div class="form-group">
  <label for="rating" class="control-label">Оценка</label>
  <input type="number" class="form-control" name="rating">
 </div>
 <button type="submit" class="btn btn-success">Добавить</button>
</form>
</div>
    @endif
@endif
@foreach($comments as $key => $comment)
      <div class="block">
        <div class="icon">
          <div class="service-icon">
            @if($comment->user_from->photo !== null)
              <img src="{!! $comment->user_from->photo !!}">
            @else
              <img src="/images/services/Branding-Identity.png">
            @endif
          </div>
          <h4 class="service-head">{{$comment->user_from->name}}</h4>
        </div>
            <p>{{$comment->text}}</p>
            <p>{{$comment->rating}}</p>
     </div>
    @endforeach

{{ $comments->links() }}
@stop