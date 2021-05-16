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
                                                                              onchange="changeCheckOutDate()" value="2021-05-05"
                                                                              min="2021-05-05" max="2022-12-31"></div>
                            <div><label for="end">Дата виїзду</label><input type="date" id="end" name="trip-start"
                                                                            value="2021-05-05"
                                                                            min="2021-05-05" max="2022-12-31"></div>

                            <div>
                                <label for="start">Номер</label>
                                <select size="1" id="roomType" onchange="changeImage()">
                                    <option value="1">Standard Room</option>
                                    <option value="2">Standard Jac. Room</option>
                                    <option value="3">Superior Standard</option>
                                    <option value="4">Family Room</option>
                                    <option value="5">Suite</option>
                                    <option value="6">Honey Moon Suite</option>
                                </select>
                            </div>
                            <div>
                                <label for="start">Гості</label>
                                <select size="1" id="guests">
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                            <div>
                                <input type="text" placeholder="ПІБ замовника" id="nameSurname" name="nameSurname">
                            </div>
                        </div>

                        <div class="roomImage">
                            <img src="{{asset('../resources/img/r1.jpg')}}" alt="roomImage"  id="roomChangeableImage">
                        </div>
                    </div>

                    <input type="submit" value="Оформити бронювання">
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
