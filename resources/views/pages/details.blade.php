@extends('layout.app')

@section('title','Details')


@section('content')
   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                     <h2>Details</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  @if ($item->count())
                  <div class="feature-img">
                     <img src="{{ Storage::url($item->first()->image)}}" alt="" class="img-responsive">
                  </div>
                  @endif
                  <div class="blog_details">
                     <h2> {{ $item->first()->title }} </h2>
                     <h3>About</h3>
                     <p class="excert">
                           {!! $item->first()->about !!}
                     </p>
                     <h3>Daftar Paket Menu & Harga</h3>
                     <p>
                           {!! $item->first()->packages_description !!}
                        <font size=3><ol>
                              <li>Paket 1: {{ $item->first()->packages_1}}</li>
                              <li>Paket 2: {{ $item->first()->packages_2}}</li>
                              <li>Paket 3: {{ $item->first()->packages_3}}</li>
                              <li>Paket 4: {{ $item->first()->packages_4}}</li>
                        </ol></font>
                     </p>
                     <h3>Waktu Buka</h3>
                     <p><font size=3> {{ $item->first()->time}} </font></p>
                     <h3>Alamat</h3>
                     <p><font size=3> {{ $item->first()->location}} </font></p>
                     <h3>Harga Booking per Orang</h3>
                     <p><font size=3>IDR {{ $item->first()->price_booking}},00</font></p>
                     <div>
                      <a href="/Pesan"> <button type="submit" class="btn btn-success btn-lg">
                         Booking Tempat
                      </button> </a>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
@endsection
