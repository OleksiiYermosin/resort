@extends('template')
@section('title')
    Ресторан
@endsection
@section('header')
    <header id="header" class="infoHeader" style="background: url('{{asset('public/img/bar6.jpg')}}') no-repeat center top / cover">
        <div class="nav">
            <div class="container">
                <div class="top">
                    <div class="logo">
                        <a href="{{url("/page=index")}}"><img src="{{asset('public/img/LogoMain.svg')}}" alt="Logo" class="logoImg"></a>
                    </div>
                    <div class="infoMenu">
                        <div class="location">
                            <div class="locA">
                                <img src="{{asset('public/img/placeholderTop.svg')}}" alt="phoneF" class="Timg" style="padding-right: 4%">
                                <p> Місто Морське, наб. Морська, 12</p>
                            </div>
                            <div class="locP">
                                <img src="{{asset('public/img/phone-callTop.svg')}}" alt="phoneF" class="Timg" style="padding-right: 4%">
                                <p><a href="tel:+380657524265">+380 657 524 265</a></p>
                            </div>
                        </div>
                        <ul class="menu">
                            <li>
                                <a href="{{url("/page=index")}}"><b>Готель</b></a>
                            </li>
                            <li>
                                <a href="{{url("/page=rooms")}}"><b>Номери та ціни</b></a>
                            </li>
                            <li>
                                <a href="{{url("/page=entertainment")}}"><b>Розваги</b></a>
                            </li>
                            <li>
                                <a href="{{url("/page=spa")}}"><b>Спа</b></a>
                            </li>
                            <li>
                                <a href="{{url("/page=restaurant")}}"><b>Ресторан</b></a>
                            </li>
                            <li>
                                <a href="{{url("/page=contacts")}}"><b>Контакти</b></a>
                            </li>
                        </ul>
                        <button class="menuGam">
                            <img src="{{asset('public/img/menuSmall.svg')}}" alt="menuSm" class="menuS">
                        </button>
                    </div>
                </div>
            </div>
        </div>
</header>
@endsection
@section('content')
    <div class="infoContent">
    <section id="hotel" class="hotel">
        <div class="container">
            <div class="hotelInfo">
                <div class="hotelText">
                    <h1>
                        Ресторан
                    </h1>
                </div>
                <div class="about">
                    <div class="mainInfo">
                        <span>
                            Ресторани:
                        </span>
                        <p>
                            Основний ресторан<br>
                            Кафе-кондитерська<br>
                            Снек на пляжі<br>
                            A’la Carte<br>
                            A’la Carte Суші<br>
                            Рибний A'la Carte<br>
                        </p>
                    </div>

                    <div class="additionalInfo">
                        <span>
                            Бари:
                        </span>
                        <p>
                            Бар в лобі та на терасі<br>
                            Лаунж-бар<br>
                            Сервісний бар<br>
                            Бар біля басейну<br>
                            Бар на пляжі<br>
                            Снек-бар<br>
                        </p>
                    </div>

                </div>
                <div class="priceAndBooking">
                    <div class="price">
                        <span>
                            Часи роботи:
                        </span>
                        <p>
                            Ресторани: цілодобово без вихідних;<br>
                            Бари: з 20:00 до 5:00;<br>
                            Алкогольні напої подаються лише особам, що досягли 18 років.<br>
                        </p>
                    </div>
                    <div class="booking">
                        <div class="stars">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
