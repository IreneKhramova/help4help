@extends('layout')

@section('title')
Index
@stop

@section('content')
<section id="1" class="whatis">
    <h2>что это такое?</h2>
    <div class="big-part">
      <p><span class="logo">Help4Help</span> - место , где можно найти различную помощь и предложить помощь самому.</p>
      <p>Помогать умеют не только супергерои.</p>
    </div>
    <div class="little-part">
      <h3>Мне помогают</h3>
      <p>Оставьте заявку с описанием вашей просьбы о помощи</p>
      <h3>Я помогаю</h3>
      <p>Выполните просьбу о помощи и получите вознаграждение</p>
    </div>
  </section>

  <section class="registration">
    <div class="big-part">
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
  <div class="little-part">
    <div class="reg_img">
    </div>
  </div>
  </section>

  <section id="2" class="new_orders">
    <div class="little-part">
    <h2>Новые заявки</h2>
    <div class="new_orders_img">
    </div>
    <div class="subscribe">
     <form action="" method="post">
       <input type="submit" name="" value="Просмотреть все заявки">
     </form>
     </div>
  </div>
  <div class="big-part">
	@foreach($needs as $key => $need)
     <div class="block">
      <div class="icon">
        <div class="service-icon">
          <img src="images/services/Branding-Identity.png">
        </div>
        <h4 class="service-head">{{$need->user_from->name}}</h4>
       </div>
       <div class="text">
        <p>{{$need->text}}</p>
       </div>
     </div>
	@endforeach
  </div>
  </section>

  <section id="3" class="rating">
    <div class="big-part">
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
    <div class="little-part">
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
    <div class="little-part">
      <h2>Партнёры</h2>
      <div class="partners_img"></div>
    </div>
    <div class="big-part">
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
@section('scriptsExtra')
<script src="js/height.js"></script>
@stop