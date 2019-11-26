@extends('layout.app')

@section('title')
    Makan Besar
@endsection

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Makan Besar Sepuasnya</h5>
                            <h1>Promo All You Can Eat Terbaik</h1>
                            <p>Kepuasan Anda Dalam Menikmati Adalah Prioritas Kami, Nikmati Makan Sepuasnya di Makan Besar. Temukan Promo menarik disini. Selamat Menikmati</p>
                            <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <a href="/paket" class="btn_2">Pemesanan <img src="img/icon/left_1.svg" alt=""></a>
                                </div>
                                <a href="/register">
                                    <button type="button" class="btn btn-warning btn-lg">Get Started</button>
                                </a>
                            </div>
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
                        <p>Paket All You Can Eat</p>
                        <h2>Pilih Restoranmu</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($items as $item)
                    @if ($item->count())
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                            <img src="{{ Storage::url($item->image)}}"alt="" class="img-responsive"/>
                            </div>
                            <div class="single_blog_text">
                            <h3>{{ $item->title }}</h3>
                            <a href="{{ route('details',$item->slug)}}" class="btn_3">Selengkapnya dan Pesan <img src="img/icon/left_2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
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
                        <img src="img/about.png" alt="">
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="about_text">
                        <h5>Our History</h5>
                        <h2>Where The Food’s As Good
                            As The Root Beer.</h2>
                        <h4>Satisfying people hunger for simple pleasures</h4>
                        <p>May over was. Be signs two. Spirit. Brought said dry own firmament lesser best sixth deep
                            abundantly bearing, him, gathering you
                            blessed bearing he our position best ticket in month hole deep </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>Expect The Best</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--::review_part start::-->
    <section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Testimonials</p>
                        <h2>Customers Feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                                <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png " alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                                <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                                <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->

    <!--::exclusive_item_part start::-->
    <section class="blog_item_section blog_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Recent News</p>
                        <h2>Latest From Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/blog/blog_1.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <div class="date">
                                <a href="#" class="date_item">Apr 06, 2019 </a>
                                <a href="#" class="date_item"> <span>#</span> Food News </a>
                            </div>
                            <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/blog/blog_2.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <div class="date">
                                <a href="#" class="date_item">Apr 06, 2019 </a>
                                <a href="#" class="date_item"> <span>#</span> Food News </a>
                            </div>
                            <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/blog/blog_3.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <div class="date">
                                <a href="#" class="date_item">Apr 06, 2019 </a>
                                <a href="#" class="date_item"> <span>#</span> Food News </a>
                            </div>
                            <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/blog/blog_1.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <div class="date">
                                <a href="#" class="date_item">Apr 06, 2019 </a>
                                <a href="#" class="date_item"> <span>#</span> Food News </a>
                            </div>
                            <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                            <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::exclusive_item_part end::-->
@endsection