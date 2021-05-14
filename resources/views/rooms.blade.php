@extends('template')
@section('title')
    Номери та ціни
    @endsection
@section('header')
    <header id = "headerC" class = "headerC">
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
    <section id="hotelRooms" class="hotelRooms">
        <div class="container">
            <div class="roomsInfo">
                <div class="roomsText">
                    <h1>DOPKA-resort - НОМЕРИ ТА ЦІНИ</h1>
                    <h4>В готелі <span style="color: #593129; font-weight: 600;">DOPKA-resort</span> є 259 комфортабельних номерів, в яких продумано все до дрібниць для вашого ідеального відпочинку. Ми пропонуємо 6 різних типів номерів: “Standart Room”, ”Standart Jac. Room”, ”Superior Standart”, ”Family Room”, ”Suite” та ”Honey Moon Suite”.</h4>
                </div>
                <div class="roomsBlocks">
                    <div class="roomsBlock">
                        <div class="innerBlockR">
                            <div class="innerPictR">
                                <img src="{{asset('../resources/img/r1.jpg')}}" alt="Room image" class="innerImgR">
                            </div>
                            <div class="innerNameR">
                                <a href="{{url("/page=standardroom")}}">Standard Room</a>
                            </div>
                            <div class="innerPriceR">
                                <p><b>Ціна</b></p>
                                <p>1500-2500 грн</p>
                            </div>
                            <div class="innerLiveR">
                                <p><b>Макс. проживання:</b></p>
                                <p> 1-3 чол</p>
                            </div>
                        </div>
                    </div>
                    <div class="roomsBlock">
                        <div class="innerBlockR">
                            <div class="innerPictR">
                                <img src="{{asset('../resources/img/r2.jpg')}}" alt="Room image" class="innerImgR">
                            </div>
                            <div class="innerNameR">
                                <a href="{{url("/page=standardjacroom")}}">Standard Jac. Room</a>
                            </div>
                            <div class="innerPriceR">
                                <p><b>Ціна</b></p>
                                <p>2000-3000 грн</p>
                            </div>
                            <div class="innerLiveR">
                                <p><b>Макс. проживання:</b></p>
                                <p> 1-3 чол</p>
                            </div>
                        </div>
                    </div>
                    <div class="roomsBlock">
                        <div class="innerBlockR">
                            <div class="innerPictR">
                                <img src="{{asset('../resources/img/r3.jpg')}}" alt="Room image" class="innerImgR">
                            </div>
                            <div class="innerNameR">
                                <a href="{{url("/page=superiorstandardroom")}}">Superior Standard</a>
                            </div>
                            <div class="innerPriceR">
                                <p><b>Ціна</b></p>
                                <p>4000-4500 грн</p>
                            </div>
                            <div class="innerLiveR">
                                <p><b>Макс. проживання:</b></p>
                                <p> 1-3 чол</p>
                            </div>
                        </div>
                    </div>
                    <div class="roomsBlock">
                        <div class="innerBlockR">
                            <div class="innerPictR">
                                <img src="{{asset('../resources/img/r4.jpg')}}" alt="Room image" class="innerImgR">
                            </div>
                            <div class="innerNameR">
                                <a href="{{url("/page=familyroom")}}">Family Room</a>
                            </div>
                            <div class="innerPriceR">
                                <p><b>Ціна</b></p>
                                <p>3500-4500 грн</p>
                            </div>
                            <div class="innerLiveR">
                                <p><b>Макс. проживання:</b></p>
                                <p> 1-4 чол</p>
                            </div>
                        </div>
                    </div>
                    <div class="roomsBlock">
                        <div class="innerBlockR">
                            <div class="innerPictR">
                                <img src="{{asset('../resources/img/r5.jpg')}}" alt="Room image" class="innerImgR">
                            </div>
                            <div class="innerNameR">
                                <a href="{{url("/page=suite")}}">Suite</a>
                            </div>
                            <div class="innerPriceR">
                                <p><b>Ціна</b></p>
                                <p>4500-5500 грн</p>
                            </div>
                            <div class="innerLiveR">
                                <p><b>Макс. проживання:</b></p>
                                <p> 1-4 чол</p>
                            </div>
                        </div>
                    </div>
                    <div class="roomsBlock">
                        <div class="innerBlockR">
                            <div class="innerPictR">
                                <img src="{{asset('../resources/img/r6.jpg')}}" alt="Room image" class="innerImgR">
                            </div>
                            <div class="innerNameR">
                                <a href="{{url("/page=honeymoonsuite")}}">Honey Moon Suite</a>
                            </div>
                            <div class="innerPriceR">
                                <p><b>Ціна</b></p>
                                <p>4500-5500 грн</p>
                            </div>
                            <div class="innerLiveR">
                                <p><b>Макс. проживання:</b></p>
                                <p> 1-2 чол</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="roomService">
                    <h2>Готель DOPKA-resort завжди радий бачити вас нашим гостем!</h2>
                    <h5>Час заїзду - 14:00, час виїзду - 12:0</h5>
                    <h5>До ваших послуг:</h5>
                    <p>- Безкоштовний Wi-Fi у всіх номерах готелю</p>
                    <p>- Безкоштовний тренажерний зал</p>
                    <p>- Служба прийому та розміщення - цілодобово</p>
                    <p>- Служба охорони - цілодобово</p>
                    <p>- Безкоштовна парковка на території готелю</p>
                    <p>- Камера зберігання</p>
                    <p>- Організація екскурсій з українсько- та англомовними гідами</p>
                    <p>- Мінеральна вода в номері (0,33 / чол.) В день заїзду</p>
                    <p>Сніданок в ресторані готелю c 7:30 до 11:00 (у вихідні з 9:00 до 12:00) включений у вартість номера готелю.</p>
                    <p>Безкоштовне проживання в готелі дітей віком до п'яти років в одному номері з батьками без надання додаткового місця.</p>
                    <p>Дитяче ліжечко (за запитом).</p>
                    <h5>Відділ бронювання готелю:</h5>
                    <a href="tel:+380663655429">+38 (066) 365-54-29,</a>
                    <a href="tel:+380581569418">+38 (058) 156-94-18,</a>
                    <a href="tel:+380601862618">+38 (060) 186-26-18.</a>
                    <p>Точна ціна номера готелю за добу проживання вказана в гривнях (UAH) з урахуванням всіх податків. Туристичний збір не входить у вартість номера готелю і оплачується додатково. Оплата здійснюється в гривнях. Сніданок входить у вартість номера. Готель приймає до оплати готівку, кредитні картки Visa та Euro / MasterCard, також можлива безготівкова форма оплати. При ранньому заїзді в готель (з 00:00 до 08:00 години) стягується плата в розмірі 100% ціни номера за 1 добу. При ранньому заїзді в готель (з 08:00 до 14:00 годин) стягується плата в розмірі 50% ціни номера за 1 добу. При пізньому виїзді (з 12:00 до 20:00 години) стягується плата в розмірі 50% ціни номера за 1 добу. При пізньому виїзді (після 20:00) стягується плата в розмірі 100% ціни номера за 1 добу. Номери готелю однієї категорії можуть незначно відрізнятися інтер'єром і обладнанням.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
