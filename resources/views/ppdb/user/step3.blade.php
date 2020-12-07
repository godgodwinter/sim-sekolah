@extends('ppdb.layouts.halluar')

@section('title','Rincian Lain')
@section('link-nav-rincian','active')

@section('csshere')
@endsection

@section('jshere')
@endsection


@section('container')


    <main class="container">


        
<section class="pt-5 pb-5" data-aos="fade-up">
  

    
	<form action="#" method="post" id="form">
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Rincian Data Lainnya </h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan melengkapi data profil kalian sesuai dengan form yang disediakan. jika terdapat tanda bintang <code>(*)</code>, maka wajib diisi.</p>
    
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
                                            <input type="number" class="form-control" placeholder="Tinggi" name="tinggi" id="tinggi">
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
                                            <input type="number" class="form-control" placeholder="Berat badan" name="berat" id="berat">
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
                                            <input type="number" class="form-control" placeholder="Lingkar kepala" name="lingkarkepala" id="lingkarkepala">
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
                                                <option value="" disabled selected>- Pilih -</option>
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
                                            <input type="text" class="form-control" placeholder="Dalam Kilo Meter" name="dalamkilometer" id="dalamkilometer">
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
                                            <input type="text" class="form-control" placeholder="Jumlah Saudara Kandung" name="jmlsaudarakandung" id="jmlsaudarakandung">
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
                                                <option value="" disabled selected>- Pilih -</option>
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
                                                <option value="" disabled selected>- Pilih -</option>
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
                                            <input type="text" class="form-control" placeholder="Nama Prestasi" name="prestasi_nama" id="prestasi_nama">
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
                                            <input type="text" class="form-control" placeholder="Tahun Prestasi" name="prestasi_tahun" id="prestasi_tahun">
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
                                            <input type="text" class="form-control" placeholder="Penyelenggara" name="prestasi_penyelenggara" id="prestasi_penyelenggara">
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
                                            <input type="text" class="form-control" placeholder="Peringkat" name="prestasi_peringkat" id="prestasi_peringkat">
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
                                            <input type="text" class="form-control" placeholder="Jenis Beasiswa" name="beasiswa_jenis" id="beasiswa_jenis">
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
                                        <input type="text" class="form-control" placeholder="Keterangan" name="beasiswa_keterangan" id="beasiswa_keterangan">
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
                                            <input type="text" class="form-control" placeholder="Tahun Mulai" name="beasiswa_tahun_mulai" id="beasiswa_tahun_mulai">
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
                                            <input type="text" class="form-control" placeholder="Tahun Selesai" name="beasiswa_tahun_selesai" id="beasiswa_tahun_selesai">
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
                                            <input type="text" class="form-control" placeholder="Jenis Kesejahteraan Peserta Didik" name="kesejahteraanpesertadidik_jenis" id="kesejahteraanpesertadidik_jenis">
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
                                        <input type="text" class="form-control" placeholder="No Kartu" name="kesejahteraanpesertadidik_nokartu" id="kesejahteraanpesertadidik_nokartu">
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
                                            <input type="text" class="form-control" placeholder="Nama Di kartu" name="kesejahteraanpesertadidik_namadikartu" id="kesejahteraanpesertadidik_namadikartu">
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
                                                <option value="" disabled selected>- Pilih -</option>
                                                <option>Teknik dan Bisnis Sepeda Motor</option>
                                              
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
                                                <option value="" disabled selected>- Pilih -</option>
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
                                            <input type="text" class="form-control" placeholder="Tanggal Masuk" name="regristrasi_tglmasuk" id="regristrasi_tglmasuk">
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
                                            <input type="text" class="form-control" placeholder="Sekolah Asal" name="regristrasi_sekolahasal" id="regristrasi_sekolahasal">
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
                                            <input type="text" class="form-control" placeholder="Nomor Peserta UN" name="regristrasi_nomorpeserta_un" id="regristrasi_nomorpeserta_un">
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
                                            <input type="text" class="form-control" placeholder="No. Seri Ijazah" name="regristrasi_noseriijazah" id="regristrasi_noseriijazah">
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
                                            <input type="text" class="form-control" placeholder="No. SKHUN" name="regristrasi_noskhun" id="regristrasi_noskhun">
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
                                            <input type="text" class="form-control" placeholder="Tanggal Keluar" name="regristrasi_wna_tglkeluar" id="regristrasi_wna_tglkeluar">
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
                                            <input type="text" class="form-control" placeholder="Alasan WNA" name="regristrasi_wna_alasan" id="regristrasi_wna_alasan">
                                        </div>
                                    </div>
                                </div>
    
    
    
    
    
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
    
        
    
        </form>
    
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="mb-3">Dengan menekan tombol <code>Simpan</code>, data yang anda cantumkan di atas adalah benar dan dapat dipertanggungjawabkan.</p>
                        <a href="#" onclick="save()" class="btn bg-teal btn-lg"><i class="icon-floppy-disk mr-2"></i>Simpan</a>
                    </div>
                </div>
            </div>
        </div>
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