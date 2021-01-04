{{-- {{ dd($result) }} --}}
@foreach ($result as $ambildataedit)
{{-- {{ dd($ambildataedit->id) }} --}}
<?php
 $id=$ambildataedit->id;
 $username_siswa=$ambildataedit->username_siswa;
 $nama=$ambildataedit->nama;
 $tapel=$ambildataedit->tapel;
 $tapel_encode=str_replace('/', 'garing', $tapel);
 $kelas=$ambildataedit->kelas;
?>
@endforeach

@extends('admin.layouts.main')
@section('title',"Pembayaran \" $username_siswa - $nama \" ")
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





            <div class="panel-body">
                <form class="form-horizontal" action="{{ url('admin/bayartagihansiswas') }}" method="post" enctype="multipart/form-data">
                    {{-- @method('put') --}}
                    @csrf

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">

                                <div class="form-group">

                                    <input  class="form-control" type="hidden" placeholder="Masukkan data" name="tagihan_siswas_id" value="{{ $id }}">
                                    <input class="form-control" type="hidden" placeholder="Masukkan data" name="username_siswa" value="{{ $username_siswa }}">

                                    <label class="col-sm-3 control-label" for="form-control-9">Tahun Pelajaran</label>
                                    <div class="col-sm-9">
                                        <select id="form-control-9" class="form-control" name="tapel" read-only>



                                            <option> {{ $tapel }} </option>

                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-9">Kelas</label>
                                    <div class="col-sm-9">
                                        <select id="form-control-9" class="form-control" name="kelas" read-only>
                                            <option> {{ $kelas }} </option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="rupiah">Nominal Tagihan</label>
                                    <div class="col-sm-9">
                                        <input id="rupiah" class="form-control" type="text"
                                            placeholder="Masukkan Nominal Tagihan" name="jml_bayar" value="@currency(0)">

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

        <a href="{{ url('/admin/tagihansiswas/') }}/{{ $tapel_encode }}/{{ $kelas }}" class="btn btn-warning">&nbsp;Batal &nbsp; </a> &nbsp; <button type="submit" class="btn btn-primary">Simpan</button>

                                    </div>
                                </div>


                </form>
            </div>
        </div>
    </div>
</div>






</form>

</div>


<hr>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered dataTable" id="table-1">
    <thead>
        <tr>
            <th width="10%">-</th>
            <th>Pembayaran Ke - </th>
            <th width="15%">Jumlah Bayar</th>
            <th width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
                     $totalbayar=0;
                   $caridata = DB::table('tagihan_siswas_details')
                        ->where('tagihan_siswas_id', '=', $id)
                        ->count();
                        $result_detail_bayar  = DB::select("SELECT * FROM tagihan_siswas_details WHERE tagihan_siswas_id='$id' ORDER BY tagihan_siswas_details.id ASC");
        @endphp
 @foreach ($result_detail_bayar as $datadetail)
<tr>
    <td>-</td>
    <td>Pembayaran ke - {{ $loop->index+1 }}</td>
 <td>@currency($datadetail->jml_bayar)</td>
 <td>
    <form action="/admin/tagihansiswas/hapusbayar/{{ $tapel_encode }}/{{ $kelas }}/{{$username_siswa}}/{{ $datadetail->id }}" method="post" class="d-inline">

        @csrf
        <button class="btn btn-danger m-w-100"
            onclick="return  confirm('Anda yakin menghapus data ini? Y/N')"><span
                class="pcoded-micon"> <i class="zmdi zmdi-delete"></i> </span></button>
    </form>
 </td>
</tr>
 @php
     $totalbayar+=$datadetail->jml_bayar;
 @endphp

@endforeach
    </div>
    </div>
</div>

</div>

@endsection
