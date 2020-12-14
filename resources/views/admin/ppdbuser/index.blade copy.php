@extends('admin.layouts.main')
@section('title','PPDB Siswa')
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
    <div class="panel panel-default m-b-0">
      <div class="panel-heading">
        <h3 class="m-y-0">@yield('title')</h3>
      </div>
      <div class="panel-body">
        <p class="text-muted m-b-15">Ini Halaman @yield('title').</p>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
              <label class="control-label">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
              <label class="control-label">Message</label>
              <textarea class="form-control" rows="3" id="message"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Toast type</label>
              <select id="toastTypeGroup" class="custom-select">
                <option value="success" selected="selected">Success</option>
                <option value="info">Info</option>
                <option value="warning">Warning</option>
                <option value="error">Error</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Position</label>
              <select id="positionGroup" class="custom-select">
                <option value="toast-top-right" selected="selected">Top Right</option>
                <option value="toast-bottom-right">Bottom Right</option>
                <option value="toast-bottom-left">Bottom Left</option>
                <option value="toast-top-left">Top Left</option>
                <option value="toast-top-full-width">Top Full Width</option>
                <option value="toast-bottom-full-width">Bottom Full Width</option>
                <option value="toast-top-center">Top Center</option>
                <option value="toast-bottom-center">Bottom Center</option>
              </select>
            </div>
            <div class="form-group">
              <div class="custom-controls-stacked">
                <label class="custom-control custom-control-primary custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="closeButton">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-label">Close button</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="progressBar">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-label">Progress bar</span>
                </label>
              </div>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary" id="showtoast">Show Toast</button>
              <button type="button" class="btn btn-danger" id="cleartoasts">Clear Toasts</button>
            </div>
          </div>
        </div>
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
                            <button type="button" class="btn btn-primary m-w-100" data-toggle="modal"
                                data-target="#otherModal2{{$tapel->id}}"><i class="zmdi zmdi-edit"></i>
                            </button>

                            <div id="otherModal2{{$tapel->id}}" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
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
                                                        <label for="inputEmail"
                                                            class="col-sm-2 col-form-label text-success">Email</label>
                                                        <div class="col-sm-7">
                                                            <input type="email" class="form-control is-valid"
                                                                id="inputEmail" placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label text-danger">Password</label>
                                                        <div class="col-sm-7">
                                                            <input type="password"
                                                                class="form-control is-invalid"
                                                                id="inputPassword" placeholder="Password">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <small id="passwordHelp" class="text-danger">
                                                                Must be 8-20 characters long.
                                                            </small>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                            <form class="form-horizontal" action="/tapel/{{$tapel->id}}"
                                                method="post">
                                                @method('put')
                                                @csrf

                                                <p>
                                                    <label for="form-control-3{{$tapel->id}}"
                                                        class="control-label ">Tahun Pelajaran &nbsp;</label>
                                                    <input type="text"
                                                        class="form-control input-pill mt-2 @error('nama') is-invalid @enderror"
                                                        id="form-control-3{{$tapel->id}}"
                                                        placeholder="Tahun Pelajaran" name="nama"
                                                        value="{{$tapel->nama}}">
                                                    @error('nama')<div class="invalid-feedback">Error!
                                                        {{$message}}</div>
                                                    @enderror

                                                </p>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" value="submit"
                                                class="btn btn-primary">Simpan</button>
                                            </form>
                                            <button type="button" data-dismiss="modal"
                                                class="btn btn-default">Close</button>
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
  </div>
@endsection
