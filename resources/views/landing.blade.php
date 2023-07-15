<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dingo</title>
    <link rel="icon" href="{{ asset('lp/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/gijgo.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/all.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/style.css') }}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('lp/img/logo.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            {{-- <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="food_menu.html">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="chefs.html">Chefs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="menu_btn">
                            <a href="{{ url('/dashboard')}}" class="btn_1 d-none d-sm-block">Dashboard</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Warung Kekinian</h5>
                            <h1>Warung Dingo</h1>
                            <p>berdiri pada tanggal 8 januari 1989 yang didirikan oleh uji,fatih,yogi dan ahmadin.
                                Warung dingo memulai karirnya dengan hanya 1 menu UMKM saja namun sekarang ia memiliki beberapa menu yang special dengan bertemakan MENU UMKM 
                                agar terjangkau pada semua kalangan masyarakat.
                                Warung Dingo juga tidak asal memilih soal bumbu dan rempah rempah ia mempunyai langganan khusus untuk membeli bumbu.
                            </p>
                            {{-- <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <a href="#" class="btn_2">Reservation <img src="{{ asset('lp/img/icon/left_1.svg') }}" alt=""></a>
                                </div>
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                    <span><img src="{{ asset('lp/img/icon/play.svg') }}" alt=""></span> Watch our story</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!--::exclusive_item_part start::-->
    <section class="exclusive_item_part blog_item_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <h2>Menu Favorit</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/menu_resto/aceh.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Mie Aceh</h3>
                            <p>Mi aceh adalah masakan mi pedas khas Aceh di Indonesia. Mi kuning tebal dengan irisan daging sapi, daging kambing atau makanan laut disajikan dalam sup sejenis kari yang gurih dan pedas. Mi aceh biasanya ditaburi dengan bawang goreng dan disajikan bersama emping, potongan bawang merah, mentimun, dan jeruk nipis. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/menu_resto/bakar.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Nasi Bakar</h3>
                            <p>Nasi bakar merujuk pada nasi yang dibakar oleh arang sampai daun pisang berubah menjadi agak kehitaman dengan menggunakan beberapa bumbu dan lauk, kemudian dibungkus dengan Daun pisang, lalu dibakar di atas api menyala. Daun pisang yang dibakar pun menghasilkan aroma unik pada nasi. Nasi bakar termasuk Masakan Indonesia yang baru berkembang pada awal dekade 1000-an, dan kemungkinan merupakan turunan dari nasi timbel yang merupakan nenek moyang nasi

                                Ada beberapa jenis lauk yang biasanya dihidangkan di nasi bakar, seperti ayam goreng, empal tonjok, ikan peda, bandeng, ikan asin, kerang, jamur, tempe, tahu, telur asin, dan beberapa sayur dsb </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/menu_resto/toast.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Roti panggang</h3>
                            <p>Kata roti panggang dalam bahasa Inggris yaitu toast memiliki definisi "potongan roti yang dikeringkan dengan panas", diambil dari kata torrere yang artinya "to burn" atau membakar.[2] Referensi pertama untuk roti panggang dalam cetakan adalah dalam resep untuk Oyle Soppys (penyedap bawang yang direbus dalam satu galon bir basi dan satu liter minyak) yang berasal dari 1430. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/menu_resto/salyur.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Salad</h3>
                            <p>Salad adalah hidangan yang terdiri dari berbagai macam bahan makanan yang dicampur bersama dan biasanya disajikan dalam keadaan dingin. Salad dapat terdiri dari berbagai kombinasi sayuran segar, seperti daun hijau, mentimun, tomat, wortel, paprika, dan sebagainya. Namun, ada juga salad yang menggunakan bahan-bahan lain, seperti buah-buahan, biji-bijian, daging, ikan, keju, dan kacang-kacangan. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::exclusive_item_part end::-->

    <!-- about part start-->
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                    <div class="about_img">
                        <img src="{{ asset('lp/img/menu_resto/resto2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="about_text">
                        <p>Warung Dingo juga memiliki tempat yang nyaman untuk bersantai dengan keluarga atau meluangkan waktu sendiri.
                            dengan nuansa terbuka dan instagramable cocok untuk anak yang suka poto poto. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- food_menu start-->
    <section class="food_menu gray_bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <p>Menu Favorit</p>
                        <h2>Banyak di Pesan</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                        <a class="active" id="Special-tab" data-toggle="tab" href="#Special" role="tab"
                            aria-controls="Special" aria-selected="false">Mie</a>
                        <a id="Breakfast-tab" data-toggle="tab" href="#Breakfast" role="tab" aria-controls="Breakfast"
                            aria-selected="false">Nasi</a>
                        <a id="Launch-tab" data-toggle="tab" href="#Launch" role="tab" aria-controls="Launch"
                            aria-selected="false">Roti</a>
                        <a id="Dinner-tab" data-toggle="tab" href="#Dinner" role="tab" aria-controls="Dinner"
                            aria-selected="false">Vegan</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active single-member" id="Special" role="tabpanel"
                            aria-labelledby="Special-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/mie1.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Mie Aceh</h3>
                                            <h5>Rp 25.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/mie2.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Mie Godog</h3>
                                            <h5>Rp 20.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/mie3.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Mie Jawa</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/mie4.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Mie kocok Bandung</h3>
                                            <h5>Rp 25.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade single-member" id="Breakfast" role="tabpanel"
                            aria-labelledby="Breakfast-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/gimbab.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Gimbab</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/bento.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Bento</h3>
                                            <h5>Rp 30.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/bakar.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Nasi Bakar</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/bacang.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Bacang</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade single-member" id="Launch" role="tabpanel"
                            aria-labelledby="Launch-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/toast.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Roti Panggang/Toast</h3>
                                            <h5>Rp 25.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/canay.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Roti canay</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/maryam.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Roti Maryam</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/crossaint.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Crossaint</h3>
                                            <h5>Rp 20.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade single-member" id="Dinner" role="tabpanel"
                            aria-labelledby="Dinner-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/buah.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Salad Buah</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/sayur.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Salad Sayur</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/gado.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Gado-Gado</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="single_food_item media">
                                        <img src="{{ asset('lp/img/dingo_menu/pecel.png') }}" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <h3>Pecel</h3>
                                            <h5>Rp 15.000</h5>
                                            <div class="menu_btn">
                                                <a href="{{url('/dashboard/pesanan/create')}}" class="btn_2 d-none d-sm-block">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- food_menu part end-->

    <!--::chefs_part start::-->
    <section class="chefs_part blog_item_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Team</p>
                        <h2>Warung Dingo Chefs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/chefs/juna.png') }}" alt="">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Junior John Rorimpandey</h3>
                            <p>Chef Master 1</p>
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/chefs/arnold.png') }}" alt="">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Arnold Poernomo</h3>
                            <p>Chef Master 2</p>
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/chefs/renata.png') }}" alt="">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Puti Renatta R. Moeloek</h3>
                            <p>Chef Master 3</p>
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::chefs_part end::-->
    <!--::exclusive_item_part start::-->
    <section class="blog_item_section blog_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Warung Dingo</p>
                        <h2>Cabang</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/cabang/cabang1.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <div class="date">
                                <a href="#" class="date_item"> <span>#</span> Berdiri </a>
                                <a href="#" class="date_item">Apr 06, 2004  </a>
                                
                            </div>
                            <h3><a href="blog.html">Warung Dingo Jakarta Selatan</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/cabang/cabang2.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <div class="date">
                                <a href="#" class="date_item"> <span>#</span> Berdiri </a>
                                <a href="#" class="date_item">januari 08, 2007  </a>
                            </div>
                            <h3><a href="blog.html">Warung Dingo Bogor Barat</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('lp/img/cabang/cabang3.png') }}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <div class="date">
                                <a href="#" class="date_item"> <span>#</span> Berdiri </a>
                                <a href="#" class="date_item">julli 15, 2012 </a>
                            </div>
                            <h3><a href="blog.html">Warung Dingo Bekasi</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::exclusive_item_part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Jika anda memiliki keluhan segera hubungi nomer yang kami siapkan.
                            Terimakasih atas perhatiannya.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Phone :</span>+62 8647xxxx</p>
                            <p><span> Email : </span>Warung_dingo12@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright_part_text">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
By &copy;<script>document.write(new Date().getFullYear());</script> Warung_dingo <i class="ti-heart" aria-hidden="true"></i></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright_social_icon text-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('lp/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('lp/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('lp/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('lp/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('lp/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('lp/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('lp/js/owl.carousel.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('lp/js/slick.min.js') }}"></script>
    <script src="{{ asset('lp/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('lp/js/jquery.nice-select.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('lp/js/custom.js') }}"></script>
</body>

</html>