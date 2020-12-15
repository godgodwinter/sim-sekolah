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
        <div class="table-responsive">
            {{-- <a href="/cetak_pdf" class="btn btn-success" target="_blank">Import</a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import_ppdb_siswas">
                Import
              </button>
              <!--modal-->
              <div class="modal fade" id="import_ppdb_siswas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                                          Import PPDB Siswa
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                                      </div>
                                      <div class="modal-body">
                                          <form action="{{ route('import_ppdb_siswas') }}" method="POST" enctype="multipart/form-data">
                                              @csrf
                                              <input type="file" name="file" class="form-control">
                                     </div>
                  <div class="modal-footer">
                      <button class="btn btn-primary">Import User Data</button>
                  </div>
                </form>
                  </div>
                </div>
              </div>
            <a class="btn btn-warning" href="{{ route('export_ppdb_siswas') }}">Export &nbsp; &nbsp;</a>

        <div class="clearfix"> &nbsp; </div>
        <div class="col-12 mb-3 mb-sm-0">&nbsp;</div>
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>-</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{dd($ppdb_siswas)}} --}}
                    @foreach ($ppdb_siswas as $data)
                    @php($emailencode=base64_encode($data->users_email))
                    <tr>
                        <td>{{ ($loop->index)+1 }}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nisn}}</td>
                        <td>{{$data->users_email}}</td>
                        <td>
                            <a href="{{ url('/print_data?id='.$emailencode) }}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>-</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>


    </div>
    </div>
  </div>
@endsection
