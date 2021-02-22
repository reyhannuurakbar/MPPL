@extends('layout.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Paket Restoran</h1>
          </div>

          @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
              
          @endif

          <div class="card shadow">
             <div class="card-body">
               <form action="{{route('restaurant-package.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group">
                     <label for="title">Judul</label>
                     <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ old('title') }}">
                  </div>
                  <div class="form-group">
                     <label for="about">About</label>
                     <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                  </div>
                  <div class="form-group">
                        <label for="packages_description">Daftar Paket Menu & Harga</label>
                        <textarea name="packages_description" rows="10" class="d-block w-100 form-control">{{ old('packages_description') }}</textarea>
                  </div>
                  <div class="form-group">
                        <label for="packages_1">Paket 1</label>
                        <input type="text" class="form-control" name="packages_1" placeholder="Paket 1" value="{{ old('packages_1') }}">
                  </div>
                  <div class="form-group">
                        <label for="packages_2">Paket 2</label>
                        <input type="text" class="form-control" name="packages_2" placeholder="Paket 2" value="{{ old('packages_2') }}">
                  </div>
                  <div class="form-group">
                        <label for="packages_3">Paket 3</label>
                        <input type="text" class="form-control" name="packages_3" placeholder="Paket 3" value="{{ old('packages_3') }}">
                  </div>
                  <div class="form-group">
                        <label for="packages_4">Paket 4</label>
                        <input type="text" class="form-control" name="packages_4" placeholder="Paket 4" value="{{ old('packages_4') }}">
                  </div>
                  <div class="form-group">
                        <label for="time">Waktu</label>
                        <input type="text" class="form-control" name="time" placeholder="Waktu" value="{{ old('time') }}">
                  </div>
                  <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ old('location') }}">
                  </div>
                  <div class="form-group">
                        <label for="price_booking">Harga Booking</label>
                        <input type="number" class="form-control" name="price_booking" placeholder="Harga booking" value="{{ old('price_booking') }}">
                  </div>
                  <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" name="image" placeholder="Gambar" class="form-control" >
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">
                     Simpan
                  </button>
               </form>
             </div>
          </div>

        </div>
        
@endsection