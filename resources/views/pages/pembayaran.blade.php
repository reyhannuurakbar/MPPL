@extends('layout.app')

@section('title','Pay')

@section('content')
            <section class="breadcrumb breadcrumb_bg">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-12">
                        <br>
                            <div class="breadcrumb_iner text-center">
                               <div class="breadcrumb_iner_item">
                                        <h2>Selesaikan Pembayaran</h2>
                                </div>
                            </div>
                        <br>
                      </div>
                   </div>
                </div>
            </section>
        <section class="section-details-content">
                <div class="container">
                  <div class="row">
                    <div class="col p-0 pl-3 pl-lg-0">
                      <div class="card card-details card-center">
                        <h2>Cek Booking</h2>
                        <font size=4><table class="trip-informations">
                      
                          <tr>
                            <th width="50%">Nama</th>
                          <td width="50%" class="text-left">{{$last->nama}}</td>
                          </tr>
                          <tr>
                            <th width="50%">Jumlah Orang</th>
                            <td width="50%" class="text-left">{{$last->jumlah}} Orang</td>
                          </tr>
                          <tr>
                            <th width="50%">Restoran</th>
                            <td width="50%" class="text-left">{{$last->restoran}}</td>
                          </tr>
                          <tr>
                            <th width="50%">Nomor HP</th>
                            <td width="50%" class="text-left">{{$last->no_hp}}</td>
                          </tr>
                          <tr>
                            <th width="50%">Tanggal</th>
                            <td width="50%" class="text-left">{{$last->tanggal}}</td>
                          </tr>
                          <tr>
                            <th width="50%">Waktu</th>
                            <td width="50%" class="text-left">{{$last->jam}}</td>
                          </tr>
                          <tr>
                            <th width="50%">Catatan</th>
                            <td width="50%" class="text-left">{!!$last->note!!}</td>
                          </tr>
                          <tr>
                            <th width="50%">Total Transfer</th>
                            <td width="50%" class="text-left">IDR 100.000,00</td>
                          </tr>
                        
                        </table></font>
        
                        <hr />
                        <h2>Bank Transfer</h2>
                        <p class="payment-instructions">
                          Mohon Tranfer sesuai dengan yang tertera untuk menyelesaikan booking :)
                        </p>
                        <div class="bank">
                          <div class="bank-item pb-3">
                            <img
                              src="filecheckout/frontend/images/ic_bank.png"
                              alt=""
                              class="bank-image"
                            />
                            <div class="description">
                              <h3>PT Makan Besar</h3>
                              <p>
                                0881 8829 8800
                                <br />
                                Bank BNI
                              </p>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="bank-item">
                            <img
                              src="filecheckout/frontend/images/ic_bank.png"
                              alt=""
                              class="bank-image"
                            />
                            <div class="description">
                              <h3>PT Makan Besar</h3>
                              <p>
                                0899 8501 7888
                                <br />
                                Bank BRI
                              </p>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center mt-3">
                                <a href="/chekout" ><button type="button" class="btn btn-success btn-lg">Saya Telah Lakukan Pembayaran</button></a>
                      </div>
                            <div class="text-center mt-3">
                                <a href="/booking" ><button type="button" class="btn btn-danger btn-lg">Batalkan Booking</button></a>
                        </div>
                    </div>
                  </div>
                </div>
        </section>
@endsection