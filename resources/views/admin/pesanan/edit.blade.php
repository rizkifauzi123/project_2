@extends('admin.layout.index')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Edit Pesanan</h5>
          </div>
          <div class="card-body">
            {{-- untuk menampilakan validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/dashboard/pesanan/update', $pesan->id)}}" method="POST">
                @csrf
                @method('put')
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$pesan->tanggal}}"
                      placeholder="* Masukan Nama Produk Makanan Baru">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Jumlah</label>
                      <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{$pesan->jumlah}}"
                      placeholder="* Masukan Jumlah Stok">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{$pesan->nama_pembeli}}"
                      placeholder="* Masukan Harga Beli">
                    </div>
                  </div>
                 
                  </div>
                  
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Jenis Produk</label>
                    <select name="produk_id" id="produk_id">
                        <option value=" ">-- Pilih Produk --</option>
                    @foreach ($produks as $produk)
                    <option value="{{$produk->id}}">{{$produk->nama}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Update Pesanan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection