@extends('template')
@section('title')
    Перегляд бронювання
@endsection
@section('header')
    <header id="header" class="adminHeader">
        <div class="nav">
            <div class="container">
                <div class="top">
                    <div class="logo">
                        <a href="{{url("/page=index")}}"><img src="{{asset('public/img/LogoMain.svg')}}" alt="Logo"
                                                              class="logoImg"></a>
                    </div>
                    <div class="infoMenu">
                        <div class="location">
                            <div class="locA">
                                <img src="{{asset('public/img/placeholderTop.svg')}}" alt="phoneF" class="Timg"
                                     style="padding-right: 4%">
                                <p> Місто Морське, наб. Морська, 12</p>
                            </div>
                            <div class="locP">
                                <img src="{{asset('public/img/phone-callTop.svg')}}" alt="phoneF" class="Timg"
                                     style="padding-right: 4%">
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
    <section id="admin" class="admin">
        <div class="container">
            <div class="adminInfo">
                <div class="adminText">
                    <h1>Перегляд заброньованих номерів</h1>
                    <h3>Введіть ПІБ та номер телефону для пошуку номерів</h3>
                </div>
                <div class="adminBlocks">
                    <form class="adminForm" method="post" action="{{url("/checkRooms")}}">
                        <div class="formFieldsA">
                            <input type="text" pattern="\D+\s{1}\D+\s{1}\D+$" maxlength="30" placeholder="Введіть ПІБ" class="enter" name="name">
                            <input type="tel" pattern="^\+\d{1,2}\d{3}\d{7}$" maxlength="13" placeholder="Введіть номер телефону" class="enter" name="phone">
                            <div class="buttonLogin">
                                <input type="submit" value="Перевірити" name="send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

