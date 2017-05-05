@extends('layout')

@section('title')
Review
@stop

@section('content')

<h2>Отзывы о нас</h2>

@foreach($reviews as $key => $review)
     <div class="block">
      <div class="service-icon">
          <img src="images/services/Branding-Identity.png">
      </div>
      <h4 class="service-head">{{$review->user_from->name}}</h4>
      <div class="text">
          <p>{{$review->text}}</p>
      </div>
     </div>
@endforeach

{{ $reviews->links() }}

@stop