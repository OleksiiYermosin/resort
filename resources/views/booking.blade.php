@extends('template')
@section('title')
    Бронювання
@endsection
@section('header')
    <header id="header" class="bookingHeader">
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
<div class="bookingContent">
    <section id="hotel" class="hotel">
        <div class="container">
            <div class="hotelInfo">
                <div class="hotelText">
                    <h1>
                        Онлайн-бронювання
                    </h1>
                </div>
                <form action="index.html">
                    <div class="bookingMenu">
                        <div class="bookInfo">

                            <div><label for="start">Дата заїзду</label><input type="date" id="start" name="trip-start"
                                                                              value="2021-05-05"
                                                                              min="2021-05-05" max="2022-12-31"></div>
                            <div><label for="end">Дата виїзду</label><input type="date" id="end" name="trip-start"
                                                                            value="2021-05-05"
                                                                            min="2021-05-05" max="2022-12-31"></div>
                            <div>
                                <select size="1" id="roomType">
                                    <option value="1">Вид номеру</option>
                                    <option value="2">Віп</option>
                                    <option value="3">Люкс</option>
                                    <option value="4">Курятник</option>
                                </select>
                            </div>
                            <div>

                                <select size="1" id="guests">
                                    <option value="1">Гості</option>
                                    <option value="2">Є</option>
                                    <option value="3">Відсутні</option>
                                </select>
                            </div>
                            <div>
                                <input type="text" placeholder="ПІБ замовника" id="nameSurname" name="nameSurname">
                            </div>


                        </div>

                        <div class="roomImage">
                            <img src="{{asset('../resources/img/imgBG.png')}}" alt="roomImage">
                        </div>
                    </div>

                    <input type="submit" value="Оформити бронювання">
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
