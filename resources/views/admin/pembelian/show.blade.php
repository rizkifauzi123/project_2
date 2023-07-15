@extends('admin.layout.index')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pembelian</h4>
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
                
                <tr>
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
                    <a href="{{ url('/dashboard/pembelian')}}" type="a" class="btn btn-block-info btn-success btn-sm">Back</a>
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