@extends('ppdb.layouts.halluar')

@section('title','Rincian Lain')
@section('link-nav-rincian','active')

@section('csshere')
@endsection

@section('jshere')
@endsection


@section('container')

@php
if((!empty($ppdb_siswas))&&(!empty($ppddb_siswas_ortus))){
    $nama=$ppdb_siswas->nama;
    $tempat_lahir=$ppdb_siswas->tempat_lahir;
    $tgl_lahir=$ppdb_siswas->tgl_lahir;
    $jk=$ppdb_siswas->jk;
    $agama=$ppdb_siswas->agama;
    $nama_ayah=$ppdb_siswas_ortus->ayah_nama;
    $pekerjaan=$ppdb_siswas_ortus->ayah_pekerjaan;

    $alamat=$ppdb_siswas->alamat;
    $no_hp=$ppdb_siswas->hp;
    $wali_nama=$ppdb_siswas_ortus->wali_nama;
    $wali_tahun=$ppdb_siswas_ortus->wali_pekerjaan;
    $no_telp=$ppdb_siswas_ortus->telp;
}else{
    $nama="-";
    $tempat_lahir="-";
    $tgl_lahir="-";
    $jk="-";
    $agama="-";
    $nama_ayah="-";
    $pekerjaan="-";

    $alamat="-";
    $no_hp="-";
    $wali_nama="-";
    $wali_tahun="-";
    $no_telp="-";
}
@endphp


    <main class="container">



<section class="pt-5 pb-5" data-aos="fade-up">
<br><br><br><br>
    <div class="table-responsive">
        <a href="{{route('cetak_ppdb_siswas')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
    </div>

</section>




        <!--------------------------------------
END
--------------------------------------->

    </main>

@endsection
