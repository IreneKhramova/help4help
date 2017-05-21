@extends('layout')

@section('title')
Сообщения
@stop

@section('content')
<h2>Сообщения</h2>
@if (!Auth::guest())
    <h3>Создать сообщение</h3>
    <div class="col-md-12">
		<form role="form" class="form-horizontal col-md-5" action="{{ URL::to('/message', ['id' => $id]) }}" method="post">
			{{ csrf_field() }}
 			<div class="form-group">
  				<label for="text" class="control-label">Текст</label>
  				<textarea class="form-control" name="text" placeholder="Текст"></textarea>
 			</div>
 		<button type="submit" class="btn btn-success">Отправить</button>
		</form>
	</div>
@endif

@foreach($messages as $key => $message)
      <div class="block">
        <div class="icon">
          <div class="service-icon">
            @if($message->user_from->photo !== null)
              <img src="{!! $message->user_from->photo !!}">
            @else
              <img src="/images/services/Branding-Identity.png">
            @endif
          </div>
          <a href="{{ URL::to('/user', ['id' => $message->user_from->id]) }}">
            <h4 class="service-head">{{$message->user_from->name}}</h4>
          </a>
          <h3 class="service-head">{{$message->created_at}}</h3>
        </div>
        <div class="text">
          		<p>{{$message->text}}</p>
          	</a>
        </div>
     </div>
    @endforeach

{{ $messages->links() }}

@stop