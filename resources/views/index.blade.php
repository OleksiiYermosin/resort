@extends('template')
@section('title')
    DOPKA-resort
@endsection
@section('header')
    <header id = "header" class = "header">
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
        <div class="mainInfo">
            <div class="container">
                <div class="info">
                    <div class="infoBG">
                        <div class="stars">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                            <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                        </div>
                        <div class="infoTxt">
                            <p>
                                Ласкаво просимо в чарівний світ готелю  <span style="color: #E7A63F; font-weight: bold;">DOPKA-resort</span>! Починаючи від номерів та спа-центру і закінчуючи ресторанами і розважальними заходами - все в нашому готелі ретельно продумано для того, щоб надати нашим дорогим гостям найкращий сервіс та якість!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bookingMain">
            <div class="container">
                <div class="orderMain">
                    <div class="formShells">
                        <img src="{{asset('public/img/shells.png')}}" alt="Shells" class="shells">
                    </div>
                    <div class="buttonBook">
                        <a href="{{url('/page=booking')}}">
                            Перевірити наявність місць
                        </a>
                    </div>
                    <div class="formShells">
                        <img src="{{asset('public/img/shells.png')}}" alt="Shells" class="shells">
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <section id="hotel" class="hotel">
        <div class="container">
            <div class="hotelInfo">
                <div class="hotelText">
                    <h1>
                        DOPKA-resort
                    </h1>
                    <h3>
                        resort hotel & spa
                    </h3>
                    <h4>
                        Уявіть собі місце, де йдуть рука об руку море і природа. Це місце - Країна Вічної Лазурі. І в цьому чарівному місці уявіть собі готель. Готель з приголомшливим оформленням, розташований на лоні незайманої природи - готель, який віднесе вас за собою в світ мрій. Цей готель - <span style="color: #593129; font-weight: 600;">DOPKA-resort</span>.
                    </h4>
                </div>
                <div class="hotelBlocks">
                    <div class="hotelBlock">
                        <div class="innerBlockH">
                            <div class="innerPictH">
                                <img src="{{asset('public/img/imgAb1.jpg')}}" alt="About image" class="innerImgH">
                            </div>
                            <div class="innerTextH">
                                <p><span style="font-weight: bold;">Номери та ціни</span></p>
                                <p>В готелі DOPKA-resort є 259 комфортабельних номерів, в яких продумано все до дрібниць для вашого ідеального відпочинку. Ми пропонуємо різні типи номерів: </p>
                                <ul class="listRooms">
                                    <li>Standart Room</li>
                                    <li>Standart Jac. Room</li>
                                    <li>Superior Standart</li>
                                    <li>Family Room</li>
                                    <li>Suite</li>
                                    <li>Honey Moon Suite</li>
                                </ul>
                            </div>
                            <a href="{{url('/page=rooms')}}" class="innerDetH">Детальніше ></a>
                        </div>
                    </div>
                    <div class="hotelBlock">
                        <div class="innerBlockH">
                            <div class="innerPictH">
                                <img src="{{asset('public/img/imgAb2.jpg')}}" alt="About image" class="innerImgH">
                            </div>
                            <div class="innerTextH">
                                <p><span style="font-weight: bold;">Розваги</span></p>
                                <p>Для того, щоб ваш відпочинок був цікавим та нaсиченим подіями, готель DOPKA-resort пропонує вам курси танців, концерти відомих танцювальних груп, вечори живої музики, нічні вечірки біля басейну, акробатичні шоу, вечірки на пляжі та безкоштовний курс коктейлів</p>
                            </div>
                            <a href="{{url('/page=entertainment')}}" class="innerDetH">Детальніше ></a>
                        </div>
                    </div>
                    <div class="hotelBlock">
                        <div class="innerBlockH">
                            <div class="innerPictH">
                                <img src="{{asset('public/img/imgAb3.jpg')}}" alt="About image" class="innerImgH">
                            </div>
                            <div class="innerTextH">
                                <p><span style="font-weight: bold;">Спа-центр</span></p>
                                <p>Відпочити від яскравих вражень та потурбуватись про себе ви можете у спа-центрі нашого готелю. Вам будуть запропоновані такі послуги, як критий басейн, фітнес-зала, турецька лазня, сауна, парова кімната, масажі, послуги в хамамі та інші процедури догляду за шкірою і тілом</p>
                            </div>
                            <a href="{{url('/page=spa')}}" class="innerDetH">Детальніше ></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="social" class="social">
        <div class="container">
            <div class="socialInfo">
                <div class="socialText">
                    <h1>
                        Ми у соц-мережах
                    </h1>
                </div>
                <div class="socialBlocks">
                    <div class="socialBlock">
                        <div class="innerBlockS">
                            <div class="innerPictS">
                                <a href="#"><img src="{{asset('public/img/inst.svg')}}" alt="Social image" class="innerImgS"></a>
                            </div>
                            <div class="innerTextS">
                                <p>Найбільш свіжі фотографії високої якості ви можете знайти на нашій сторінці в Instagram</p>
                            </div>
                        </div>
                    </div>
                    <div class="socialBlock">
                        <div class="innerBlockS">
                            <div class="innerPictS">
                                <a href="#"><img src="{{asset('public/img/yt.svg')}}" alt="Social image" class="innerImgS"></a>
                            </div>
                            <div class="innerTextS">
                                <p>На YouTube-каналі ви можете слідкувати за нашими новими відео</p>
                            </div>
                        </div>
                    </div>
                    <div class="socialBlock">
                        <div class="innerBlockS">
                            <div class="innerPictS">
                                <a href="#"><img src="{{asset('public/img/tg.svg')}}" alt="Social image" class="innerImgS"></a>
                            </div>
                            <div class="innerTextS">
                                <p>Залиште відгук про ваш відпочинок у готелі на нашому Telegram-каналі</p>
                            </div>
                        </div>
                    </div>
                    <div class="socialBlock">
                        <div class="innerBlockS">
                            <div class="innerPictS">
                                <a href="#"><img src="{{asset('public/img/fb.svg')}}" alt="Social image" class="innerImgS"></a>
                            </div>
                            <div class="innerTextS">
                                <p>Натисніть «like» для того, щоб стежити за всіма  новинами та промо-акціями</p>
                            </div>
                        </div>
                    </div>
                    <div class="socialBlock">
                        <div class="innerBlockS">
                            <div class="innerPictS">
                                <a href="#"><img src="{{asset('public/img/twit.svg')}}" alt="Social image" class="innerImgS"></a>
                            </div>
                            <div class="innerTextS">
                                <p>Не упускайте знижки, стежачи за постами в нашому мікро-блозі</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <div class="container">
            <div class="contactsInfo">
                <div class="contactsText">
                    <h1>КОНТАКТИ</h1>
                    <h3>зв’яжіться з нами</h3>
                </div>
                <div class="contactsBlocks">
                    <form class="contactsForm" method="post" action="{{url("/sendMessage")}}">
                        <div class="formFields">
                            <input type="text" placeholder="Введіть ім'я" class="enter" name="name">
                            <input type="email" placeholder="Введіть email" class="enter" name="email">
                            <textarea placeholder="Введіть повідомлення" rows="5" class="textArea" name="text"></textarea>
                            <div class="buttonEnter">
                                <input type="submit" value="Надіслати" name="send">
                            </div>
                            <div class="formShells">
                                <img src="{{asset('public/img/shells.png')}}" alt="Shells" class="shells">
                            </div>
                        </div>
                    </form>
                    <div class="contactsLoc">
                        <div class="textLoc">
                            <div class="locImg">
                                <img src="{{asset('public/img/placeholder.svg')}}" alt="Icon" class="locSvg">
                            </div>
                            <div class="locText">
                                <p>м. Морське, наб. Морська, 12</p>
                            </div>
                        </div>
                        <div class="textLoc">
                            <div class="locImg">
                                <img src="{{asset('public/img/phone-call.svg')}}" alt="Icon" class="locSvg">
                            </div>
                            <div class="locText">
                                <p><a href="tel:+380657524265">+380 657 524 265</a></p>
                            </div>
                        </div>
                        <div class="textLoc">
                            <div class="locImg">
                                <img src="{{asset('public/img/envelope2.svg')}}" alt="Icon" class="locSvg">
                            </div>
                            <div class="locText">
                                <p>dopka_resort@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
