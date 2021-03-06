<header class="container-fluid header">
    <div class="d-flex justify-content-center align-items-center header__info">
        <address class="header__address mr-5 ml-5"><img src="" alt="">Вологда, Северная улица д. 15 стр. 4</address>
        <p class="header__time mr-5 ml-5"><img src="" alt="">Мы работаем c 10.00 до 20.00 Без выходных</p>
        @include('partials.auth')
    </div>
    <div class="container header__body d-flex justify-content-between align-items-center">
        <img class="header__logo" src="{{asset('img/logo.png')}}" alt="">
        <p class="header__slogan">Полный цикл <br> Ремонт и обслуживание</p>
        <a href="#" class="btn btn-primary header__call-me"> Заказ звонка</a>
        <a class="header__phone" href="tel:+79004275889">+7 (900) 427-58-89</a>
    </div>
    <ul class="nav container d-flex justify-content-around">
        <li class="nav-item">
            <a class="nav-link active" href="#">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Диагностика</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Услуги и сервис </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Кузовные работы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Контакты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">О компании</a>
        </li>
    </ul>
</header>
