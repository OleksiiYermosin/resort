@extends('template')
@section('title')
    Форму прийнято
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
                        @if(count(session('message'))!=0)
                            @foreach(session('message') as $a)
                                <br>
                                <p>sdfdf</p>
                                {{$a}}
                            @endforeach
                        @else
                            Для виклику майстра необхідно заповнити хоча б номер телефону!
                        @endif

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
