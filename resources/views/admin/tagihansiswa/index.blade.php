@extends('admin.layouts.main')
@section('title','Tagihan Siswa')
@section('csshere')
<!-- Data Table Css -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
    </style>
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
@php
    $maxcolspan=0;
@endphp
@foreach ($result2 as $data)

    @php
   $caridata = DB::table('tagihan_siswas_details')
        ->where('tagihan_siswas_id', '=', $data->id)
        ->count();
        $result_detail_bayar  = DB::select("SELECT * FROM tagihan_siswas_details WHERE tagihan_siswas_id='$data->id'");
if($maxcolspan<$caridata){
    $maxcolspan=$caridata;
}
// dd($maxcolspan);
@endphp

@endforeach




</form>

</div>

<div class="panel-body">
    <div class="table-responsive">
        <a href="/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
        <a class="btn btn-warning" href="{{ route('export') }}">Export Excel</a>
        &nbsp;&nbsp;&nbsp; *) Atur terlebih dahulu di menu Atur Tagihan apabila tahun pelajaran dan kelas belum ada!
        <div class="container">
            <div class="row">
                <form action="{{ url('admin/tagihansiswas/pilihta') }}" method="POST">
                    @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label " for="form-control-9">Tahun Pelajaran - Kelas</label>
                    <div class="col-sm-3">
                        <select id="form-control-9" class="form-control" name="id_ta">

                            <option disabled>-- Pilih --</option>
                            @foreach($tagihan_aturs as $ta)

                            <option value="{{  $ta->id  }}"> {{ $ta->tapel }} - {{ $ta->kelas }}</option>
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary ml-4" value="submit">Pilih Kelas</a>
                </div>
            </form>
            </div>
        </div>
        <hr>
        <table class="table table-striped table-bordered dataTable" id="table-1">
            <thead>
                <tr>
                    <th>-</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tahun Pelajaran - Kelas</th>
                    <th>Nominal Tagihan</th>
                    <th colspan="{{ $maxcolspan }}">Pembayaran</th>
                    <th>%</th>
                    <th width="15%">Bayar</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{dd($tagihan_aturs)}} --}}
                @foreach ($result2 as $data)

                <tr>
                    <td>{{ ($loop->index)+1 }}</td>
                    <td>{{$data->username_siswa}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->tapel}} - {{$data->kelas}}</td>
                    <td>@currency($data->nominal_tagihan)</td>
                    @php
                     $totalbayar=0;
                   $caridata = DB::table('tagihan_siswas_details')
                        ->where('tagihan_siswas_id', '=', $data->id)
                        ->count();
                        $result_detail_bayar  = DB::select("SELECT * FROM tagihan_siswas_details WHERE tagihan_siswas_id='$data->id' ORDER BY tagihan_siswas_details.id ASC");
                    $ulangitd=$maxcolspan-$caridata;
                    // dd($ulangitd);
                    @endphp
                    @if($caridata<1)
                        <td colspan={{ $maxcolspan }}  class="text-center">Belum membayar</td>
                    @else

                    @foreach ($result_detail_bayar as $datadetail)
                        <td>@currency($datadetail->jml_bayar)</td>
                        @php
                            $totalbayar+=$datadetail->jml_bayar;
                        @endphp

                    @endforeach
                    @for ($i =1; $i <= $ulangitd ; $i++)
                    <td class="text-center">-</td>
                    @endfor
                        @endif

                        @php
                            $kurang=$data->nominal_tagihan-$totalbayar;
                            $persentase=($totalbayar/$data->nominal_tagihan)*100;
                        @endphp
                    <td>{{ $persentase }} %</td>
                    <td>
                        <a href="/admin/tagihansiswas/edittagihansiswas/<?=$tapel_asli=str_replace('/', 'garing', $data->tapel);?>/{{ $data->kelas }}/{{$data->username_siswa}}" type="button" class="btn btn-primary m-w-100" ><i class="zmdi zmdi-money-box"></i>
                        </a>

                        {{-- <button type="button" class="btn btn-primary m-w-100" data-toggle="modal" data-target="#import_ppdb_siswas{{ $data->id }}">
                            <i class="zmdi zmdi-money-box"></i>
                        </button> --}}
                        <!--modal-->
                        <div class="modal fade" id="import_ppdb_siswas{{ $data->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        Detail Pembayaran "{{ $data->nama }}""
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('admin/bayartagihansiswas') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="tagihan_siswas_id" class="form-control" value="{{ $data->id }}">
                                            <input type="number" name="jml_bayar" class="form-control" value="0">
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Bayar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>


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
                    <th colspan="{{ $maxcolspan }}">Pembayaran</th>
                    <th>%</th>
                    <th width="15%">Bayar</th>
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
