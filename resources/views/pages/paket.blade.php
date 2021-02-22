@extends('layout.app')

@section('title','Paket Pesanan')

@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pilih Paket</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::chefs_part start::-->
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
    <!--::chefs_part end::-->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>Makan Besar Sepuasnya</h2>
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
    <!-- intro_video_bg part start-->

@endsection