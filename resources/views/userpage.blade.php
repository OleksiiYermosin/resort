@extends('template')
@section('title')
    Інформація про бронювання
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
                    <h1>Скасування бронювання</h1>
                    @if(!isset($status)||$status=="error")
                        <h3>Перевірте коректність введених даних</h3>
                    @elseif(empty($rooms[0]))
                        <h3>За введеними даними не виявлено жодного бронювання</h3>
                    @else
                        <h3>Натисніть на хрестик, щоб скасувати бронювання</h3>
                    @endif
                </div>
                @if($status!="error"&&!empty($rooms[0]))
                    <div class="adminBlocks">
                        <div class="mess">
                            @foreach($rooms as $r)
                                <form class="messForm" method="post" action="{{url("/deleteSingleRoom")}}">
                                    <div class="messIn">
                                        <p><span style="color: black">Номер: </span>{{$r->type}} (<span
                                                style="font-weight: normal">{{$r->features}}</span>)
                                        </p>
                                        <p><span style="font-weight: bold">Дата заїзду: </span>{{$r->check_in_date}};
                                            <span
                                                style="font-weight: bold">дата виїзду: </span>{{$r->check_out_date}};
                                        </p>
                                        <input type="hidden" name="client_id" value="{{$r->client_id}}">
                                        <input type="hidden" name="id" value="{{$r->id}}">
                                    </div>
                                    <div class="formFieldsO">
                                        <div class="buttonOpen">
                                            <input type="submit" value="✖" name="send">
                                            <input type="hidden" name="client_id" value="{{$r->client_id}}">
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                        <div class="formFieldsA">
                            <div class="buttonLogin">
                                <input type="submit"  value="Скасувати все" name="cancel" onclick="event.preventDefault();  document.getElementById('submit_form').submit();">
                            </div>
                        </div>
                    </div>
                    <form id="submit_form" method="post" action="{{url("/deleteAllRooms")}}">
                        <input type="hidden" name="client_id" value="{{$rooms[0]->client_id}}">
                    </form>
                @endif

            </div>
        </div>
    </section>
@endsection
