@extends('admin.layouts.main')
@section('title','Atur Tagihan Siswa')
@section('csshere')
<!-- Data Table Css -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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
                <form class="form-horizontal" action="/admin/aturtagihans" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                {{-- {{ dd($tapels) }} --}}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-9">Tahun Pelajaran</label>
                                    <div class="col-sm-9">
                                        <select id="form-control-9" class="form-control" name="tapel_id">

                                            <option disabled>-- Pilih --</option>
                                            @foreach($tapels as $tapel)

                                            <option value="{{  $tapel->id  }}"> {{ $tapel->nama }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('nama')
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
                                        <select id="form-control-9" class="form-control" name="kelas_id">

                                            <option disabled>-- Pilih --</option>
                                            @foreach($kelass as $kelas)

                                            <option value="{{ $kelas->id }}"> {{ $kelas->nama }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('nama')
                                    <div class="col-sm-3">
                                        <small id="passwordHelp" class="text-danger">
                                            {{$message}}.
                                        </small>
                                    </div>

                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="rupiah">Nominal Tagihan</label>
                                    <div class="col-sm-9">
                                        <input id="rupiah" class="form-control" type="text"
                                            placeholder="Masukkan Nominal Tagihan" name="rupiah" value="Rp. 0">

                                    </div>
                                </div>
                                <script type="text/javascript">

                                    var rupiah = document.getElementById('rupiah');
                                    // var nominal_tagihan = document.getElementById('nominal_tagihan');
                                    rupiah.addEventListener('keyup', function(e){

                                        // console.log(rupiah.value);

                                        // tambahkan 'Rp.' pada saat form di ketik
                                        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                                        rupiah.value = formatRupiah(this.value, 'Rp. ');
                                        // nominal_tagihan.value = formatRupiah(this.value, 'Rp. ');
                                    });

                                    /* Fungsi formatRupiah */
                                    function formatRupiah(angka, prefix){
                                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                        split   		= number_string.split(','),
                                        sisa     		= split[0].length % 3,
                                        rupiah     		= split[0].substr(0, sisa),
                                        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

                                        // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                        if(ribuan){
                                            separator = sisa ? '.' : '';
                                            rupiah += separator + ribuan.join('.');
                                        }

                                        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                                    }

                                        /* Kembalikan */
                                        function kembalikanrupiah(angka, prefix){
                                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                        split   		= number_string.split(','),
                                        sisa     		= split[0].length % 3,
                                        rupiah     		= split[0].substr(0, sisa),
                                        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

                                        // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                        if(ribuan){
                                            separator = sisa ? '.' : '';
                                            rupiah += separator + ribuan.join('.');
                                        }

                                        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                                    }
                                </script>


                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-22">Custom file inputs</label>
                                    <div class="col-sm-9">
                                      <label class="btn btn-default file-upload-btn">
                                        {{-- Choose file... --}}
                                        <input id="imgInp" class="file-path validate" type="file" name="file" multiple="multiple">
                                      </label>
                                      <img id="blah" src="#" alt="your image" />
                                    </div>
                                    @error('file')
                                    <div class="col-sm-3">
                                        <small id="passwordHelp" class="text-danger">
                                            {{$message}}.
                                        </small>
                                    </div>

                                    @enderror
                                  </div>
                                  <script>
                                    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

                                  </script>


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
                    <th>Tahun Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{dd($tagihan_aturs)}} --}}
                @foreach ($tagihan_aturs as $data)
                <tr>
                    <td>{{ ($loop->index)+1 }}</td>
                    <td>{{$data->nama}}</td>
                    <td>
                        <button type="button" class="btn btn-primary m-w-100" data-toggle="modal"
                            data-target="#otherModal2{{$data->id}}"><i class="zmdi zmdi-edit"></i>
                        </button>

                        <div id="otherModal2{{$data->id}}" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                <i class="zmdi zmdi-close"></i>
                                            </span>
                                        </button>
                                        <h4 class="modal-title">Edit " {{$data->nama}} "</h4>
                                    </div>
                                    <div class="modal-body">




                                        <form class="form-horizontal"
                                            action="{{ url('admin/aturtagihans/ ') }}{{$data->id}}" method="post">
                                            @method('put')
                                            @csrf

                                            <p>
                                                <label for="form-control-3{{$data->id}}" class="control-label ">Tahun
                                                    Pelajaran &nbsp;</label>
                                                <input type="text"
                                                    class="form-control input-pill mt-2 @error('nama') is-invalid @enderror"
                                                    id="form-control-3{{$data->id}}" placeholder="Tahun Pelajaran"
                                                    name="nama" value="{{$data->nama}}">
                                                @error('nama')<div class="invalid-feedback">Error!
                                                    {{$message}}</div>
                                                @enderror

                                            </p>




                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                        <button type="button" data-dismiss="modal"
                                            class="btn btn-default">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <a href="#" onclick="save()"class="btn btn-warning">  <i class="zmdi zmdi-edit"></i> </a>  --}}


                        <form action="/admin/aturtagihans/{{$data->id}}" method="post" class="d-inline">
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
