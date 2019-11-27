@extends('layout.app')

@section('title','Chekout')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Details</title>
    <link
      rel="stylesheet"
      href="filecheckout/frontend/libraries/bootstrap/css/bootstrap.css"
    />
    <link rel="stylesheet" href="frontend/styles/main.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="filecheckout/frontend/libraries/xzoom/dist/xzoom.css" />
    <link rel="stylesheet" href="filecheckout/frontend/libraries/gijgo/css/gijgo.min.css" />
  </head>
  <body>
      <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
           <div class="row">
                <div class="col-lg-12">
                <br>
                    <div class="breadcrumb_iner text-center">
                       <div class="breadcrumb_iner_item">
                                <h2>Info Booking</h2>
                        </div>
                    </div>
                <br>
                </div>
           </div>
        </div>
    </section>
  <main>
      <section class="exclusive_item_part blog_item_section">
          <div class="container">
           <div class="row">
            <div class="attendee">
             <font size=4>
              <table class="table table-responsive-sm text-center">
              <thead>
                <tr>
                  <td scope="col"><strong>Nama</strong></td>
                  <td scope="col"><strong>Restoran</strong></td>
                  <td scope="col"><strong>Jumlah Orang</strong></td>
                  <td scope="col"><strong>Tanggal</strong></td>
                  <td scope="col"><strong>Waktu</strong></td>
                  <td scope="col"><strong>Status Booking</strong></td>
                </tr>
              </thead>
              <tbody>
                @if(count($pesanan) >0 )
                    @foreach($pesanan -> all() as $book)
                        <tr>
                            <td class="align-middle">{{$book->nama}}</td>
                            <td class="align-middle">{{$book->id_restoran}}</td>
                            <td class="align-middle">{{$book->jumlah}}</td>
                            <td class="align-middle">{{$book->tanggal}}</td>
                            <td class="align-middle">{{$book->jam}}</td>
                            <td class="align-middle">
                                <a href="#">
                                    <button type="button" class="btn btn-success btn-sm">{{$book->status}}</button>
                                </a>
                            </td>
                        </tr>
                     @endforeach
                @endif
              </tbody>
             </table>
           </font>
          </div>
        </div>
      </div>
    </div> 
  </main>
@endsection
