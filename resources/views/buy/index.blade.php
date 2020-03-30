@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DAFTAR PEMBELIAN</h3>

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
              <th>Customer</th>
              <th>Produk</th>
              <th>Jumlah Produk</th>
              <th>Harga Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$customer->nama}}</td>
              <td>
                @foreach ($customer->products as $product)
                <ul>
                  <li>{{$product->nama}}</li>
                </ul>
                @endforeach
              <td>
                {{$count=$customer->products->count()}}
              </td>
              <td>
                @foreach ($customer->products as $product)
                <ul>
                  <li>{{$product->harga}}</li>
                </ul>
                @endforeach
              </td>
              </td>
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