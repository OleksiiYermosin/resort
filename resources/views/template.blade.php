<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap-grid.css')}}">
    <link rel="shortcut icon" href="{{asset('public/img/favicon.svg')}}" type="image/svg">
</head>
<body>
@yield('header')
@yield('content')
<footer id="footer" class="footer">
    <div class="container">
        <div class="footerInfo">
            <div class="footerBlocks">
                <div class="footerBlock1">
                    <div class="logoF">
                        <a href="{{url("/page=index")}}"><img src="{{asset('public/img/LogoMain.svg')}}" alt="Logo" class="logoImgF"></a>
                    </div>
                    <div class=footerContacts>
                        <a href="#"><img src="{{asset('public/img/instagram.svg')}}" alt="IconInst" class="iconFoot"></a>
                        <a href="#"><img src="{{asset('public/img/youtube.svg')}}" alt="IconYT" class="iconFoot"></a>
                        <a href="#"><img src="{{asset('public/img/telegram.svg')}}" alt="IconTG" class="iconFoot"></a>
                        <a href="#"><img src="{{asset('public/img/facebook.svg')}}" alt="IconFB" class="iconFoot"></a>
                        <a href="#"><img src="{{asset('public/img/twitter.svg')}}" alt="IconTWIT" class="iconFoot"></a>
                    </div>
                    <div class="locationF">
                        <div class="textLoc">
                            <div class="locImg">
                                <img src="{{asset('public/img/placeholderF.svg')}}" alt="Icon" class="locSvg">
                            </div>
                            <div class="locText">
                                <p>м. Морське, наб. Морська, 12</p>
                            </div>
                        </div>
                        <div class="textLoc">
                            <div class="locImg">
                                <img src="{{asset('public/img/phone-callF.svg')}}" alt="Icon" class="locSvg">
                            </div>
                            <div class="locText">
                                <p><a href="tel:+380657524265">+380 657 524 265</a></p>
                            </div>
                        </div>
                        <div class="textLoc">
                            <div class="locImg">
                                <img src="{{asset('public/img/envelopeF.svg')}}" alt="Icon" class="locSvg">
                            </div>
                            <div class="locText">
                                <p>dopka_resort@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation">
                    <p>Карта сайту</p>
                    <a href="{{url("/page=index")}}">Готель</a>
                    <a href="{{url("/page=rooms")}}">Номери та ціни</a>
                    <a href="{{url("/page=entertainment")}}">Розваги</a>
                    <a href="{{url("/page=spa")}}">Спа</a>
                    <a href="{{url("/page=restaurant")}}">Ресторан</a>
                    <a href="{{url("/page=contacts")}}">Контакти</a>
                </div>
                <div class="footerBlock3">
                    <div class="starsF">
                        <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                        <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                        <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                        <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                        <img src="{{asset('public/img/Star.png')}}" alt="star" class="starImg">
                    </div>
                    <div class="copyrights">
                        <img src="{{asset('public/img/copyright.svg')}}" alt="iconCopyright" class="cr">
                        <p>2021. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="{{asset('public/js/main.js')}}"></script>
</body>
</html>
