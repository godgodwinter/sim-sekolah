@extends('ppdb.layouts.halluar')

@section('title','Identitas Diri')
@section('link-nav-identitas','active')

@section('csshere')
@endsection

@section('jshere')
@endsection


@section('container')

@php
if(!empty($ppdb_siswas)){
    $nik=$ppdb_siswas->nik;
    $nisn=$ppdb_siswas->nisn;
    $nama=$ppdb_siswas->nama;
    $jk=$ppdb_siswas->jk;
    $no_kk=$ppdb_siswas->no_kk;
    $tempat_lahir=$ppdb_siswas->tempat_lahir;
    $tgl_lahir=$ppdb_siswas->tgl_lahir;
    $no_registrasi_akta_lahir=$ppdb_siswas->no_registrasi_akta_lahir;
    $agama=$ppdb_siswas->agama;
    $kewarganegaraan=$ppdb_siswas->kewarganegaraan;
    $berkebutuhankhusus=$ppdb_siswas->berkebutuhankhusus;
    $alamat_jalan=$ppdb_siswas->alamat_jalan;
    $rt=$ppdb_siswas->rt;
    $rw=$ppdb_siswas->rw;
    $nama_dusun=$ppdb_siswas->nama_dusun;
    $nama_kelurahan_desa=$ppdb_siswas->nama_kelurahan_desa;
    $kecamatan=$ppdb_siswas->kecamatan;
    $kodepos=$ppdb_siswas->kodepos;
    $tempattinggal=$ppdb_siswas->tempattinggal;
    $modatransportasi=$ppdb_siswas->modatransportasi;
    $apakahpunyakip=$ppdb_siswas->apakahpunyakip;
    $apakahmenerimakip=$ppdb_siswas->apakahmenerimakip;
    $alasanmenonakpip=$ppdb_siswas->alasanmenonakpip;
    $anakkeberapa=$ppdb_siswas->anakkeberapa;
    $telp=$ppdb_siswas->telp;
    $hp=$ppdb_siswas->hp;
}else{
    $nik="";
    $nisn="";
    $nama="";
    $jk="";
    $no_kk="";
    $tempat_lahir="";
    $tgl_lahir="";
    $no_registrasi_akta_lahir="";
    $agama="";
    $kewarganegaraan="";
    $berkebutuhankhusus="";
    $alamat_jalan="";
    $rt="";
    $rw="";
    $nama_dusun="";
    $nama_kelurahan_desa="";
    $kecamatan="";
    $kodepos="";
    $tempattinggal=
    $modatransportasi="";
    $apakahpunyakip="";
    $apakahmenerimakip="";
    $alasanmenonakpip="";
    $anakkeberapa="";
    $telp="";
    $hp="";
}
@endphp


    <main class="container">


            {{-- {{ dd($ppdb_siswas->nik) }} --}}


            {{-- @section('notif')
            @if (session('status'))

            <section class="pt-5 pb-5" data-aos="fade-up">
                <div class="row mt-5">

                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <i class="fas fa-bullhorn"></i>   {{ session('status') }}  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>

                    </div>
                </div>
                </section>

            @endif --}}

<section class="pt-5 pb-5" data-aos="fade-up">



	<form action="ppdbuser_identitas" method="POST" id="form">
        @csrf
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Data Identitas Diri</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan melengkapi data profil kalian sesuai dengan form yang disediakan. jika terdapat tanda bintang <code>(*)</code>, maka wajib diisi.</p>
{{-- {{ dd($caridata) }} --}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">IDENTITAS DIRI</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Email <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="email" class="form-control" placeholder="email" name="users_email" id="email" readonly value="{{ Auth::user()->email }}">
                                            <input type="hidden" class="form-control" placeholder="email" name="caridata" id="email" readonly value="{{ $caridata }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">NISN <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="NISN" name="nisn" id="nisn" value="{{ $nisn }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3" id="nama_lengkap">Nama Lengkap <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-user"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Pendaftar" name="nama" id="nama_lengkap" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3" >Jenis Kelamin <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="jk" id="gender">
                                                <?php
                                                if(!empty($jk)){
                                                    ?>

                                                <option>{{ $jk }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled selected>- Pilih -</option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3" id="nik">NIK <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-user"></i></span>
                                            </span>
                                    <input type="text" class="form-control" placeholder="NIK / No. KITAS(Untuk WNA)" name="nik" id="nik" value="<?=$nik;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3" id="no_kk">No KK <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-user"></i></span>
                                            </span>
                                    <input type="text" class="form-control" placeholder="No KK" name="no_kk" id="no_kk" value="<?=$no_kk;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3" id="tempat_lahir">Tempat Lahir <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-user"></i></span>
                                            </span>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir"  value="<?=$tempat_lahir;?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tanggal Lahir <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir"  value="<?=$tgl_lahir;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">No. Akta<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="No Registrasi Akta Lahir" name="no_registrasi_akta_lahir" id="no_registrasi_akta_lahir"  value="<?=$no_registrasi_akta_lahir;?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Agama <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="agama" id="agama">
                                                <?php
                                                if(!empty($agama)){
                                                    ?>

                                                <option>{{ $agama }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option>Islam</option>
                                                <option>Kristen/Protestan</option>
                                                <option>Katholik</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Khonghucu</option>
                                                <option>Kepercayaan Kepada Tuhan YME</option>
                                                <option>lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kewarganegaraan <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="kewarganegaraan" id="kewarganegaraan">
                                                <?php
                                                if(!empty($kewarganegaraan)){
                                                    ?>

                                                <option>{{ $kewarganegaraan }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Indonesia (WNI)">Indonesia (WNI)</option>
                                                <option value="Asing (WNA)">Asing (WNA)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Berkebutuhan Khusus <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="berkebutuhankhusus" id="berkebutuhankhusus">
                                                <?php
                                                if(!empty($berkebutuhankhusus)){
                                                    ?>

                                                <option>{{ $berkebutuhankhusus }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value="Netra">Netra</option>
                                                <option value="Rungu">Rungu</option>
                                                <option value="Grahita Ringan">Grahita Ringan</option>
                                                <option value="Grahita Sedang">Grahita Sedang</option>
                                                <option value="Daksa Ringan">Daksa Ringan</option>
                                                <option value="Daksa Sedang">Daksa Sedang</option>
                                                <option value="Wicara">Wicara</option>
                                                <option value="Tuna Ganda">Tuna Ganda</option>
                                                <option value="Hiper Aktif">Hiper Aktif</option>
                                                <option value="Cerdas Istimas">Cerdas Istimas</option>
                                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                                <option value="Narko">Narko</option>
                                                <option value="Indigo">Indigo</option>
                                                <option value="Dawn Sindrome">Dawn Sindrome</option>
                                                <option value="Autis">Autis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Alamat <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <textarea maxlength='250' rows="3" cols="3" class="form-control" placeholder="Alamat" name="alamat_jalan" id="alamat_jalan">{{ $alamat_jalan }}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">RT <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="RT" name="rt" id="rt" value="{{ $rt }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">RW <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="RW" name="rw" id="rw"  value="{{ $rw }}">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">




                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Dusun <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="Nama Dusun" name="nama_dusun" id="nama_dusun" value="{{ $nama_dusun }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Kelurahan/Desa <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="Nama Kelurahan atau Desa" name="nama_kelurahan_desa" id="nama_kelurahan_desa"  value="{{ $nama_kelurahan_desa }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kecamatan <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="Nama Kecamatan" name="kecamatan" id="kecamatan"  value="{{ $kecamatan }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kode POS <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="Kode POS" name="kodepos" id="kodepos"  value="{{ $kodepos }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tempat Tinggal<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="tempattinggal" id="tempattinggal">
                                                <?php
                                                if(!empty($tempattinggal)){
                                                    ?>

                                                <option>{{ $tempattinggal }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                                <option value="Wali">Wali</option>
                                                <option value="Kos">Kos</option>
                                                <option value="Asrama">Asrama</option>
                                                <option value="Panti Asuhan">Panti Asuhan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Moda Transportasi<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="modatransportasi" id="modatransportasi">
                                                <?php
                                                if(!empty($modatransportasi)){
                                                    ?>

                                                <option>{{ $modatransportasi }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Jalan Kaki">Jalan Kaki</option>
                                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                                <option value="Kendaraan Umun/Angkot">Kendaraan Umun/Angkot</option>
                                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                                <option value="Kereta Api">Kereta Api</option>
                                                <option value="Ojek">Ojek</option>
                                                <option value="Andong/Bendi/Saldo/Dokar/Delman">Andong/Bendi/Saldo/Dokar/Delman</option>
                                                <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
                                                <option value="Lainya">Lainya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Apakah Punya KIP?<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="apakahpunyakip" id="apakahpunyakip">
                                                <?php
                                                if(!empty($apakahpunyakip)){
                                                    ?>

                                                <option>{{ $apakahpunyakip }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Apakah Peserta Didik tetap menerima KIP?<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="apakahmenerimakip" id="apakahmenerimakip">
                                                <?php
                                                if(!empty($apakahmenerimakip)){
                                                    ?>

                                                <option>{{ $apakahmenerimakip }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Alasan Menolak KIP?<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="alasanmenonakpip" id="alasanmenonakpip">
                                                <?php
                                                if(!empty($alasanmenonakpip)){
                                                    ?>

                                                <option>{{ $alasanmenonakpip }}</option>
                                                    <?php
                                                }
                                                ?>
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Dilarang karena menerima bantuan serupa">Dilarang karena menerima bantuan serupa</option>
                                                <option value="Menolak">Menolak</option>
                                                <option value="Sudah Mampu">Sudah Mampu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Anak Ke Berapa?<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="Anak Keberapa" name="anakkeberapa" id="anakkeberapa" value="{{ $anakkeberapa }}">
                                        </div>
                                    </div>
                                </div>

                                <legend class="text-uppercase font-size-sm font-weight-bold">INFORMASI AKUN</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Email <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelop5"></i></span>
                                                </span>
                                                <input readonly type="email" class="form-control" placeholder="Email" name="email222" id="email" readonly value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nomor Telepon Rumah<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelop5"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Telepon Ruman" name="telp" id="telp" value="{{ $telp }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nomor HP<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelop5"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Nomor HP Pribadi" name="hp" id="hp" value="{{ $hp }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="mb-3">Dengan menekan tombol <code>Simpan</code>, data yang anda cantumkan di atas adalah benar dan dapat dipertanggungjawabkan.</p>
                        <button type="submit" class="btn btn-success btn-round"><i class="icon-floppy-disk mr-2"></i>Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-8">
                <div class="text-center pt-5 mt-5 mb-5">
                    <h1 class="font-weight-light h3"> <strong>Bantuan</strong> </h1>
                </div>
                <div class="text-center">

                    <a target="_blank" href="https://api.whatsapp.com/send?phone=112"><span
                            class="iconbox iconmedium rounded-circle bg-info text-white mr-1" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Hubungi"><i
                                class="fab fa-whatsapp"></i></span></a>

                </div>
            </div>
        </div>
        <!--------------------------------------
END
--------------------------------------->

    </main>


@endsection
