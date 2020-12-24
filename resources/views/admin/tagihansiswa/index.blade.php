@extends('admin.layouts.main')
@section('title','Tagihan Siswa')
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
{{-- {{ dd($ambildataedit->id) }} --}}
<?php
 $id=$ambildataedit->id;
 $persen=$ambildataedit->persen;
?>


@endforeach


            <div class="panel-body">
                <form class="form-horizontal" action="{{ url('admin/tagihansiswas/ ') }}{{ $id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                {{-- {{ dd($tapels) }} --}}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="persentaseminimal">Persentase Minimal</label>
                                    <div class="col-sm-6">
                                        <div class="input-group">

                                          <input type="text" id="persentaseminimal" class="form-control" id="form-control-1" placeholder="Masukkan Persentase" name="persen" value="{{ $persen }}">
                                          <span class="input-group-addon">%</span>
                                        </div>
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
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tahun Pelajaran - Kelas</th>
                    <th>Nominal Tagihan</th>
                    <th>Pembayaran</th>
                    <th>%</th>
                    <th>Bayar</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{dd($tagihan_aturs)}} --}}
                @foreach ($tagihan_aturs as $data)
                <tr>
                    <td>{{ ($loop->index)+1 }}</td>
                    <td>{{$data->tapel}}</td>
                    <td>{{$data->kelas}}</td>
                    <td>@currency($data->nominal_tagihan)</td>
                    <td>
                        <a href="/admin/aturtagihans/{{$data->id}}" type="button" class="btn btn-primary m-w-100" ><i class="zmdi zmdi-edit"></i>
                        </a>



                        {{-- <a href="#" onclick="save()"class="btn btn-warning">  <i class="zmdi zmdi-edit"></i> </a>  --}}



                        <form action="/admin/aturtagihans/{{$data->id}}" method="post" class="d-inline">
                            @method('DELETE')
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
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tahun Pelajaran - Kelas</th>
                    <th>Nominal Tagihan</th>
                    <th>Pembayaran</th>
                    <th>%</th>
                    <th>Bayar</th>
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
