@extends('admin.layout.index')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Buat Pesanan</h5>
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
            <form action="{{ url('/dashboard/pesanan/store')}}" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Jumlah</label>
                      <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="* Masukan Jumlah">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Masukan Nama</label>
                      <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" placeholder="* Masukan Nama">
                    </div>
                  </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Produk</label>
                    <select name="produk_id" id="produk_id">
                    <option value=" ">-- Pilih Pesanan --</option>
                    @foreach ($produks as $produk)
                    <option value="{{$produk->id}}">{{$produk->nama}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Buat Pesanan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection