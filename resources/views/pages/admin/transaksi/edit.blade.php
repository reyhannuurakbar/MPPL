@extends('layout.admin')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Transaksi</h1>
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
               <form action="{{route('transaksi.update', $pesanan->id_pesanan)}}" method="post">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                        <select class="form-control" name="status" required  >
                              <option value="Pending">Pending</option>
                              <option value="Success">Success</option>
                              <option value="Failed">Failed</option> 
                        </select>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">
                     Ubah
                  </button>
               </form>
             </div>
          </div>

        </div>
        
@endsection