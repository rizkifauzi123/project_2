@extends('admin.layout.index')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Detail Produk </h4>
          <div class="update ml-auto mr-auto">
            
           
            <div class="alert alert-success">
           
            </div>
           
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
                    
                    <a href="{{ url('/dashboard/produk')}}" type="a" class="btn btn-block-info btn-success btn-sm">Back</a>
                    
                  </th>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection