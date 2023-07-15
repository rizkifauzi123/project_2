@extends('admin.layout.index')
@section('content')
<div class="content">
    <div class="row">
     
      <div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Buat Jenis Produk Baru</h5>
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
            <form action="{{ url('/dashboard/jenis_produk/store')}}" method="POST">
                @csrf
             
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Jenis Baru</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="* Masukan Nama Jenis Makanan Baru">
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Buat Jenis Baru</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection