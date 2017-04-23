<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>@yield('title')</title>

	@yield('headExtra')
	
	<link rel="stylesheet" href="css/reset.css">
  	<link rel="stylesheet" href="css/master.css">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
</head>
<body>
	<header>
		<h1>heplforhelp</h1>
    	<h3>Помогаем друг другу</h3>
    	<div class="head_img">
      		<img src="" alt="">
		</div>
	</header>
	<span class="anchor"></span>
	<section class="menu">
    	<nav>
      	<ul>
        	<li><a href="#1">о нас</a></li>
        	<li><a href="#2">заявки</a></li>
        	<li><a href="#3">рейтинг</a></li>
        	<li><a href="#4">отзывы</a></li>
        	<li><a href="#5">партнёры</a></li>
        	<li><a href="#6">контакты</a></li>
        	<li><a href="">войти</a></li>
      	</ul>
    	</nav>
	</section>
	@yield('content')
	<footer></footer>
</body>
@yield('scriptsExtra')
<script src="js/fixed-menu.js"></script>
</html>