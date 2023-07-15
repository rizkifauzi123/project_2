@extends('admin.layout.index')
@section('content')
<div class="content">
    <div class="row">
    
      <div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Buat Pembelian</h5>
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
            <form action="{{ url('/dashboard/pembelian/store')}}" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
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
                      <label>Masukan Harga Beli</label>
                      <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="* Masukan Harga Beli">
                    </div>
                  </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Produk</label>
                    <select name="produk_id" id="produk_id">
                      <option value=" ">-- Pilih Jenis Produk --</option>
                    @foreach ($produks as $produk)
                    <option value="{{$produk->id}}">{{$produk->nama}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label>Supplier</label>
                      <select name="supplier_id" id="supplier_id">
                        <option value=" ">-- Pilih Jenis Produk --</option>
                      @foreach ($suppliers as $supplier)
                      <option value="{{$supplier->id}}">{{$supplier->nama}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Buat Pembelian</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection