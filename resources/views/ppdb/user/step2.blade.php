@extends('ppdb.layouts.halluar')

@section('title','Orang Tua')
@section('link-nav-ortu','active')

@section('csshere')
@endsection

@section('jshere')
@endsection


@section('container')


@php
if(!empty($ppdb_siswas_ortus)){
    $ayah_nama=$ppdb_siswas_ortus->ayah_nama;
    $ayah_nik=$ppdb_siswas_ortus->ayah_nik;
    $ayah_tahunlahir=$ppdb_siswas_ortus->ayah_tahunlahir;
    $ayah_pendidikan=$ppdb_siswas_ortus->ayah_pendidikan;
    $ayah_pekerjaan=$ppdb_siswas_ortus->ayah_pekerjaan;
    $ayah_penghasilanbulanan=$ppdb_siswas_ortus->ayah_penghasilanbulanan;
    $ayah_berkebutuhankhusus=$ppdb_siswas_ortus->ayah_berkebutuhankhusus;

    $ibu_nama=$ppdb_siswas_ortus->ibu_nama;
    $ibu_nik=$ppdb_siswas_ortus->ibu_nik;
    $ibu_tahunlahir=$ppdb_siswas_ortus->ibu_tahunlahir;
    $ibu_pendidikan=$ppdb_siswas_ortus->ibu_pendidikan;
    $ibu_pekerjaan=$ppdb_siswas_ortus->ibu_pekerjaan;
    $ibu_penghasilanbulanan=$ppdb_siswas_ortus->ibu_penghasilanbulanan;
    $ibu_berkebutuhankhusus=$ppdb_siswas_ortus->ibu_berkebutuhankhusus;

    $wali_nama=$ppdb_siswas_ortus->wali_nama;
    $wali_nik=$ppdb_siswas_ortus->wali_nik;
    $wali_tahunlahir=$ppdb_siswas_ortus->wali_tahunlahir;
    $wali_pendidikan=$ppdb_siswas_ortus->wali_pendidikan;
    $wali_pekerjaan=$ppdb_siswas_ortus->wali_pekerjaan;
    $wali_penghasilanbulanan=$ppdb_siswas_ortus->wali_penghasilanbulanan;
}else{
    $ayah_nama="";
    $ayah_nik="";
    $ayah_tahunlahir="";
    $ayah_pendidikan="";
    $ayah_pekerjaan="";
    $ayah_penghasilanbulanan="";
    $ayah_berkebutuhankhusus="";

    $ibu_nama="";
    $ibu_nik="";
    $ibu_tahunlahir="";
    $ibu_pendidikan="";
    $ibu_pekerjaan="";
    $ibu_penghasilanbulanan="";
    $ibu_berkebutuhankhusus="";

    $wali_nama="";
    $wali_nik="";
    $wali_tahunlahir="";
    $wali_pendidikan="";
    $wali_pekerjaan=
    $wali_penghasilanbulanan="";
}
@endphp

    <main class="container">



<section class="pt-5 pb-5" data-aos="fade-up">



<form action="ppdbuser_ortu" method="POST" id="form">
    @csrf
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Data Orang Tua dan Wali </h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan melengkapi data profil kalian sesuai dengan form yang disediakan. jika terdapat tanda bintang <code>(*)</code>, maka wajib diisi.</p>

                        <input type="hidden" class="form-control" placeholder="email" name="users_email" id="email" readonly value="{{ Auth::user()->email }}">
                        <input type="hidden" class="form-control" placeholder="email" name="caridata" id="email" readonly value="{{ $caridata }}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">DATA AYAH</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Ayah" name="ayah_nama" id="ayah_nama" value="{{ $ayah_nama }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">NIK Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="NIK Ayah" name="ayah_nik" id="ayah_nik" value="{{ $ayah_nik }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tanggal Lahir Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Ayah" name="ayah_tahunlahir" id="ayah_tahunlahir" value="{{ $ayah_tahunlahir }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Pendidikan Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pendidikan Ayah" name="ayah_pendidikan" id="ayah_pendidikan" value="{{ $ayah_pendidikan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Pekerjaan Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ayah" name="ayah_pekerjaan" id="ayah_pekerjaan" value="{{ $ayah_pekerjaan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Penghasilan Bulanan Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="ayah_penghasilanbulanan" id="ayah_penghasilanbulanan">
                                                <?php
                                                if(!empty($ayah_penghasilanbulanan)){
                                                    ?>

                                                <option value="{{ $ayah_penghasilanbulanan }}">{{ $ayah_penghasilanbulanan }}</option>
                                                    <?php
                                                }
                                                ?>
                                               <option value="" disabled>- Pilih -</option>
                                                <option value="< Rp 500.000,00">< Rp 500.000,00</option><option value="Rp. 500.000,00 - Rp. 999.999,00">Rp. 500.000,00 - Rp. 999.999,00</option>
                                                <option value="Rp. 1.000.000,00 - Rp. 1.999.999,00">Rp. 1.000.000,00 - Rp. 1.999.999,00</option>
                                                <option value="Rp. 2.000.000,00 - Rp. 4.999.999,00">Rp. 2.000.000,00 - Rp. 4.999.999,00</option>
                                                <option value="Rp. 5.000.000,00 - Rp. 20.000.000,00">Rp. 5.000.000,00 - Rp. 20.000.000,00</option>
                                                <option value="> Rp. 20.000.000,00">> Rp. 20.000.000,00</option>
                                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Berkebutuhan khusus Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="ayah_berkebutuhankhusus" id="ayah_berkebutuhankhusus">
                                                <?php
                                                if(!empty($ayah_berkebutuhankhusus)){
                                                    ?>

                                                <option>{{ $ayah_berkebutuhankhusus }}</option>
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



                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">DATA IBU</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Ibu" name="ibu_nama" id="ibu_nama" value="{{ $ibu_nama }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">NIK Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="NIK Ibu" name="ibu_nik" id="ibu_nik"  value="{{ $ibu_nik }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tanggal Lahir Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Ibu" name="ibu_tahunlahir" id="ibu_tahunlahir"  value="{{ $ibu_tahunlahir }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Pendidikan Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pendidikan Ibu" name="ibu_pendidikan" id="ibu_pendidikan" value="{{ $ibu_pendidikan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Pekerjaan Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ibu" name="ibu_pekerjaan" id="ibu_pekerjaan"  value="{{ $ibu_pekerjaan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Penghasilan Bulanan Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="ibu_penghasilanbulanan" id="gender">
                                                <?php
                                                if(!empty($ibu_penghasilanbulanan)){
                                                    ?>

                                                <option>{{ $ibu_penghasilanbulanan }}</option>
                                                    <?php
                                                }
                                                ?>
                                               <option value="" disabled>- Pilih -</option>
                                                <option value="< Rp 500.000,00">< Rp 500.000,00</option><option value="Rp. 500.000,00 - Rp. 999.999,00">Rp. 500.000,00 - Rp. 999.999,00</option>
                                                <option value="Rp. 1.000.000,00 - Rp. 1.999.999,00">Rp. 1.000.000,00 - Rp. 1.999.999,00</option>
                                                <option value="Rp. 2.000.000,00 - Rp. 4.999.999,00">Rp. 2.000.000,00 - Rp. 4.999.999,00</option>
                                                <option value="Rp. 5.000.000,00 - Rp. 20.000.000,00">Rp. 5.000.000,00 - Rp. 20.000.000,00</option>
                                                <option value="> Rp. 20.000.000,00">> Rp. 20.000.000,00</option>
                                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Berkebutuhan khusus Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="ibu_berkebutuhankhusus" id="ibu_berkebutuhankhusus">
                                                <?php
                                                if(!empty($ibu_berkebutuhankhusus)){
                                                    ?>

                                                <option>{{ $ibu_berkebutuhankhusus }}</option>
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



                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">DATA WALI</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Wali <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Wali" name="wali_nama" id="wali_nama" value="{{ $wali_nama }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">NIK Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="NIK Wali" name="wali_nik" id="wali_nik" value="{{ $wali_nik }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tanggal Lahir Wali <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Wali" name="wali_tahunlahir" id="wali_tahunlahir" value="{{ $wali_tahunlahir }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Pendidikan Wali <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pendidikan Wali" name="wali_pendidikan" id="wali_pendidikan" value="{{ $wali_pendidikan}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Pekerjaan Wali <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pekerjaan Wali" name="wali_pekerjaan" id="wali_pekerjaan"  value="{{ $wali_pekerjaan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Penghasilan Bulanan Wali <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="wali_penghasilanbulanan" id="gender">
                                                <?php
                                                if(!empty($wali_penghasilanbulanan)){
                                                    ?>

                                                <option>{{ $wali_penghasilanbulanan }}</option>
                                                    <?php
                                                }
                                                ?>
                                               <option value="" disabled>- Pilih -</option>
                                                <option value="< Rp 500.000,00">< Rp 500.000,00</option><option value="Rp. 500.000,00 - Rp. 999.999,00">Rp. 500.000,00 - Rp. 999.999,00</option>
                                                <option value="Rp. 1.000.000,00 - Rp. 1.999.999,00">Rp. 1.000.000,00 - Rp. 1.999.999,00</option>
                                                <option value="Rp. 2.000.000,00 - Rp. 4.999.999,00">Rp. 2.000.000,00 - Rp. 4.999.999,00</option>
                                                <option value="Rp. 5.000.000,00 - Rp. 20.000.000,00">Rp. 5.000.000,00 - Rp. 20.000.000,00</option>
                                                <option value="> Rp. 20.000.000,00">> Rp. 20.000.000,00</option>
                                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Berkebutuhan khusus Wali <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="wali_berkebutuhankhusus" id="wali_berkebutuhankhusus">
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
