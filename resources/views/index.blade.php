@extends('layout')

@section('title')
Index
@stop

@section('headExtra')
	<link rel="stylesheet" href="css/reset.css">
  	<link rel="stylesheet" href="css/master.css">
  	
@stop

@section('content')
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


<section id="1" class="whatis">
    <h2>что это такое?</h2>
    <div class="left">
      <p><span class="logo">Help4Help</span> - место , где можно найти различную помощь и предложить помощь самому.</p>
      <p>Помогать умеют не только супергерои.</p>
    </div>
    <div class="right">
      <h3>Мне помогают</h3>
      <p>Оставьте заявку с описанием вашей просьбы о помощи</p>
      <h3>Я помогаю</h3>
      <p>Выполните просьбу о помощи и получите вознаграждение</p>
    </div>
  </section>

  <section class="registration">
    <div class="left">
      <h2>Регистрация</h2>
    <p><span class="shad">Зарегестрируйся</span> чтобы иметь больше возможностей</p>
    <div class="subscribe">
      <form action="" method="post">
        <input type="text" name="name" placeholder="введите ваше имя">
        <input type="email" name="email" placeholder="введите ваш email">
        <input type="submit" value="Продолжить регистрацию">
      </form>
    </div>
  </div>
  <div class="right">
    <div class="reg_img">
    </div>
  </div>
  </section>

  <section id="2" class="new_orders">
    <div class="left">
    <h2>Новые заявки</h2>
    <div class="new_orders_img">
    </div>
  </div>
  <div class="right">
    <div class="order">

      <div class="block">
        <div class="service-icon">
          <img src="images/services/Branding-Identity.png">
        </div>
        <h4 class="service-head">+1234 Name Surname</h4>
        <p>Нужно перештукатурить стену</p>
      </div>



      <div class="subscribe">
      <form action="" method="post">
        <input type="submit" name="" value="Просмотреть все заявки">
      </form>
      </div>
    </div>
  </div>
  </section>

  <section id="3" class="rating">
    <div class="left">
      <div class="top_line">
      <div class="block">
        <div class="service-icon">
          <img src="images/services/Branding-Identity.png">
        </div>
        <h4 class="service-head">+1234 Name Surname</h4>
      </div>
      <div class="block">
        <div class="service-icon">
          <img src="images/services/Branding-Identity.png">
        </div>
        <h4 class="service-head">+1234 Name Surname</h4>
      </div>
      <div class="block">
        <div class="service-icon">
          <img src="images/services/Branding-Identity.png">
        </div>
        <h4 class="service-head">+1234 Name Surname</h4>
      </div>
      </div>
      <div class="bottom_line">
        <div class="subscribe">
        <form action="" method="post">
          <input type="submit" name="" value="Просмотреть весь рейтинг">
        </form>
        </div>
      </div>
  </div>
    <div class="right">
      <h2>Рейтинг</h2>
      <div class="rating_img">
      </div>
    </div>
  </section>

  <section id="4" class="comment">
    <h2>Отзывы</h2>
    <div class="block">
      <div class="service-icon">
        <img src="images/services/Branding-Identity.png">
      </div>
      <h4 class="service-head">+1234 Name Surname</h4>
    </div>
    <div class="block">
      <div class="service-icon">
        <img src="images/services/Branding-Identity.png">
      </div>
      <h4 class="service-head">+1234 Name Surname</h4>
    </div>
    <div class="block">
      <div class="service-icon">
        <img src="images/services/Branding-Identity.png">
      </div>
      <h4 class="service-head">+1234 Name Surname</h4>
    </div>
    <div class="block">
      <div class="service-icon">
        <img src="images/services/Branding-Identity.png">
      </div>
      <h4 class="service-head">+1234 Name Surname</h4>
    </div>
    <div class="subscribe">
    <form action="" method="post">
      <input type="submit" name="" value="Просмотреть весь рейтинг">
    </form>
  </div>
  </section>

  <section id="5" class="partners">
    <div class="left">
      <h2>Партнёры</h2>
      <div class="partners_img"></div>
    </div>
    <div class="right">
      <div class="p_news">
        <p>Новый конкурс!</p>
        <p>Победители сентября</p>
        <p>Лучшая работа</p>
      </div>
    <div class="subscribe">
    <form action="" method="post">
      <input type="submit" name="" value="Просмотреть все новости">
    </form>
  </div>
    </div>
  </section>

  <section id="6" class="about">
    <p>Здесь вы можете написать нам о своих предложениях или написать в техподдержку</p>
    <div class="subscribe">
    <form action="" method="post">
      <input type="email" name="email" placeholder="введите ваш email">
      <input type="text" placeholder="Введите текст сообщения">
      <input type="submit" value="Отправить">
    </form>
</div>
</section>

@stop