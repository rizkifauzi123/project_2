@extends('admin.layout.index')
@section('content')
<div class="content">
    <div class="row">
     
      <div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Buat Supplier Baru</h5>
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
            <form action="{{ url('/dashboard/supplier/update', $supplier->id)}}" method="POST">
                @csrf
                @method('put')
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama supplier Baru</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$supplier->nama}}"
                    placeholder="* Masukan Nama supplier Baru">
                  </div>
                  <div class="form-group">
                    <label>Kota supplier Baru</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="{{$supplier->kota}}"
                    placeholder="* Masukan Nama Kota Supplier Baru">
                  </div>
                  <div class="form-group">
                    <label>Email supplier Baru</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$supplier->email}}"
                    placeholder="* Masukan Nama Email Supplier Baru">
                  </div>
                  <div class="form-group">
                    <label>Kontak supplier Baru</label>
                    <input type="number" class="form-control" id="telephone" name="telephone" value="{{$supplier->telephone}}"
                    placeholder="* Masukan Nomor Telephone Supplier Baru">
                  </div>
                  <div class="form-group">
                    <label>Cp supplier Baru</label>
                    <input type="text" class="form-control" id="cp" name="cp" value="{{$supplier->cp}}"
                    placeholder="* Masukan Nama Kontak Supplier Baru">
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Update Supplier</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection