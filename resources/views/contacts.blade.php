@extends('template')
@section('title')
    Контакти
@endsection
@section('header')
    <header id="header" class="infoHeader"  style="background: url('{{asset('public/img/BookBG.png')}}') no-repeat center top / cover">
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
                        Контакти
                    </h1>
                </div>
                <div class="about">
                    <div class="mainInfo">
                        <span>
                            Місцерозташування:
                        </span>
                        <p>
                            Готель розташований в 100 км від аеропорту м. Містяне, в 35 км від м. Містечкове і в 70 км від аеропорту
                            в м. Містовському. В готелі 259 кімнат і він розрахований на 770 місць.
                        </p>
                    </div>

                    <div class="additionalInfo">
                        <span>
                            Контакти:
                        </span>
                        <p>
                            Поштовий індекс: 01010<br>
                            Адреса: м. Морське, наб. Морська, 12;<br>
                            Телефон: <a href="tel:+380657524265">+380 657 524 265</a>;<br>
                            E-mail: <a href="mailto:dopka_resort@gmail.com">dopka_resort@gmail.com</a>.<br>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="map" style="height: 400px;">
        <div style="overflow:hidden;width:100%;position: relative;">
            <iframe width="100%" height="400"
            src="https://maps.google.com/maps?width=700&amp;height=400&amp;hl=en&amp;q=50%2C12%20Eyl%C3%BCl%20Cd.%2C%20Mudanya%2C%20Turkey+(DopkaResort)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</div>
@endsection
