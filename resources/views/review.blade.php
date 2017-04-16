@extends('layout')

@section('title')
Review
@stop

@section('content')
Отзывы о нас
<br>

<div class="container">
    <?php foreach ($reviews as $review): ?>
    	<p>
        <?php echo $review->text; ?>
        </p>
    <?php endforeach; ?>
</div>

<?php echo $reviews->render(); ?>

@stop