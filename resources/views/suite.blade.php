@extends('template')
@section('title')
    Suite
@endsection
@section('header')
    <header id="header" class="infoHeader" style="background: url('{{asset('../resources/img/r5.jpg')}}') no-repeat center top / cover">
        <div class="nav">
            <div class="container">
                <div class="top">
                    <div class="logo">
                        <a href="{{url("/page=index")}}"><img src="{{asset('../resources/img/LogoMain.svg')}}" alt="Logo" class="logoImg"></a>
                    </div>
                    <div class="infoMenu">
                        <div class="location">
                            <div class="locA">
                                <img src="{{asset('../resources/img/placeholderTop.svg')}}" alt="phoneF" class="Timg" style="padding-right: 4%">
                                <p> Місто Морське, наб. Морська, 12</p>
                            </div>
                            <div class="locP">
                                <img src="{{asset('../resources/img/phone-callTop.svg')}}" alt="phoneF" class="Timg" style="padding-right: 4%">
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
                            <img src="{{asset('../resources/img/menuSmall.svg')}}" alt="menuSm" class="menuS">
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
                        Suite
                    </h1>
                </div>
                <div class="about">
                    <div class="mainInfo">
                        <span>
                            Інформація про номери даного типу:
                        </span>
                        <p>
                            Площа номера: номер - 100 кв. м, балкон - 10 кв. м;<br>
                            Планування: відкритого типу;<br>
                            Розташування: 1-2 або 2-3 поверх;
                            Вид: на море / на басейни / на сад / на пейзаж;<br>
                            Максимальне розміщення: 4 дорослих / 2 дорослих + 2 дитини.<br>
                        </p>
                    </div>

                    <div class="additionalInfo">
                        <span>
                            Додаткові відомості
                        </span>
                        <p>
                            Номери основної будівлі, оснащені всіма зручностями для ідеального відпочинку.
                            Кімнати обставлені плетеними меблями в светлобежевих тонах,
                            вікна від підлоги до стелі і всі зручності розкішного курорту.<br>
                            ЛІЖКА: Queen size & додаткове ліжко-софа<br>
                            Ванна: Раковина, ванна, WC<br>
                        </p>
                    </div>

                </div>
                <div class="priceAndBooking">
                    <div class="price">
                        <span>
                            Ціна:
                        </span>
                        <p>
                            Land view: 4500 грн/день;<br>
                            Garden view: 4700 грн/день;<br>
                            Pool view: 5000 грн/день;<br>
                            Sea view : 5500 грн/день<br>
                        </p>
                    </div>
                    <div class="booking">
                        <div class="stars">
                            <img src="{{asset('../resources/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('../resources/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('../resources/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('../resources/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('../resources/img/Star.png')}}" alt="star" class="starImg">
                        </div>
                        <div class="button">
                            <a href="{{url("/page=booking")}}">Оформити бронювання</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
