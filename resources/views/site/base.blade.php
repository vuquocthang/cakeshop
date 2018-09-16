<!DOCTYPE html>
<html lang="vi" >

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>
        Shop Bánh Ngọt
    </title>

    <link rel="canonical" href="https://cakeshop.bizwebvietnam.net" />
    <link rel="icon" href="favicon.png-1492160624824.png" type="image/x-icon" />


    <!-- fonts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ url('site') }}/bootstrap.min.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/jquery.vegas.min.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/animate.min.scss.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/owl.carousel.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/owl.theme.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/owl.transitions.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/owl.transitions.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/pixeden-icons.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/styles.scss.css-1492160624824.css" rel="stylesheet" id="theme-config-link" />
    <link href="{{ url('site') }}/style_update.scss.css-1492160624824.css"  rel='stylesheet' type='text/css' />
    <link href="{{ url('site') }}/responsive.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/jgrowl.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/magnific-popup.css-1492160624824.css"  rel="stylesheet" />
    <link href="{{ url('site') }}/jquery.fancybox.css-1492160624824.css"  rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,vietnamese" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />


    <!--[if lt IE 9]>
    <script src="{{ url('site') }}/html5.js" ></script>
    <script src="{{ url('site') }}/css3-mediaqueries.js" ></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type='text/javascript'></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ url('site') }}/bizweb-cff-quick-view.css-1492160624824.css" />
    <link rel="stylesheet" href="{{ url('site') }}/bizweb-cff-jquery.fancybox.css-1492160624824.css" />

</head>

<body class="">

<header id="home" class="header">
    <!-- TOP BAR -->
    <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header responsive-logo">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a title="Shop Bánh Ngọt" href="index.htm" >

                        <img alt="Shop Bánh Ngọt" src="{{ url('site') }}/logo.png-1492160624824.png" />

                    </a>
                </div>
            </div>
            <nav class="navbar-collapse collapse menu_max768" role="navigation" id="bs-navbar-collapse">
                <ul class="nav navbar-nav xx navbar-right responsive-nav main-nav-list">

                    <li class="level0 parent active">
                        <a href="{{ url('home') }}" >
                            <span>Trang chủ</span>
                        </a>
                    </li>

                    <li class="level0 parent ">
                        <a href="">
                            <span>Giới thiệu</span>
                        </a>
                    </li>

                    <li class="level0 parent drop-menu ">
                        <a href="#">
                            <span>Sản phẩm</span>
                            <span class="plus"><i class="fa fa-plus-square-o"></i></span>
                        </a>

                        <ul class="level1">

                            @foreach($AllCatalog as $catalog)
                                <li class="level1">
                                    <a href="{{ url('catalog/'. $catalog->id ) }}" >
                                        <span>{{ $catalog->catalogName }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>

                    </li>

                    <li class="level0 parent ">
                        <a href="" ><span>Tin tức</span></a></li>

                    <li class="level0 parent ">
                        <a href="">
                            <span>Liên hệ</span>
                        </a>
                    </li>

                    <div class="mt_cusme">

                        @if(\Illuminate\Support\Facades\Session::get('userId') == null)
                        <li class="log register">
                            <a href="{{ url('registerForm') }}">Đăng ký</a>
                        </li>

                        <li class="log login">
                            <a href="{{ url('loginForm') }}" id='customer_login_link'>Đăng nhập</a>
                        </li>
                        @else
                            <li class="log profile">
                                <a href="{{ url('profile') }}" id='customer_login_link'>Trang Khách Hàng</a>
                            </li>
                        @endif

                        <li class="log cart mtcart">
                            <a href="{{ url('cart') }}" >
                                <span class="title">Giỏ hàng: </span>
                                <span id="cart-total">
                                    <span class="mtitems">{{ \Illuminate\Support\Facades\Session::get('cart') == null ? 0 : count(\Illuminate\Support\Facades\Session::get('cart')) }}</span>
                                    <!--(<span class="mtprice">0₫</span>)-->
                                </span>
                            </a>
                        </li>
                    </div>
                </ul>

            </nav>
        </div>
    </div>
    <!-- / END TOP BAR -->
    <!-- BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES -->
    @section('header-image')
    <div class="container">
        <!-- HEADING -->
        <!-- CALL TO ACTION BUTTONS -->
        <div class="buttons inpage-scroll">
            <img src="{{ url('site') }}/slider.png-1492160624824.png" alt="Shop Bánh Ngọt" />
        </div>
    </div>
    @show
    <!-- / END BIG HEADING WITH CALL TO ACTION BUTTONS AND SHORT MESSAGES  -->
</header>
<!-- / END HOME SECTION  -->

@section('content')
<section id="content">

    <section class="about-us" id="aboutus">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <!-- SECTION TITLE -->
                <h2 class="dark-text">Sweet cake</h2>
                <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
                <h6 class="dark-text">
                    Mang đến những chiếc bánh ngọt ngào là hạnh phúc của chúng tôi
                </h6>
            </div>
            <!-- / END SECTION HEADER -->
            <!-- 3 COLUMNS OF ABOUT US-->
            <div class="row">
                <!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->
                <div class="col-lg-4 col-md-4 column">
                    <div class="big-intro wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <img src="{{ url('site') }}/tiembanh.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/tiembanh.png?1492160624824" alt="Shop Bánh Ngọt" />
                    </div>
                </div>
                <!-- COLUMN 2 - BRIEF ABOUT THE COMPANY-->
                <div class="col-lg-4 col-md-4 column">
                    <p class="typo-about wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <img src="{{ url('site') }}/typo-about.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/typo-about.png?1492160624824" alt="Shop Bánh Ngọt" />
                    </p>
                    <p class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        Được tận hưởng cảm xúc thi vị của phố cổ, mà còn được thưởng thức hương vị Pháp ngay trong lòng Thủ Đô. Nằm trên con phố đông đúc và cổ kính, Bánh Ngọt Pháp Anh Hòa từ lâu đã trở thành điểm đến của những người yêu thích Bánh Ngọt Pháp
                    </p>
                </div>
                <!-- COLUMN 1 - SKILSS-->
                <div class="col-lg-4 col-md-4 column">
                    <ul class="skills wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <!-- SKILL ONE -->
                        <li class="skill">
                            <div class="skill-count">
                                <span class="icon"><img src="{{ url('site') }}/tick-icon.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/tick-icon.png?1492160624824" alt="Shop Bánh Ngọt"/></span>
                            </div>
                            <h6><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/collections/nguyen-lieu  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/collections/nguyen-lieu%27" tppabs="http://cakeshop.bizwebvietnam.net/collections/nguyen-lieu">Nguyên liệu</a></h6>
                            <p>
                                Chúng tôi chuyên cung cấp các nguyên liệu, dụng cụ làm bánh nhập khẩu.
                            </p>
                        </li>
                        <!-- SKILL TWO -->
                        <li class="skill">
                            <div class="skill-count">
                                <span class="icon"><img src="{{ url('site') }}/tick-icon.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/tick-icon.png?1492160624824" alt="Shop Bánh Ngọt"/></span>
                            </div>
                            <h6><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/collections/banh-ngot-1  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/collections/banh-ngot-1%27" tppabs="http://cakeshop.bizwebvietnam.net/collections/banh-ngot-1">Bánh ngọt</a></h6>
                            <p>
                                Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
                            </p>
                        </li>
                        <!-- SKILL THREE -->
                        <li class="skill">
                            <div class="skill-count">
                                <span class="icon"><img src="{{ url('site') }}/tick-icon.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/tick-icon.png?1492160624824" alt="Shop Bánh Ngọt"/></span>
                            </div>
                            <h6><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/collections/banh-gato  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/collections/banh-gato%27" tppabs="http://cakeshop.bizwebvietnam.net/collections/banh-gato">Bánh Gato</a></h6>
                            <p>
                                Những mẫu bánh mới nhất trong năm nay do chính chúng tôi thiết kế.
                            </p>
                        </li>

                        <!-- SKILL FOUR -->
                        <li class="skill">
                            <div class="skill-count">
                                <span class="icon"><img src="{{ url('site') }}/tick-icon.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/tick-icon.png?1492160624824" alt="Shop Bánh Ngọt"/></span>
                            </div>
                            <h6><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/tin-tuc  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/tin-tuc%27" tppabs="http://cakeshop.bizwebvietnam.net/tin-tuc">Kinh nghiệm làm bánh</a></h6>
                            <p>
                                Hướng dẫn và chia sẻ kinh nghiệm để tạo ra những sản phẩm tốt nhất.
                            </p>
                        </li>

                    </ul>
                </div>
                <!-- / END SKILLS COLUMN-->
            </div>
            <!-- / END 3 COLUMNS OF ABOUT US-->
            <!-- CLIENTS -->

            <div class="our-clients">
                <h5><span class="section-footer-title">HÌNH ẢNH TIỆM BÁNH NGỌT NGÀO</span></h5>
            </div>
            <div class="brand-logo client-list">
                <div class="container">
                    <div class="slider-items-products wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col6">
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/1.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/1.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/2.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/2.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/3.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/3.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/4.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/4.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/5.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/5.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/6.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/6.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/7.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/7.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/8.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/8.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/9.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/9.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{ url('site') }}/10.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/10.png?1492160624824" alt="Shop Bánh Ngọt"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- / END CONTAINER -->
    </section>
    <!-- END ABOUT US SECTION -->

    <h1 class="hidden-xs hidden-sm hidden-md hidden-lg">Shop Bánh Ngọt</h1>

    <section class="stats">
        <div class="container">
            <!-- STATS -->
            <div class="row">
                <!-- START COLUMN -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="icon-top red-text">
                            <i class="icon-design-graphic-tablet-streamline-tablet"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text red-border-bottom">1,236</h3>
                            <h6>Khách hàng của chúng tôi</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->

                <!-- START COLUMN -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.25s" data-wow-delay="0.2s">
                        <div class="icon-top green-text">
                            <i class="icon-man-people-streamline-user"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text green-border-bottom">5</h3>
                            <h6>Chi nhánh</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->

                <!-- START COLUMN -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="icon-top blue-text">
                            <i class="icon-email-mail-streamline"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text blue-border-bottom">56,236</h3>
                            <h6>Số lượng bánh tiêu thụ hằng năm</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->

                <!-- START COLUMN -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="stat wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.75s" data-wow-delay="0.4s">
                        <div class="icon-top yellow-text">
                            <i class="icon-picture-streamline-1"></i>
                        </div>
                        <div class="stat-text">
                            <h3 class="white-text yellow-border-bottom">20</h3>
                            <h6>Thị trường các nước</h6>
                        </div>
                    </div>
                </div>
                <!-- / END COLUMN -->
            </div>
        </div>
    </section>

    <section class="our-team" id="team">
        <div class="container">
            <div class="section-header">
                <h2 class="dark-text">Mẫu bán chạy</h2>

                <h6>
                    Những mẫu sản phẩm được khách hàng lựa chọn nhiều.
                </h6>
            </div>
            <!-- PRODUCTS -->
            <div class="row wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="0.5s" data-wow-delay="0.1s">

                @for($i=0; $i<8 ; $i++)

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="items_product item-1">
                            <div class="item-overlay">
                                <img src="{{ url('upload/' . $AllProduct[$i]->productImageLink ) }}" alt="Mứt kem">
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">
                                            <div class="item-top-title">
                                                <h3>
                                                    <a href="{{ url('product/' . $AllProduct[$i]->id ) }}"  title="Mứt kem">
                                                        {{ $AllProduct[$i]->productName }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="item-product-price">

                                            <!-- PRICE -->

                                            <p class="price-num green-text">
                                                {{$AllProduct[$i]->productPrice}} ₫
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <!-- ITEM HOVER CONTENT-->
                                <div class="item-add-content">
                                    <div class="item-add-content-inner">
                                        <div class="section">
                                            <p>
                                                Tư vấn: (84-4) 6674 2332
                                            </p>
                                        </div>
                                        <div class="section">
                                            <a href="{{ url('product/' . $AllProduct[$i]->id ) }}" class="btn btn-primary custom-button red-btn">Chi tiết</a>
                                            <form action="" method="post" class="variants" id="product-actions-286940" enctype="multipart/form-data">

                                                <button class="btn btn-primary custom-button green-btn btn-more" title="Chọn sản phẩm" type="button" onclick="window.location.href='http://cakeshop.bizwebvietnam.net/mut-kem'"><span>Chọn sản phẩm</span></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endfor

            </div>
            <!-- END FIRST ROW -->
        </div>
    </section>

    <section class="packages hidden-xs" id="pricingtable">
        <div class="container">
            <div class="section-header">
                <h2 class="white-text">Liên hệ đặt bánh</h2>
                <h6 class="white-text">
                    Hãy gọi cho chúng tôi ngay để bạn có được những sản phẩm tốt nhất
                </h6>
                <span class="hotline">Hotline: 04.66742332</span>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="dark-text">Kinh nghiệm làm bánh</h2>
                <h6>
                    Những bài viết về kinh nghiệm làm bánh cũng như hướng dẫn bạn tự làm làm ra một chiếc bánh tặng bạn hay ai đó.
                </h6>
            </div>
            <div class="row">

                <div class="mt_feat col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="0.75s" data-wow-delay="0.1s">
                    <div class="feature">
                        <div class="feature-icon">
                            <a class="ft-thumb" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh-1  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh-1%27" tppabs="http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh-1">

                                <img src="{{ url('site') }}/fhgfg.jpg-v=1446696517373.jpg" tppabs="http://bizweb.dktcdn.net/thumb/medium/100/017/024/articles/fhgfg.jpg?v=1446696517373" alt="Hướng dẫn làm bánh su kem tại nhà thật ngon">

                            </a>
                        </div>
                        <h3><a class="blog-title" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh-1  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh-1%27" tppabs="http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh-1">Hướng dẫn làm bánh su kem tại nhà thật ngon</a></h3>
                        <div class="blog-info">
                            Đăng bởi <a>Long</a> | 06/10/2015 | 0 bình luận
                        </div>
                        <p> Những chiếc bánh su nhân kem tươi truyền thống đã quá đơn điệu, thêm một chút hương vị độc đáo của sầu riêng vào sẽ mang đến một hương vị hoàn toàn mới cho những chiếc bánh đấy! Cùng Scake shop học cách làm...</p>
                    </div>
                </div>

                <div class="mt_feat col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="0.75s" data-wow-delay="0.1s">
                    <div class="feature">
                        <div class="feature-icon">
                            <a class="ft-thumb" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/bi-quyet-la-cupcake-vung-den-thom-mat-1  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/bi-quyet-la-cupcake-vung-den-thom-mat-1%27" tppabs="http://cakeshop.bizwebvietnam.net/bi-quyet-la-cupcake-vung-den-thom-mat-1">

                                <img src="{{ url('site') }}/010909mbtsandwichsp1.jpg-v=1446701491727.jpg" tppabs="http://bizweb.dktcdn.net/thumb/medium/100/017/024/articles/010909mbtsandwichsp1.jpg?v=1446701491727" alt="Cách làm bánh mì kẹp mì độc đáo">

                            </a>
                        </div>
                        <h3><a class="blog-title" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/bi-quyet-la-cupcake-vung-den-thom-mat-1  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/bi-quyet-la-cupcake-vung-den-thom-mat-1%27" tppabs="http://cakeshop.bizwebvietnam.net/bi-quyet-la-cupcake-vung-den-thom-mat-1">Cách làm bánh mì kẹp mì độc đáo</a></h3>
                        <div class="blog-info">
                            Đăng bởi <a>Long</a> | 30/09/2015 | 7 bình luận
                        </div>
                        <p> Mì ramen thơm lừng được kẹp trong bánh mì sẽ là một món mới lạ miệng mà ngon tuyệt khiến bạn không thể nào bỏ qua đâu đấy! Cùng Scakeshop học cách làm bánh mì kẹp mì độc đáo này nhé! ...

                        </p>
                    </div>
                </div>

                <div class="mt_feat col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="0.75s" data-wow-delay="0.1s">
                    <div class="feature">
                        <div class="feature-icon">
                            <a class="ft-thumb" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/cach-lam-banh-flan-tai-nha-don-gian-1  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/cach-lam-banh-flan-tai-nha-don-gian-1%27" tppabs="http://cakeshop.bizwebvietnam.net/cach-lam-banh-flan-tai-nha-don-gian-1">

                                <img src="{{ url('site') }}/tin4-fe6d1bea-eda1-4d49-be04-65c36fd56fc3.jpg-v=1443630755000.jpg" tppabs="http://bizweb.dktcdn.net/thumb/medium/100/017/024/articles/tin4-fe6d1bea-eda1-4d49-be04-65c36fd56fc3.jpg?v=1443630755000" alt="Cách làm bánh flan tại nhà đơn giản">

                            </a>
                        </div>
                        <h3><a class="blog-title" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/cach-lam-banh-flan-tai-nha-don-gian-1  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/cach-lam-banh-flan-tai-nha-don-gian-1%27" tppabs="http://cakeshop.bizwebvietnam.net/cach-lam-banh-flan-tai-nha-don-gian-1">Cách làm bánh flan tại nhà đơn giản</a></h3>
                        <div class="blog-info">
                            Đăng bởi <a>Long</a> | 30/09/2015 | 1 bình luận
                        </div>
                        <p> Bánh flan là món ăn được rất nhiều người yêu thích, đặc biệt là các bé yêu vì mùi vị thơm ngon, hấp dẫn và vô cùng bổ dưỡng của nó. Scakeshop sẽ hướng dẫn cách làm bánh flan đơn giản tại nhà để...</p>
                    </div>
                </div>

                <div class="mt_feat col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="0.75s" data-wow-delay="0.1s">
                    <div class="feature">
                        <div class="feature-icon">
                            <a class="ft-thumb" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh%27" tppabs="http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh">

                                <img src="{{ url('site') }}/79061-0-slide-2.jpg-v=1446698692907.jpg" tppabs="http://bizweb.dktcdn.net/thumb/medium/100/017/024/articles/79061-0-slide-2.jpg?v=1446698692907" alt="Cách làm bánh gato sữa béo thơm ngậy">

                            </a>
                        </div>
                        <h3><a class="blog-title" href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh%27" tppabs="http://cakeshop.bizwebvietnam.net/cach-lam-mousse-chanh-leo-doc-dao-bat-ngo-cho-gia-dinh">Cách làm bánh gato sữa béo thơm ngậy</a></h3>
                        <div class="blog-info">
                            Đăng bởi <a>Long</a> | 30/09/2015 | 0 bình luận
                        </div>
                        <p> Bánh gato sữa béo nổi tiếng ở nhiều vùng Mỹ-latinh với phần kem béo ngậy và cốt bánh thơm mùi sữa. Bạn nào yêu thích những chiếc bánh béo ngậy làm từ sữa sẽ không thể bỏ qua chiếc bánh gato sữa béo...</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="products" data-type="background" data-speed="1" id="products">
        <div class="color-overlay">
            <div class="container">
                <div class="section-header">
                    <h2 class="white-text">Dụng cụ làm bánh</h2>

                    <h6 class="white-text">
                        Chúng tôi cung cấp dụng cụ làm bánh được nhập khẩu từ các nước uy tín đã được chứng nhận và kiểm nghiệm an toàn.
                    </h6>
                </div>
                <!-- PRODUCTS -->
                <div class="row wow fadeInLeft animated animated" data-wow-offset="30" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;">

                </div>
            </div>
        </div>
    </section>

    <section class="newsletter hidden-xs">
        <div class="container">
            <h2 class="white-text wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                Đăng ký nhận email
            </h2>
            <div class="sub-heading white-text wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.25s" data-wow-delay="0.1s">
                Hãy nhập email của bạn vào bên dưới
            </div>

            <form action="http://dkt.us13.list-manage.com/subscribe/post?u=0bafe4be7e17843051883e746&id=3bdd6e9e3b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="subscription wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" role="form">
                <input id="email" name="EMAIL" type="email" value="" class="input_newsletter form-control input-box" placeholder="Nhập email để nhận tin khuyến mãi">
                <input type="submit" class="btn btn-primary custom-button red-btn" id="subscribe" name="subscribe" value="Gửi đi">
            </form>
        </div>
    </section>

    <section class="testimonial" id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="white-text">Ý kiến khách hàng</h2>
                <h6 class="white-text">
                    Chúng tôi luôn tôn trọng mọi ý kiến của khách hàng. Chúng tôi luôn luôn phát triển để mang lại dịch vụ tốt nhất cho khách hàng
                </h6>
            </div>

            <!-- CLIENT FEEDBACKS -->
            <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <div class="col-md-12">
                    <div id="client-feedbacks" class="owl-carousel owl-theme">
                        <div class="feedback-box">
                            <div class="message">
                                "Bánh của Sweet Cake rất ngon và đẹp mắt. Tôi rất vừa lòng với chất lượng bánh tại đây. Tôi sẽ là khách hàng trung thành của cửa hàng và giới thiệu cho bạn bè của tôi nữa"
                            </div>
                            <div class="client">
                                <div class="quote blue-text">
                                    <i class="icon-fontawesome-webfont-294"></i>
                                </div>
                                <div class="client-info">
                                    <a class="client-name" href="">Nguyễn Ngọc Hân</a>
                                    <div class="client-company">
                                        Nhân viên ngân hàng
                                    </div>
                                </div>
                                <div class="client-image">
                                    <img src="{{ url('site') }}/11.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/11.png?1492160624824" alt="Shop Bánh Ngọt" />
                                </div>
                            </div>
                        </div>
                        <div class="feedback-box">
                            <div class="message">
                                "Cảm ơn Sweet Cake đã mang đến những những chiếc bánh ngọt ngào nhất. Tôi không chỉ thấy sản phẩm đẹp mắt và đáng yêu mà còn rất ngon miệng, các con tôi rất thích. Cảm ơn Sweet Cake nhiều.!"
                            </div>
                            <div class="client">
                                <div class="quote blue-text">
                                    <i class="icon-fontawesome-webfont-294"></i>
                                </div>
                                <div class="client-info">
                                    <a class="client-name" href=""> Lê Trần Minh</a>
                                    <div class="client-company">
                                        Nhân viên văn phòng
                                    </div>
                                </div>
                                <div class="client-image">
                                    <img src="{{ url('site') }}/22.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/22.png?1492160624824" alt="Shop Bánh Ngọt" />
                                </div>
                            </div>
                        </div>
                        <div class="feedback-box">
                            <div class="message">
                                "Tôi rất hài lòng với những sản phẩm của các bạn. Chúng thật là đẹp và điều đó góp phần làm cho những sự kiện của chúng tôi thêm sang trọng và ấm áp hơn. Chúc Sweet Cake luôn phát đạt."
                            </div>
                            <div class="client">
                                <div class="quote blue-text">
                                    <i class="icon-fontawesome-webfont-294"></i>
                                </div>
                                <div class="client-info">
                                    <a class="client-name" href="">Trần Mai Anh</a>
                                    <div class="client-company">
                                        Quản lý nhà hàng
                                    </div>
                                </div>
                                <div class="client-image">
                                    <img src="{{ url('site') }}/33.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/33.png?1492160624824" alt="Shop Bánh Ngọt" />
                                </div>
                            </div>
                        </div>
                        <div class="feedback-box">
                            <div class="message">
                                "Tôi rất thích những chiếc bánh được tạo ra từ Sweet Cake, vừa đẹp mắt mà vừa ngon miệng, ngày nào tôi cũng ghé qua cửa hàng của Sweet Cake và mua một chiếc bánh để thưởng thức."
                            </div>
                            <div class="client">
                                <div class="quote green-text">
                                    <i class="icon-fontawesome-webfont-294"></i>
                                </div>
                                <div class="client-info">
                                    <a class="client-name" href="">Đặng Thanh Vân</a>
                                    <div class="client-company">
                                        Nhân viên văn phòng
                                    </div>
                                </div>
                                <div class="client-image">
                                    <img src="{{ url('site') }}/44.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/44.png?1492160624824" alt="Shop Bánh Ngọt" />
                                </div>
                            </div>
                        </div>
                        <div class="feedback-box">
                            <div class="message">
                                "Các con tôi rất thích bánh của tiệm Sweet Cake, sinh nhật hoặc các dịp lễ đặc biệt là tôi và các con đều chọn đặt bánh tại Sweet Cake. Tôi rất hài lòng với chất lượng bánh và sự phục vụ của các bạn."
                            </div>
                            <div class="client">
                                <div class="quote green-text">
                                    <i class="icon-fontawesome-webfont-294"></i>
                                </div>
                                <div class="client-info">
                                    <a class="client-name" href="">Đặng Thanh Vân</a>
                                    <div class="client-company">
                                        Nội trợ
                                    </div>
                                </div>
                                <div class="client-image">
                                    <img src="55.png-1492160624824.png" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/55.png?1492160624824" alt="Shop Bánh Ngọt" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<!-- #content -->

<section class="contact-us" id="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="white-text">Gửi ý kiến phản hồi cho chúng tôi</h2>
            <h6 class="white-text">
                Để nhận được dịch vụ chăm sóc tốt nhất, bạn nên điền đầy đủ thông tin bên dưới và gửi cho chúng tôi.
            </h6>
        </div>
        <div class="row">
            <form accept-charset='UTF-8' action="http://cakeshop.bizwebvietnam.net/contact" id='contact' method='post'>
                <input name='FormType' type='hidden' value='contact' />
                <input name='utf8' type='hidden' value='true' />

                <form role="form" class="contact-form" id="contact-form">
                    <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <div class="col-lg-4 col-sm-4">
                            <input type="text" placeholder="Họ tên" class="form-control input-box" id="name" name="contact[Name]" value="" />
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <input type="email" placeholder="Email" class="form-control input-box" id="email" name="contact[Email]" value="" />
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <input type="text" name="contact[Subject]" placeholder="Tiêu đề" class="form-control input-box" id="subject" />
                        </div>
                    </div>

                    <div class="col-md-12 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <textarea name="contact[Body]" class="form-control textarea-box" placeholder="Lời nhắn" id="message" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary custom-button red-btn wow fadeInLeft animated" id="submit" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" type="submit">Gửi phản hồi</button>
                </form>
            </form>
        </div>
    </div>
</section>
@show

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-7 col-sm-6 company-details mtdetail">
                        <h3>Liên hệ với chúng tôi</h3>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Tầng 4, tòa nhà Hà Nội Group, 442 Đội Cấn, Ba Đình, Hà Nội</li>
                            <li><i class="fa fa-phone"></i> <a href="tel: (04) 6674 2332"> (04) 6674 2332</a></li>
                            <li><i class="fa fa-fax"></i> (04) 6674 5832</li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:support@bizweb.vn">support@bizweb.vn</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 col-sm-6 company-details">
                        <aside class="widget widget_nav_menu">
                            <h3 class="widget-title">Hỗ trợ</h3>
                            <ul>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/search  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/search%27" tppabs="http://cakeshop.bizwebvietnam.net/search">Tìm kiếm</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/account/login  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/account/login%27" tppabs="http://cakeshop.bizwebvietnam.net/account/login">Đăng nhập</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/account/register  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/account/register%27" tppabs="http://cakeshop.bizwebvietnam.net/account/register">Đăng ký</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/cart  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/cart%27" tppabs="http://cakeshop.bizwebvietnam.net/cart">Giỏ hàng</a></li>

                            </ul>
                        </aside>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row">

                    <div class="col-md-6 col-sm-6 company-details">
                        <aside class="widget widget_nav_menu">
                            <h3 class="widget-title">Hướng dẫn</h3>
                            <ul>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/chinh-sach  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/chinh-sach%27" tppabs="http://cakeshop.bizwebvietnam.net/chinh-sach">Chính sách vận chuyển</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/chinh-sach  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/chinh-sach%27" tppabs="http://cakeshop.bizwebvietnam.net/chinh-sach">Chính sách bảo mật</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/chinh-sach  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/chinh-sach%27" tppabs="http://cakeshop.bizwebvietnam.net/chinh-sach">Chính sách đổi trả</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/dieu-khoan  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/dieu-khoan%27" tppabs="http://cakeshop.bizwebvietnam.net/dieu-khoan">Quy định sử dụng</a></li>

                            </ul>
                        </aside>
                    </div>

                    <div class="col-md-6 col-sm-6 company-details">
                        <aside class="widget widget_nav_menu">
                            <h3 class="widget-title">Chính sách</h3>
                            <ul>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/huong-dan  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/huong-dan%27" tppabs="http://cakeshop.bizwebvietnam.net/huong-dan">Hướng dẫn mua hàng</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/huong-dan  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/huong-dan%27" tppabs="http://cakeshop.bizwebvietnam.net/huong-dan">Hướng dẫn thanh toán</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/huong-dan  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/huong-dan%27" tppabs="http://cakeshop.bizwebvietnam.net/huong-dan">Hướng dẫn giao nhận</a></li>

                                <li><a href="javascript:if(confirm(%27http://cakeshop.bizwebvietnam.net/dieu-khoan  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://cakeshop.bizwebvietnam.net/dieu-khoan%27" tppabs="http://cakeshop.bizwebvietnam.net/dieu-khoan">Điều khoản dịch vụ</a></li>

                            </ul>
                        </aside>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 mtcopyright">
                <p><span>© Bản quyền thuộc về Avent Team</span><span> | </span><span>Cung cấp bởi <a href="javascript:if(confirm(%27https://www.bizweb.vn/?utm_source=site-khach-hang&utm_campaign=referral_bizweb&utm_medium=footer&utm_content=cung-cap-boi-bizweb  \n\nThis file was not retrieved by Teleport Pro, because it is addressed using an unsupported protocol (e.g., gopher).  \n\nDo you want to open it from the server?%27))window.location=%27https://www.bizweb.vn/?utm_source=site-khach-hang&utm_campaign=referral_bizweb&utm_medium=footer&utm_content=cung-cap-boi-bizweb%27" tppabs="https://www.bizweb.vn/?utm_source=site-khach-hang&utm_campaign=referral_bizweb&utm_medium=footer&utm_content=cung-cap-boi-bizweb" target="_blank" title="Bizweb">Bizweb</a></span></p>
            </div>
        </div>
    </div>
</footer>
<script src="{{ url('site') }}/bootstrap.min.js-1492160624824.js" ></script>
<script src="{{ url('site') }}/owl.carousel.min.js-1492160624824.js"  type='text/javascript'></script>
<script src="{{ url('site') }}/wow.min.js-1492160624824.js"  type='text/javascript'></script>
<script src="{{ url('site') }}/jquery.fancybox.min.js" tppabs="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js" type='text/javascript'></script>
<script src="{{ url('site') }}/jquery.mousewheel-3.0.6.pack.js-1492160624824.js" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/jquery.mousewheel-3.0.6.pack.js?1492160624824" type='text/javascript'></script>
<script src="{{ url('site') }}/jquery.nav.js-1492160624824.js" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/jquery.nav.js?1492160624824" type='text/javascript'></script>
<script src="{{ url('site') }}/jquery.knob.min.js" tppabs="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.0/jquery.knob.min.js" type='text/javascript'></script>
<script src="{{ url('site') }}/smoothscroll.js-1492160624824.js" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/smoothscroll.js?1492160624824" type='text/javascript'></script>
<script src="{{ url('site') }}/jgrowl.js-1492160624824.js" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/jgrowl.js?1492160624824" type='text/javascript'></script>
<script src="{{ url('site') }}/api.jquery.js-4.js" tppabs="http://bizweb.dktcdn.net/assets/themes_support/api.jquery.js?4" type='text/javascript'></script>
<script src="{{ url('site') }}/ajax-cart.js-1492160624824.js" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/ajax-cart.js?1492160624824" type='text/javascript'></script>
<script src="{{ url('site') }}/jquery.vegas.min.js-1492160624824.js" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/jquery.vegas.min.js?1492160624824" type='text/javascript'></script>
<script src="{{ url('site') }}/zerif.js-1492160624824.js" tppabs="http://bizweb.dktcdn.net/100/017/024/themes/518004/assets/zerif.js?1492160624824" type='text/javascript'></script>


</body>

</html>