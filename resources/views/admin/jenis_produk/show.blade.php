@extends('admin.layout.index')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-4">
          <div class="card card-user">
            <div class="image">
              <img src="{{asset('admin/assets/img/damir-bosnjak.jpg') }}" alt="">
            </div>
          
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 ">
                  <h5>24,6$<br><small>Spent</small></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Detail</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <table>
                        <thead>
                            <th>
                                Nama
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{$jenis->nama}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <a type="submit" href="{{ url('/dashboard/jenis_produk')}}" class="btn btn-primary btn-round">Back</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection