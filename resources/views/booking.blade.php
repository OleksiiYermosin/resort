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
<div class="bookingContent">
    <section id="hotel" class="hotel">
        <div class="container">
            <div class="hotelInfo">
                <div class="hotelText">
                    <h1>
                        Онлайн-бронювання
                    </h1>
                </div>
                <form method="post" action="{{url("/checkForm")}}">
                    <div class="bookingMenu">
                        <div class="bookInfo">

                            <div><label for="start">Дата заїзду</label><input type="date" id="start" name="trip-start"
                                                                              onchange="changeCheckOutDate()" value="2021-05-05"
                                                                              min="2021-05-05" max="2022-12-31"></div>
                            <div><label for="end">Дата виїзду</label><input type="date" id="end" name="trip-end"
                                                                            value="2021-05-05"
                                                                            min="2021-05-05" max="2022-12-31"></div>

                            <div>
                                <label for="start">Номер</label>
                                <select size="1" id="roomType" name="room-type" onchange="changeImage()">
                                    <option value="Standard Room">Standard Room</option>
                                    <option value="Standard Jac. Room">Standard Jac. Room</option>
                                    <option value="Superior Standard">Superior Standard</option>
                                    <option value="Family Room">Family Room</option>
                                    <option value="Suite">Suite</option>
                                    <option value="Honey Moon Suite">Honey Moon Suite</option>
                                </select>
                            </div>
                            <div>
                                <label for="start">Гості</label>
                                <select size="1" id="guests" name="guests">
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div>
                                <label for="start">Вид</label>
                                <select size="1" id="view" name="features">
                                    <option value="Land view">Land view</option>
                                    <option value="Garden view">Garden view</option>
                                    <option value="Pool view">Pool view</option>
                                    <option value="Sea view">Sea view</option>
                                </select>
                            </div>
                            <div>
                                <label for="start">&nbsp;</label>
                                <input type="tel" pattern="^\+\d{1,2}\d{3}\d{7}$" maxlength="13" placeholder="Номер телефону (+380*********)" name="phone">
                            </div>
                            <div>
                                <label for="start">&nbsp;</label>
                                <input type="text" pattern="\D+\s{1}\D+\s{1}\D+$" maxlength="30" placeholder="ПІБ замовника" id="nameSurname" name="nameSurname">
                            </div>
                        </div>

                        <div class="roomImage">
                            <img src="{{asset('public/img/r1.jpg')}}" alt="roomImage"  id="roomChangeableImage">
                        </div>
                    </div>

                    <input type="submit" value="Оформити бронювання">
                    <p style="text-align: right;"><a href="{{url('/page=user')}}" style="text-decoration: none; color: #593129; text-align: end">Скасувати бронювання</a></p>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
