@extends('admin.layouts.main')
@section('title','Edit Tagihan Siswa')
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
 $tapel_id=$ambildataedit->tapel_id;
 $tapel=$ambildataedit->tapel;
 $kelas=$ambildataedit->kelas;
 $kelas_id=$ambildataedit->kelas_id;
 $nominal_tagihan=$ambildataedit->nominal_tagihan;
?>
@endforeach
            <div class="panel-body">
                <form class="form-horizontal" action="{{ url('admin/aturtagihans/ ') }}{{$id}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-9">Tahun Pelajaran</label>
                                    <div class="col-sm-9">
                                        <select id="form-control-9" class="form-control" name="tapel_id">

                                            <option value="{{  $tapel_id }}" selected> {{ $tapel }} </option>
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
                                            <option value="{{  $kelas_id }}" selected> {{ $kelas }} </option>
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
                                            placeholder="Masukkan Nominal Tagihan" name="rupiah" value="@currency($nominal_tagihan)">

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

        <a href="{{ url('/admin/aturtagihans') }}" class="btn btn-warning">&nbsp;Batal &nbsp; </a> &nbsp; <button type="submit" class="btn btn-primary">Simpan</button>

                                    </div>
                                </div>


                </form>
            </div>
        </div>
    </div>
</div>






</form>

</div>


</div>

</div>
@endsection
