@extends('admin.layouts.main')
@section('title','Tahun Pelajaran')
@section('csshere')
<!-- Data Table Css -->

@endsection
@section('jshere')
<!-- data-table js -->

@endsection

@section('headernav')

@endsection
@section('notif')
@if (session('status'))
<div class="container mt-2">
<div class="alert alert-info border-info">
    {{ session('status') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            class="pcoded-micon"> <i class="feather icon-x-square"></i></span>
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</div>

@endif
@endsection
@section('site-content')
    <div class="site-content">
      <div class="panel panel-default panel-table">
        <div class="panel-heading">
          <h3 class="m-t-0 m-b-5">@yield('title')</h3>
          <p class="text-muted m-b-0"></p>
        </div>
        <div class="panel panel-default">
      
          <div class="panel-body">
            <form class="form-horizontal" action="/tapel" method="post">
              
              @csrf
              
              <div class="container">
              
                  <div class="form-group row">
                    <label for="inputTapel" class="col-sm-2 col-form-label  @error('nama') text-danger @enderror">Tambah Tahun Pelajaran</label>
                    <div class="col-sm-7">
                      <input type="nama" class="form-control @error('nama') is-invalid @enderror" id="inputTapel" placeholder="Tahun Pelajaran" value="{{old('nama')}}">
                    </div>
                    @error('nama')
                    <div class="col-sm-3">
                      <small id="passwordHelp" class="text-danger">
                        {{$message}}.
                      </small>      
                    </div>
                  
                    @enderror
                  </div>
              
                
               
              </div>
              
            
              
             
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
        
        </div>
        <div class="panel-body">
          <div class="table-responsive">
          <a href="/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
          <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            <table class="table table-striped table-bordered dataTable" id="table-1">
              <thead>
                <tr>
                  <th>-</th>
                  <th>Tahun Pelajaran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              {{-- {{dd($tapels)}} --}}
              @foreach ($tapels as $tapel)
                <tr>
                  <td>{{ ($loop->index)+1 }}</td>
                  <td>{{$tapel->nama}}</td>
                  <td>
                    <button type="button" class="btn btn-primary m-w-100" data-toggle="modal" data-target="#otherModal2{{$tapel->id}}"><i class="zmdi zmdi-edit"></i> </button>

                      <div id="otherModal2{{$tapel->id}}" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                  <i class="zmdi zmdi-close"></i>
                                </span>
                              </button>
                              <h4 class="modal-title">Edit " {{$tapel->nama}} "</h4>
                            </div>
                            <div class="modal-body">
                            
                              <div class="container">
                                <form>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label text-success">Email</label>
                                    <div class="col-sm-7">
                                      <input type="email" class="form-control is-valid" id="inputEmail" placeholder="Email">
                                    </div>
                                  </div>
                              
                                  <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label text-danger">Password</label>
                                    <div class="col-sm-7">
                                      <input type="password" class="form-control is-invalid" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-3">
                                      <small id="passwordHelp" class="text-danger">
                                        Must be 8-20 characters long.
                                      </small>      
                                    </div>
                                  </div>
                                </form>
                              </div>
                              
                            
                                <form class="form-horizontal" action="/tapel/{{$tapel->id}}" method="post">
                                  @method('put')
                                  @csrf
                                 
                                <p>
                                    <label for="form-control-3{{$tapel->id}}" class="control-label ">Tahun Pelajaran &nbsp;</label>
                                  <input type="text" class="form-control input-pill mt-2 @error('nama') is-invalid @enderror" id="form-control-3{{$tapel->id}}" placeholder="Tahun Pelajaran" name="nama" value="{{$tapel->nama}}">
                                  @error('nama')<div class="invalid-feedback">Error! {{$message}}</div>
                                  @enderror
                              
                                </p>
                                 
                                
                                
                               
                             </div>
                            <div class="modal-footer">
                            <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
                            </form>
                              <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                 
                    {{-- <a href="#" onclick="save()"class="btn btn-warning">  <i class="zmdi zmdi-edit"></i> </a>  --}}

       
                    <form action="/tapel/{{$tapel->id}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger m-w-100"
                          onclick="return  confirm('Anda yakin menghapus data ini? Y/N')"><span
                              class="pcoded-micon"> <i class="zmdi zmdi-delete"></i> </span></button>
                  </form>
                    {{-- <a href="#" onclick="save()"class="btn btn-danger">  <i class="zmdi zmdi-delete"></i> </a>  --}}
                  </td>
                </tr>
              @endforeach
               
              </tbody>
              <tfoot>
                <tr>
                  <th>-</th>
                  <th>Tahun Pelajaran</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class="container main-section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card bg-light mt-3">
                    <div class="card-header">
                        Import Tapel
                    </div>
                    <div class="card-body">
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control">
                            <br>
                            <button class="btn btn-success">Import User Data</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    </div>
@endsection
