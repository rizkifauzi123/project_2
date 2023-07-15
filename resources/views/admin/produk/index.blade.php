@extends('admin.layout.index')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Produk </h4>
          <div class="update ml-auto mr-auto">
            <a type="button" class="btn btn-primary btn-round" href="{{ url('dashboard/produk/create')}}">+ Tambah Produk</a>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  No
                </th>
                <th>
                  Nama
                </th>
                <th>
                  Stok
                </th>
                
                <th>
                  Harga Jual
                </th>
                
                <th>
                  action
                </th>
              </thead>
              <tbody>
                @foreach ($produks as $produk)
                <tr>
                  <th scope="row">
                    {{$loop->iteration}}
                  </th>
                  <th>
                     {{$produk->nama}}
                  </th>
                  <th>
                    {{$produk->stok}}
                 </th>
                 
                  <th>
                    {{$produk->harga_jual}}
                 </th>
                
                  <th>
                    <a href="{{ url('/dashboard/produk/show', $produk->id)}}" type="a" class="btn btn-block-info btn-primary btn-sm">View</a>
                    <a href="{{ url('/dashboard/produk/edit', $produk->id)}}" type="a" class="btn btn-block-info btn-warning btn-sm">Update</a>
                    <form action="{{ url('/dashboard/produk/destroy', $produk->id)}}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button href=" " type="a" class="btn btn-block-info btn-danger btn-sm">Delete</button>
                    </form>
                  </th>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title"> Produk </h4>
          <div class="update ml-auto mr-auto">
            <button type="submit" class="btn btn-primary btn-round">+ Tambah Produk</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Nama
                </th>
                <th>
                  Stok
                </th>
                <th>
                  Harga Beli
                </th>
                <th>
                  Harga Jual
                </th>
                <th>
                  Jenis Produk
                </th>
                <th>
                  action
                </th>
              </thead>
              <tbody>
                @foreach ($produks as $produk)
                <tr>
                  <th>
                     {{$produk->nama}}
                  </th>
                  <th>
                    {{$produk->stok}}
                 </th>
                  <th>
                    {{$produk->harga_beli}}
                  </th>
                  <th>
                    {{$produk->harga_jual}}
                 </th>
                 <th>
                  {{$produk->jenis_produks_id}}
                  </th>
                  <th>
                    <a href=" " type="a" class="btn btn-block-info btn-primary btn-sm">View</a>
                    <a href=" " type="a" class="btn btn-block-info btn-warning btn-sm">Update</a>
                    <a href=" " type="a" class="btn btn-block-info btn-danger btn-sm">Delete</a>
                  </th>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>
@endsection