@extends('layout.app')

@section('title','Booking')


@section('content')
	<!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Pesanan</p>
                        <h2>Booking Tempat</h2>
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="regervation_part_iner">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                           <ul>
                              @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                        </div>
                        @endif
                
                    <form action="{{url('/insertpesanan')}}" method="post">
                        @csrf
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="jumlah" id="jumlah" required >
                                        <option value="">Jumlah Orang *</option>
                                        <option value="1">1 Orang</option>
                                        <option value="2">2 Orang</option>
                                        <option value="3">3 Orang</option>
                                        <option value="4">4 Orang</option>
                                        <option value="6">Keluarga 6 Orang</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="restoran" required  >
                                        <option value="">Pilih Restoran*</option>
                                        @foreach ($restaurant_packages as $restaurant_package)
                                        <option value="{{$restaurant_package->id}}">
                                                {{$restaurant_package->title}}
                                        </option>
                                        @endforeach
                                </select>
                                    </div>
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" name="no_hp" placeholder="Nomor HP *" value="{{ old('no_hp') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group date">
                                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal*" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" name="jam" required>
                                        <option value="">Waktu*</option>
                                        <option value="8 AM TO 10AM">8 AM TO 10AM</option>
                                        <option value="10 AM TO 12PM">10 AM TO 12PM</option>
                                        <option value="12PM TO 2PM">12PM TO 2PM</option>
                                        <option value="2PM TO 4PM">2PM TO 4PM</option>
                                        <option value="4PM TO 6PM">4PM TO 6PM</option>
                                        <option value="6PM TO 8PM">6PM TO 8PM</option>
                                        <option value="4PM TO 10PM">4PM TO 10PM</option>
                                        <option value="10PM TO 12PM">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="note" rows="10" class="d-block w-100 form-control"  placeholder="Note">{{ old('note') }}</textarea>
                                </div>
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" class="btn_4">Book A Table</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->
@endsection