<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <title>Go Travel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{ route('home') }}"><h2>GO TRAVEL</h2></a>
        </div>
       
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                @guest('user')
                <a href="{{ route('dangnhapGet') }}"><i></i>Đăng nhập</a>
                @endguest
                @auth('user')
                <div class="dropdown">
                    <a href="#"><i class="fa fa-user"></i> Xin chào {{ Auth::guard('user')->user()->fullname }}</a>
                    <div class="dropdown-content">
                        <a href="{{ url('/nhanvien/thongtincanhan') }}"><i></i> Thông tin cá nhân</a>
                        <a href="#"><i></i> Thay đổi mật khẩu</a>
                        <a href="{{ route('logout') }}"><i></i> Đăng xuất</a>
                    </div>
                </div>
                @endauth
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="">Tất cả tour du lịch</a></li>
                <li><a href="#">Tìm kiếm</a></li>
                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
      
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> travel?@gmail.vn</li>
                <li>Chào mừng bạn đã đến với Go Travel</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> travel?@gmail.vn</li>
                                <li>Chào mừng bạn đã đến với Go Travel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                @guest('user')
                                <a href="{{ route('dangnhapGet') }}"><i></i>Đăng nhập</a>
                                @endguest
                                @auth('user')
                                <div class="dropdown">
                                    <a href="#"><i class="fa fa-user"></i> Xin chào {{ Auth::guard('user')->user()->fullname }}</a>
                                    <div class="dropdown-content">
                                        <a href="{{ url('/nhanvien/thongtincanhan') }}"><i></i> Thông tin cá nhân</a>
                                        <a href="#"><i></i> Thay đổi mật khẩu</a>
                                        <a href="{{ route('logout') }}"><i></i> Đăng xuất</a>
                                    </div>
                                </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><h2>GO TRAVEL</h2></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ url('home') }}">Trang chủ</a></li>
                            <li><a href="">Tất cả các tour</a></li>
                            <li><a href="#">Tìm kiếm</a></li>
                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                           
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                   
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Địa điểm du lịch</span>
                    </div>
                    <ul>
                        @isset($recordsRegions)
                            @foreach ($recordsRegions as $recordRegion)
                                <li><a href="#">{{ $recordRegion['name'] }}</a></li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="Bạn muốn tìm kiếm gì?">
                            <button type="submit" class="site-btn">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+84.376.97.4917</h5>
                            <span>Hỗ trợ 24/7</span>
                        </div>
                    </div>
                </div>
                @isset($firstTour)
                            @if(count($firstTour)==0)
                            <div class="hero__item set-bg" data-setbg="">
                                <div class="hero__text">
                                    <h2><!-- HIỆN TẠI KHÔNG MỞ TOUR DU LỊCH NÀO --></h2>
                                </div>
                            </div>
                            @else
                            <div class="hero__item set-bg" data-setbg="{{ $firstTour[0]['image'] }}">
                                <div class="hero__text">
                                            <span>TOUR DU LỊCH</span>
                                            <h2>{{ $firstTour[0]['name'] }}</h2>
                                            <a href="#" class="primary-btn">XEM TOUR</a>
                                            <a href="#" class="primary-btn">ĐẶT TOUR</a>
                                </div>
                            </div>
                            @endif
                @endisset
                
            </div>
        </div>
    </div>
</section>
    <!-- Hero Section End -->
<!-- End Header -->

@yield('content')

<!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="#"><h2>GO TRAVEL</h2></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: phường 5,Mỹ Tho-Tiền Giang</li>
                            <li>Số điện thoại: +84.376.97.4917</li>
                            <li>Email: travel@gmail.vn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Thời gian hoạt động</h6>   
                            <p>Thứ hai - Thứ sáu: 07.30am to 17.00pm</p>  
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Tham gia bản tin của chúng tôi ngay bây giờ</h6>
                        <p>Nhận thông tin cập nhật qua Email về các tour mới nhất của chúng tôi.</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập Email của bạn">
                            <button type="submit" class="site-btn">Đăng ký</button>
                        </form>
                        <div class="footer__widget__social">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>