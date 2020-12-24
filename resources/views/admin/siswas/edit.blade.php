@extends('admin.layouts.main')
@section('title','Siswa')
@section('csshere')
<!-- Data Table Css -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


@endsection
@section('jshere')
<!-- data-table js -->



@endsection

@section('headernav')

@endsection
{{-- @section('notif')
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
@endsection --}}


@section('site-content')


<div class="site-content">
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">@yield('title')</h3>
            <p class="text-muted m-b-0"></p>
        </div>
        <div class="panel panel-default">


{{-- {{ dd($result) }} --}}
@foreach ($result as $ambildataedit)
{{-- {{ dd($ambildataedit->tapel_id) }} --}}
<?php
 $id=$ambildataedit->id;
 $nisn=$ambildataedit->usernamex;
 $users_email=$ambildataedit->users_email;
 $nama=$ambildataedit->nama;
 $moodle_user=$ambildataedit->moodle_user;
 $tapels_id=$ambildataedit->tapels_id;
 $tapels_nama=$ambildataedit->tapels_nama;
 $kelas_id=$ambildataedit->kelas_id;
 $kelas_nama=$ambildataedit->kelas_nama;
?>


@endforeach


            <div class="panel-body">
                <form class="form-horizontal" action="{{ url('admin/siswas/ ') }}{{$id}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="nisn">NISN</label>
                                    <div class="col-sm-9">
                                        <input id="nisn" class="form-control @error('usernamex') is-invalid @enderror" type="text"
                                            placeholder="Masukkan NISN" name="usernamex" value="{{ $nisn }}">
                                            <input id="nisn" class="form-control" type="hidden"
                                                placeholder="Masukkan NISN" name="id" value="{{ $id }}">
                                            @error('usernamex')
                                            <div class="col-sm-8">
                                                <small id="passwordHelp" class="text-danger">
                                                    {{$message}}.
                                                </small>
                                            </div>

                                            @enderror

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="email">Email</label>
                                    <div class="col-sm-9">
                                        <input id="email" class="form-control @error('users_email') is-invalid @enderror" type="email"
                                            placeholder="Masukkan Email" name="users_email" value="{{$users_email}}">
                                            @error('users_email')
                                            <div class="col-sm-8">
                                                <small id="passwordHelp" class="text-danger">
                                                    {{$message}}.
                                                </small>
                                            </div>

                                            @enderror

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="nama">Nama</label>
                                    <div class="col-sm-9">
                                        <input id="nama" class="form-control @error('nama') is-invalid @enderror" type="text"
                                            placeholder="Masukkan Nama" name="nama" value="{{$nama}}">
                                            @error('nama')
                                            <div class="col-sm-8">
                                                <small id="passwordHelp" class="text-danger">
                                                    {{$message}}.
                                                </small>
                                            </div>

                                            @enderror

                                    </div>
                                </div>



                                {{-- {{ dd($tapels) }} --}}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-9">Tahun Pelajaran</label>
                                    <div class="col-sm-9">
                                        <select id="form-control-9" class="form-control" name="tapel_id" required>

                                            <option value="{{ $tapels_id }}" selected> {{ $tapels_nama }} </option>
                                            <option disabled>-- Pilih --</option>
                                            @foreach($tapels as $tapel)

                                            <option value="{{  $tapel->id  }}"> {{ $tapel->nama }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('tapel_id')
                                    <div class="col-sm-3">
                                        <small id="passwordHelp" class="text-danger">
                                            {{$message}}.
                                        </small>
                                    </div>

                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-9">Kelas</label>
                                    <div class="col-sm-9">
                                        <select id="form-control-9" class="form-control" name="kelas_id" required>

                                            <option value="{{ $kelas_id }}" selected> {{ $kelas_nama }} </option>
                                            {{-- <option value="{{ old('kelas_id')" selected" : "" }} value="{{ $kelas->nama }}"> --}}
                                            <option disabled>-- Pilih --</option>
                                            @foreach($kelass as $kelas)


                                            <option value="{{ $kelas->id }}"> {{ $kelas->nama }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('kelas_id')
                                    <div class="col-sm-3">
                                        <small id="passwordHelp" class="text-danger">
                                            {{$message}}.
                                        </small>
                                    </div>

                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="moodle_user">Username Ujian</label>
                                    <div class="col-sm-9">
                                        <input id="moodle_user" class="form-control @error('moodle_user') is-invalid @enderror" type="text"
                                            placeholder="Masukkan Username Ujian" name="moodle_user" value="{{$moodle_user}}"">
                                            @error('moodle_user')
                                            <div class="col-sm-8">
                                                <small id="passwordHelp" class="text-danger">
                                                    {{$message}}.
                                                </small>
                                            </div>

                                            @enderror

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="moodle_pass">Password Ujian</label>
                                    <div class="col-sm-9">
                                        <input id="moodle_pass" class="form-control @error('moodle_pass') is-invalid @enderror" type="password"
                                            placeholder="Masukkan Password Ujian" name="moodle_pass" value="{{old('moodle_pass')}}">
                                            @error('moodle_pass')
                                            <div class="col-sm-8">
                                                <small id="passwordHelp" class="text-danger">
                                                    {{$message}}.
                                                </small>
                                            </div>

                                            @enderror

                                    </div>
                                </div>






                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>


                </form>
            </div>
        </div>
    </div>
</div>






</form>

</div>

<div class="panel-body">
    <div class="table-responsive">
        <a href="/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
        <a class="btn btn-warning" href="{{ route('export') }}">Export Excel</a>
        <br>
        <hr>
        <table class="table table-striped table-bordered dataTable" id="table-1">
            <thead>
                <tr>
                    <th>-</th>
                    <th>NISN</th>
                    <th>email</th>
                    <th>Tahun Pelajaran</th>
                    <th>Kelas</th>
                    <th>Username Ujian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{dd($tagihan_aturs)}} --}}
                @foreach ($siswas as $data)
                @php
                    $caritapel = DB::select('select * from tapels where id = ?', array($data->tapels_id));
                    foreach ($caritapel as $ambil) {
                        // dd($ambil);
                        $tapel_nama=$ambil->nama;
                    }
                    $carikelas = DB::select('select * from kelass where id = ?', array($data->kelas_id));
                    foreach ($carikelas as $ambil) {
                        // dd($ambil);
                        $kelas_nama=$ambil->nama;
                    }
                @endphp
                <tr>
                    <td>{{ ($loop->index)+1 }}</td>
                    <td>{{$data->usernamex}}</td>
                    <td>{{$data->users_email}}</td>
                    <td>{{ $tapel_nama }}</td>
                    <td>{{ $kelas_nama }}</td>
                    <td>{{ $data->moodle_user }}</td>
                    <td>
                        <a href="/admin/siswas/{{$data->id}}" type="button" class="btn btn-primary m-w-100" ><i class="zmdi zmdi-edit"></i>
                        </a>


                        <form action="/admin/siswas/{{$data->id}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger m-w-100"
                                onclick="return  confirm('Anda yakin menghapus data ini? Y/N')"><span
                                    class="pcoded-micon"> <i class="zmdi zmdi-delete"></i> </span></button>
                        </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>-</th>
                    <th>NISN</th>
                    <th>email</th>
                    <th>Tahun Pelajaran</th>
                    <th>Kelas</th>
                    <th>Username Ujian</th>
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
                    Import @yield('title')
                </div>
                <div class="card-body">
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import @yield('title')</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
