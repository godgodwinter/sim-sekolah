@extends('ppdb.layouts.halluar')

@section('title','Rincian Lain')
@section('link-nav-rincian','active')

@section('csshere')
@endsection

@section('jshere')
@endsection


@section('container')

@php
if(!empty($ppdb_siswas_rincians)){
    $tinggi=$ppdb_siswas_rincians->tinggi;
    $berat=$ppdb_siswas_rincians->berat;
    $lingkarkepala=$ppdb_siswas_rincians->lingkarkepala;
    $jarakkesekolah=$ppdb_siswas_rincians->jarakkesekolah;
    $dalamkilometer=$ppdb_siswas_rincians->dalamkilometer;
    $waktutempuh=$ppdb_siswas_rincians->waktutempuh;
    $jmlsaudarakandung=$ppdb_siswas_rincians->jmlsaudarakandung;

    $prestasi_jenis=$ppdb_siswas_rincians->prestasi_jenis;
    $prestasi_tingkat=$ppdb_siswas_rincians->prestasi_tingkat;
    $prestasi_nama=$ppdb_siswas_rincians->prestasi_nama;
    $prestasi_tahun=$ppdb_siswas_rincians->prestasi_tahun;
    $prestasi_penyelenggara=$ppdb_siswas_rincians->prestasi_penyelenggara;
    $prestasi_peringkat=$ppdb_siswas_rincians->prestasi_peringkat;

    $beasiswa_jenis=$ppdb_siswas_rincians->beasiswa_jenis;
    $beasiswa_keterangan=$ppdb_siswas_rincians->beasiswa_keterangan;
    $beasiswa_tahun_mulai=$ppdb_siswas_rincians->beasiswa_tahun_mulai;
    $beasiswa_tahun_selesai=$ppdb_siswas_rincians->beasiswa_tahun_selesai;
    $kesejahteraanpesertadidik_jenis=$ppdb_siswas_rincians->kesejahteraanpesertadidik_jenis;
    $kesejahteraanpesertadidik_nokartu=$ppdb_siswas_rincians->kesejahteraanpesertadidik_nokartu;
    $kesejahteraanpesertadidik_namadikartu=$ppdb_siswas_rincians->kesejahteraanpesertadidik_namadikartu;

    $regristrasi_kompetensikeahlian=$ppdb_siswas_rincians->regristrasi_kompetensikeahlian;
    $regristrasi_jenisdaftar=$ppdb_siswas_rincians->regristrasi_jenisdaftar;
    $regristrasi_nis=$ppdb_siswas_rincians->regristrasi_nis;
    $regristrasi_tglmasuk=$ppdb_siswas_rincians->regristrasi_tglmasuk;
    $regristrasi_sekolahasal=$ppdb_siswas_rincians->regristrasi_sekolahasal;
    $regristrasi_nomorpeserta_un=$ppdb_siswas_rincians->regristrasi_nomorpeserta_un;
    $regristrasi_noseriijazah=$ppdb_siswas_rincians->regristrasi_noseriijazah;
    $regristrasi_noskhun=$ppdb_siswas_rincians->regristrasi_noskhun;
    $regristrasi_wna_keluarkarena=$ppdb_siswas_rincians->regristrasi_wna_keluarkarena;
    $regristrasi_wna_tglkeluar=$ppdb_siswas_rincians->regristrasi_wna_tglkeluar;
    $regristrasi_wna_alasan=$ppdb_siswas_rincians->regristrasi_wna_alasan;
}else{
    $tinggi="";
    $berat="";
    $lingkarkepala="";
    $jarakkesekolah="";
    $dalamkilometer="";
    $waktutempuh="";
    $jmlsaudarakandung="";

    $prestasi_jenis="";
    $prestasi_tingkat="";
    $prestasi_nama="";
    $prestasi_tahun="";
    $prestasi_penyelenggara="";
    $prestasi_peringkat="";

    $beasiswa_jenis="";
    $beasiswa_keterangan="";
    $beasiswa_tahun_mulai="";
    $beasiswa_tahun_selesai="";
    $kesejahteraanpesertadidik_jenis=
    $kesejahteraanpesertadidik_nokartu="";
    $kesejahteraanpesertadidik_namadikartu="";

    $regristrasi_kompetensikeahlian="";
    $regristrasi_jenisdaftar="";
    $regristrasi_nis="";
    $regristrasi_tglmasuk="";
    $regristrasi_sekolahasal="";
    $regristrasi_nomorpeserta_un="";
    $regristrasi_noseriijazah="";
    $regristrasi_noskhun="";
    $regristrasi_wna_keluarkarena="";
    $regristrasi_wna_tglkeluar="";
    $regristrasi_wna_alasan="";
}
@endphp


    <main class="container">



<section class="pt-5 pb-5" data-aos="fade-up">



    <form action="ppdbuser_rincian" method="POST" id="form">
        @csrf
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Rincian Data Lainnya </h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan melengkapi data profil kalian sesuai dengan form yang disediakan. jika terdapat tanda bintang <code>(*)</code>, maka wajib diisi.</p>

                        <input type="hidden" class="form-control" placeholder="email" name="users_email" id="email" readonly value="{{ Auth::user()->email }}">
                        <input type="hidden" class="form-control" placeholder="email" name="caridata" id="email" readonly value="{{ $caridata }}">
                        <div class="row">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">DATA PRIBADI TAMBAHAN</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tinggi Badan<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Tinggi" name="tinggi" id="tinggi" value="{{ $tinggi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Berat Badan <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Berat badan" name="berat" id="berat"  value="{{ $berat }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Lingkar Kepala <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Lingkar kepala" name="lingkarkepala" id="lingkarkepala"  value="{{ $lingkarkepala }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Jarak Ke Sekolah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="jarakkesekolah" id="jarakkesekolah">
                                                <option value="" disabled>- Pilih -</option>
                                                <option>Kurang dari 1km</option>
                                                <option>Lebih dari 1km</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Dalam Kilo Meter<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Dalam Kilo Meter" name="dalamkilometer" id="dalamkilometer"  value="{{ $dalamkilometer }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Jumlah Saudara Kandung<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Jumlah Saudara Kandung" name="jmlsaudarakandung" id="jmlsaudarakandung"  value="{{ $jmlsaudarakandung }}">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">PRESTASI</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Jenis Prestasi <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="prestasi_jenis" id="prestasi_jenis">
                                                <option value="" disabled>- Pilih -</option>
                                                <option>Sains</option>
                                                <option>Seni</option>
                                                <option>Olahraga</option>
                                                <option>Lain-lain</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tingkat Prestasi <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="prestasi_tingkat" id="prestasi_tingkat">
                                                <option value="" disabled>- Pilih -</option>
                                                <option>Sekolah</option>
                                                <option>Kecamatan</option>
                                                <option>Kabupaten</option>
                                                <option>Nasional</option>
                                                <option>Internasional</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Prestasi <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Prestasi" name="prestasi_nama" id="prestasi_nama"  value="{{ $prestasi_nama }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tahun <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Tahun Prestasi" name="prestasi_tahun" id="prestasi_tahun" value="{{ $prestasi_tahun }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Penyelenggara <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Penyelenggara" name="prestasi_penyelenggara" id="prestasi_penyelenggara"  value="{{ $prestasi_penyelenggara }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Peringkat <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Peringkat" name="prestasi_peringkat" id="prestasi_peringkat"  value="{{ $prestasi_peringkat }}">
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">BEASISWA</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Jenis Beasiswa<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Jenis Beasiswa" name="beasiswa_jenis" id="beasiswa_jenis"  value="{{ $beasiswa_jenis }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Keterangan<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                        <input type="text" class="form-control" placeholder="Keterangan" name="beasiswa_keterangan" id="beasiswa_keterangan"  value="{{ $beasiswa_keterangan }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tahun Mulai<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Tahun Mulai" name="beasiswa_tahun_mulai" id="beasiswa_tahun_mulai" value="{{ $beasiswa_tahun_mulai }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tahun Selesai <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Tahun Selesai" name="beasiswa_tahun_selesai" id="beasiswa_tahun_selesai" value="{{ $beasiswa_tahun_selesai }}">
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">KESEJAHTERAAN PESERTA DIDIK</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Jenis Kesejahteraan<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Jenis Kesejahteraan Peserta Didik" name="kesejahteraanpesertadidik_jenis" id="kesejahteraanpesertadidik_jenis"  value="{{ $kesejahteraanpesertadidik_jenis }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">No Kartu<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                        <input type="text" class="form-control" placeholder="No Kartu" name="kesejahteraanpesertadidik_nokartu" id="kesejahteraanpesertadidik_nokartu"  value="{{ $kesejahteraanpesertadidik_nokartu }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama di Kartu<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Di kartu" name="kesejahteraanpesertadidik_namadikartu" id="kesejahteraanpesertadidik_namadikartu"  value="{{ $kesejahteraanpesertadidik_namadikartu }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">REGISTRASI PESERTA DIDIK</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kompetensi Keahlian<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="regristrasi_kompetensikeahlian" id="regristrasi_kompetensikeahlian">
                                                <option value="" disabled>- Pilih -</option>
                                                <option>Teknik dan Bisnis Sepeda Motor</option>
                                                <option>Teknik Komputer dan Jaringan</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Jenis Daftar<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="regristrasi_jenisdaftar" id="regristrasi_jenisdaftar">
                                                <option value="" disabled>- Pilih -</option>
                                                <option>Siswa Baru</option>
                                                <option>Pindahan</option>
                                                <option>Kembali Bersekolah</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">NIS<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="NIS" name="regristrasi_nis" id="regristrasi_nis">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tanggal Masuk Sekolah<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Tanggal Masuk" name="regristrasi_tglmasuk" id="regristrasi_tglmasuk"  value="{{ $regristrasi_tglmasuk }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Sekolah Asal<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Sekolah Asal" name="regristrasi_sekolahasal" id="regristrasi_sekolahasal" value="{{ $regristrasi_sekolahasal }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nomor Peserta UN<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nomor Peserta UN" name="regristrasi_nomorpeserta_un" id="regristrasi_nomorpeserta_un" value="{{ $regristrasi_nomorpeserta_un }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nomor Seri Ijazah<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="No. Seri Ijazah" name="regristrasi_noseriijazah" id="regristrasi_noseriijazah" value="{{ $regristrasi_noseriijazah }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">No SKHUN<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="No. SKHUN" name="regristrasi_noskhun" id="regristrasi_noskhun"  value="{{ $regristrasi_noskhun }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tanggal Keluar<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Tanggal Keluar" name="regristrasi_wna_tglkeluar" id="regristrasi_wna_tglkeluar"  value="{{ $regristrasi_wna_tglkeluar }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Alasan WNA<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Alasan WNA" name="regristrasi_wna_alasan" id="regristrasi_wna_alasan"   value="{{ $regristrasi_wna_alasan }}">
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
