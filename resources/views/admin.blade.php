@extends('template')
@section('title')
    Авторизація
@endsection
@section('header')
    <header id="header" class="adminHeader">
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
<section id="admin" class="admin">
	<div class="container">
		<div class="adminInfo">
			<div class="adminText">
				<h1>Вхід</h1>
				<h3>Введіть логін та пароль для входу</h3>
			</div>
			<div class="adminBlocks">
				<form class="adminForm" method="post" action="{{ route('login') }}">
                    @csrf
					<div class="formFieldsA">
						<input type="email" placeholder="Введіть пошту" class="enter" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        {{ $message }}
                        @enderror
						<input type="password" placeholder="Введіть пароль" class="enter" name="password" required>
                        @error('password')
                        {{ $message }}
                        @enderror
						<div class="buttonLogin">
							<input type="submit" value="Увійти" name="send">
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</section>
@endsection
