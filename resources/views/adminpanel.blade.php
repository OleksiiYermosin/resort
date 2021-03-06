@extends('template')
@section('title')
    Адмін-панель
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
                    <h1>Зворотній зв'язок</h1>
                    <h3>Повідомлення від користувачів</h3>
                </div>
                <div class="adminBlocks">
                    <div class="headAdm">
                        <p class="admName">Ви зайшли під ім'ям: <span
                                style="color: #593129; font-family: 'Montserrat Alternates'; font-weight: bold"> {{ Auth::user()->name }}</span>
                            (<a href="{{ route('logout') }}"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();">вийти</a>)
                        </p>
                        <a href="#" onclick="location.reload(); return false;"><img src="public/img/refresh.svg" alt="Refresh"
                                                                                    class="refreshIcon"></a>
                    </div>
                    <select id="combo2" class="comboAdm" name="select2" onchange="hideRead()">
                        <option>Всі повідомлення</option>
                        <option>Непрочитані</option>
                    </select>
                    <div class="mess">
                        @if(!empty($mails[0]))
                            @foreach($mails as $mail)
                                <form class="messForm" method="post" action="{{url("/markSingleMessage")}}">
                                    <div class="messIn">
                                        <p name="client"><span style="color: black">Від: </span>{{$mail->name}} (<a
                                                href="mailto:{{$mail->email}}">{{$mail->email}}</a>)</p>
                                        <p><span style="font-weight: bold">Текст повідомлення: </span>{{$mail->message}}
                                        </p>
                                        <div style="display: none;" data-value="{{$mail->is_read}}" class="status"></div>
                                        <input type="hidden" name="name" value="{{$mail->name}}">
                                        <input type="hidden" name="mail" value="{{$mail->email}}">
                                        <input type="hidden" name="text" value="{{$mail->message}}">
                                    </div>

                                    <div class="formFieldsO">
                                        @if($mail->is_read==0)
                                            <div class="buttonOpen">
                                                <input type="submit" value="✔" name="send">
                                            </div>
                                        @else
                                            &nbsp;
                                        @endif
                                    </div>
                                </form>
                            @endforeach
                        @else
                            <p><span style="font-weight: bold">Нових повідомлень немає</span></p>
                        @endif
                    </div>
                    <form method="post" action="{{url("/markMessage")}}">
                        <div class="formFieldsA">
                            <div class="buttonLogin">
                                <input type="hidden" name="mails" value="{{base64_encode(json_encode($mails))}}">
                                <input type="submit" value="Прочитано" name="send">
                            </div>
                        </div>
                    </form>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
