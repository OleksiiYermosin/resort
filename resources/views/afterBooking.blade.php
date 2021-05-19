@extends('template')
@section('title')
    DOPKA-resort
@endsection
@section('header')
    <header id="header" class="bookingHeader">
        <div class="nav">
            <div class="container">
                <div class="top">
                    <div class="logo">
                        <a href="{{url("/page=index")}}"><img src="{{asset('../resources/img/LogoMain.svg')}}"
                                                              alt="Logo" class="logoImg"></a>
                    </div>
                    <div class="infoMenu">
                        <div class="location">
                            <div class="locA">
                                <img src="{{asset('../resources/img/placeholderTop.svg')}}" alt="phoneF" class="Timg"
                                     style="padding-right: 4%">
                                <p> Місто Морське, наб. Морська, 12</p>
                            </div>
                            <div class="locP">
                                <img src="{{asset('../resources/img/phone-callTop.svg')}}" alt="phoneF" class="Timg"
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
                            <img src="{{asset('../resources/img/menuSmall.svg')}}" alt="menuSm" class="menuS">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <section id="hotelRooms" class="hotelRooms">
        <div class="container">
            <div class="roomsInfo">
                @if(session()->has('message'))
                    <div class="roomsText">
                        @if(count(session('message'))<=1)
                            <h1>Форму не прийнято</h1>
                        @else
                            <h1>Форму прийнято</h1>
                        @endif
                    </div>
                    <div class="afterBlocks">
                        @if(count(session('message'))!=0)
                            @foreach(session('message') as $a)
                                <p>{{$a}}</p>
                            @endforeach
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
