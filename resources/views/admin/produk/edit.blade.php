@extends('admin.layout.index')
@section('content')
<div class="content">
    <div class="row">
    
      <div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Edit Produk</h5>
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
            <form action="{{ url('/dashboard/produk/update', $produk->id)}}" method="POST">
                @csrf
                @method('put')
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Produk Baru</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="{{$produk->nama}}"
                      placeholder="* Masukan Nama Produk Makanan Baru">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Masukan Stok</label>
                      <input type="number" class="form-control" id="stok" name="stok" value="{{$produk->stok}}"
                      placeholder="* Masukan Jumlah Stok">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Masukan Harga Beli</label>
                      <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="{{$produk->harga_beli}}"
                      placeholder="* Masukan Harga Beli">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Masukan Harga Jual</label>
                      <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="{{$produk->harga_jual}}"
                      placeholder="* Masukan Harga Jual">
                    </div>
                  </div>
                  {{-- <div class="col-md-12">
                    <div class="form-group">
                      <label>Masukan Jenis Produk</label>
                      <input type="number" class="form-control" id="jenis_produks_id" name="jenis_produks_id" placeholder="* Masukan Harga Jual">
                    </div>
                  </div> --}}
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Jenis Produk</label>
                    <select name="jenis_produks_id" id="jenis_produks_id">
                        <option value=" ">-- Pilih Jenis Produk --</option>
                    @foreach ($jenis_produks as $jenis)
                    <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Buat Produk Baru</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection