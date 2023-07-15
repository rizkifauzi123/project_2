@extends('admin.layout.index')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Supplier</h4>
          <div class="update ml-auto mr-auto">
            <a type="button" class="btn btn-primary btn-round" href="{{ url('dashboard/supplier/create')}}">+ Tambah Supplier</a>
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
                  Nama
                </th>
                <th>
                    Kota
                </th>
                <th>
                  action
                </th>
              </thead>
              <tbody>
                @foreach ($suppliers as $supplier)
                <tr>
                  <th scope="row">
                    {{$loop->iteration}}
                  </th>
                  <th>
                     {{$supplier->nama}}
                  </th>
                  <th>
                    {{$supplier->kota}}
                  </th>
                  <th>
                    <a href="{{ url('/dashboard/supplier/show', $supplier->id)}}" type="a" class="btn btn-block-info btn-primary btn-sm">View</a>
                    <a href="{{ url('/dashboard/supplier/edit', $supplier->id)}}" type="a" class="btn btn-block-info btn-warning btn-sm">Update</a>
                    <form action="{{ url('/dashboard/supplier/destroy', $supplier->id)}}" method="POST" class="d-inline">
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
    
  </div>
</div>
@endsection