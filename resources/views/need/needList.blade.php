@extends('layout')

@section('title')
Задания
@stop

@section('content')
Общий список заданий
<br>

<div class="container">
    <?php foreach ($needs as $need): ?>
        <?php echo $need->id; ?>
    <?php endforeach; ?>
</div>

<?php echo $needs->render(); ?>

@stop