@extends('admin.layout.index')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pesanan</h4>
          <div class="update ml-auto mr-auto">
            <a type="button" class="btn btn-primary btn-round" href="{{ url('dashboard/pesanan/create')}}">+ Tambah Pesanan</a>
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
                    Nama Pembeli
                </th>
                <th>
                    Produk ID
                </th>
                <th>
                  action
                </th>
              </thead>
              <tbody>
                @foreach ($pesanans as $pesan)
                <tr>
                  <th scope="row">
                    {{$loop->iteration}}
                  </th>
                  <th>
                     {{$pesan->tanggal}}
                  </th>
                  <th>
                    {{$pesan->jumlah}}
                 </th>
                 <th>
                    {{$pesan->nama_pembeli}}
                 </th>
                 <th>
                    {{$pesan->produk_id}}
                 </th>
                  <th>
                    
                    <a href="{{ url('/dashboard/pesanan/edit', $pesan->id)}}" type="a" class="btn btn-block-info btn-warning btn-sm">Update</a>
                    <form action="{{ url('/dashboard/pesanan/destroy', $pesan->id)}}" method="POST" class="d-inline">
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
          <h4 class="card-title"> Pesanan</h4>
          <div class="update ml-auto mr-auto">
            <button type="submit" class="btn btn-primary btn-round">+ Tambah Pesanan</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Tanggal
                </th>
                <th>
                    Jumlah
                </th>
                <th>
                    Nama Pembeli
                </th>
                <th>
                    Produk ID
                </th>
                <th>
                  action
                </th>
              </thead>
              <tbody>
                @foreach ($pesanans as $pesan)
                <tr>
                  <th>
                     {{$pesan->tanggal}}
                  </th>
                  <th>
                    {{$pesan->jumlah}}
                 </th>
                 <th>
                    {{$pesan->nama_pembeli}}
                 </th>
                 <th>
                    {{$pesan->produk_id}}
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