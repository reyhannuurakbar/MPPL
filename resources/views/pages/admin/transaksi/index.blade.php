@extends('layout.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
            
          </div>

          <div class="row">
             <div class="card-body">
                <div class="table-responsive">
                   <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th >ID Pemesanan</th>
                              <th >ID Pemesan</th>
                              <th >Nama Pemesan</th>
                              <th >Nama Restoran</th>
                              <th >No HP</th>
                              <th >Jam Pesanan</th>
                              <th >Jumlah Pemesan</th>
                              <th >Tanggal Pesanan</th>
                              <th >Status Pesanan</th>
                              <th >Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse ($pesanan -> all() as $book)
                            <tr>
                              <th>{{$book->id_pesanan}}</th>
                              <td>{{$book->id_user}}</td>
                              <td>{{$book->nama}}</td>
                              <td>{{$book->id_restoran}}</td>
                              <td>{{$book->no_hp}}</td>
                              <td>{{$book->jam}}</td>
                              <td>{{$book->jumlah}}</td>
                              <td>{{$book->tanggal}}</td>
                              <td>{{$book->status}}</td>
                              <td>
                                 <a href='{{url("/admin/accepted/{$book->id_pesanan}")}}'>Accepted</a>
                                 <a href='{{url("/admin/deny/{$book->id_pesanan}")}}' >Deny</a>
                              </td>  
                            </tr>
                           @empty
                            <tr>
                                <td colspan="9" class="text-center">
                                        Data Kosong
                                </td>
                            </tr>
                           @endforelse
                        </tbody>
                    </table>
                </div>
           </div>
          </div>


        </div>
        
@endsection