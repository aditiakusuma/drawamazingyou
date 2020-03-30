@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DAFTAR PRODUK</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Harga</th>
              <th>+Cetak</th>
              <th>+Premium</th>
              <th>+Head</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
            <tr>
              <td>{{$customer->id}}</td>
              <td>{{$customer->nama}}</td>
              <td>
                @foreach ($customer->buys as $buy)
                {{$buy->harga}},
                @endforeach
              </td>
              <td>{{$customer->email}}</td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection