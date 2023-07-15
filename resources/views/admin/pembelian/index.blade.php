@extends('admin.layout.index')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pembelian</h4>
          <div class="update ml-auto mr-auto">
            <a type="button" class="btn btn-primary btn-round" href="{{ url('dashboard/pembelian/create')}}">+ Tambah pembelian</a>
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
                    Tanggal
                </th>
                <th>
                    Jumlah
                </th>
                <th>
                    Harga Beli
                </th>
                <th>
                  action
                </th>
              </thead>
              <tbody>
                @foreach ($pembelians as $pembeli)
                <tr>
                  <th scope="row">
                    {{$loop->iteration}}
                  </th>
                  <th>
                     {{$pembeli->tanggal}}
                  </th>
                  <th>
                    {{$pembeli->jumlah}}
                  </th>
                  <th>
                    {{$pembeli->harga_beli}}
                  </th>
                  <th>
                    <a href="{{ url('/dashboard/pembelian/show', $pembeli->id)}}" type="a" class="btn btn-block-info btn-primary btn-sm">View</a>
                    <a href="{{ url('/dashboard/pembelian/edit', $pembeli->id)}}" type="a" class="btn btn-block-info btn-warning btn-sm">Update</a>
                    <form action="{{ url('/dashboard/pembelian/destroy', $pembeli->id)}}" method="POST" class="d-inline">
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
          <h4 class="card-title"> Pembelian</h4>
          <div class="update ml-auto mr-auto">
            <button type="submit" class="btn btn-primary btn-round">+ Tambah Pembelian</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                    Tanggal
                </th>
                <th>
                    Jumlah
                </th>
                <th>
                    Harga Beli
                </th>
                <th>
                    Produk ID
                </th>
                <th>
                    Supplier ID
                </th>
                <th>
                  action
                </th>
              </thead>
              <tbody>
                @foreach ($pembelians as $pembeli)
                <tr>
                  <th scope="row">
                    {{$loop->iteration}}
                  </th>
                  <th>
                     {{$pembeli->tanggal}}
                  </th>
                  <th>
                    {{$pembeli->jumlah}}
                  </th>
                  <th>
                    {{$pembeli->harga_beli}}
                  </th>
                  <th>
                    {{$pembeli->produk_id}}
                  </th>
                  <th>
                    {{$pembeli->supplier_id}}
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