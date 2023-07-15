@extends('admin.layout.index')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Detail Supplier</h4>
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
                    Kota
                </th>
                <th>
                    Email
                </th>
                <th>
                    Telephone
                </th>
                <th>
                    Contact Person
                </th>
                <th>
                  action
                </th>
              </thead>
              <tbody>
              
                <tr>
               
                  <th>
                     {{$supplier->nama}}
                  </th>
                  <th>
                    {{$supplier->kota}}
                  </th>
                  <th>
                    {{$supplier->email}}
                  </th>
                  <th>
                    {{$supplier->telephone}}
                  </th>
                  <th>
                    {{$supplier->cp}}
                  </th>
                  <th>
                    <a href="{{ url('/dashboard/supplier')}}" type="a" class="btn btn-block-info btn-success btn-sm">Back</a>
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