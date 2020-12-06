<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/favicon.ico">
    <link rel="icon" type="image/png"
        href="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>PPDB SMK DW KROMENGAN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Main CSS -->
    <link href="{{ asset("anchor/") }}/assets/css/main.css" rel="stylesheet" />

    <!-- Animation CSS -->
    <link href="{{ asset("anchor/") }}/assets/css/vendor/aos.css" rel="stylesheet" />

</head>

<body>

    <!----------------------------------------------------------------------
NAVBAR (remove topnav if you don't want changed nav background on scroll)
------------------------------------------------------------------------>
<nav class="topnav navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>PPDB</strong> SMK DW
                KROMENGAN</a><button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1" aria-expanded="false"
                aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown-1">
                <ul class="navbar-nav mr-auto">
                   
                  
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="ppdbuser_beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="ppdbuser_identitas">Identitas Diri</a></li>
                    <li class="nav-item"><a class="nav-link" href="ppdbuser_ortu">Orang Tua</a></li>
                    <li class="nav-item"><a class="nav-link" href="ppdbuser_rincian">Rincian</a></li>
                    <li class="nav-item"><a class="nav-link" href="ppdbuser_persetujuan">Persetujuan</a></li>
                    <li class="nav-item"><a class="nav-link" href="ppdbuser_logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->



    <main class="container">


        
<section class="pt-5 pb-5" data-aos="fade-up">
  

    
	<form action="#" method="post" id="form">
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Data Orang Tua dan Wali </h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan melengkapi data profil kalian sesuai dengan form yang disediakan. jika terdapat tanda bintang <code>(*)</code>, maka wajib diisi.</p>
    
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">INFORMASI ORANG TUA</legend>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah" id="nama_ayah">
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
                                            <input type="text" class="form-control" placeholder="NIK Ayah" name="ayah_nik" id="ayah_nik">
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
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir Ayah" name="ayah_tahunlahir" id="ayah_tahunlahir">
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
                                            <input type="text" class="form-control" placeholder="Pendidikan Ayah" name="ayah_pendidikan" id="ayah_pendidikan">
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
                                            <input type="text" class="form-control" placeholder="Pekerjaan Ayah" name="ayah_pekerjaan" id="ayah_pekerjaan">
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
                                            <input type="nama_ayah" class="form-control" placeholder="Nama Ayah" name="nama_ayah" id="nama_ayah">
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
                                            <input type="text" class="form-control" placeholder="Nama Pendaftar" name="nama" id="nama_lengkap">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3" >Jenis Kelamin <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="jk" id="gender">
                                                <option value="" disabled selected>- Pilih -</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
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
                                    <input type="text" class="form-control" placeholder="NIK / No. KITAS(Untuk WNA)" name="nik" id="nik">
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
                                    <input type="text" class="form-control" placeholder="No KK" name="no_kk" id="no_kk">
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
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir">
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
                                                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir">
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
                                            <input type="text" class="form-control daterange-single" placeholder="No Registrasi Akta Lahir" name="no_registrasi_akta_lahir" id="no_registrasi_akta_lahir">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Agama <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="agama" id="agama">
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen/Protestan</option>
                                                <option value="katholik">Katholik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="budha">Budha</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                                <option value="Kepercayaan Kepada Tuhan YME">Kepercayaan Kepada Tuhan YME</option>
                                                <option value="lainnya">lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kewarganegaraan <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="kewarganegaraan" id="kewarganegaraan">
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
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Alamat" name="alamat_jalan" id="alamat_jalan"></textarea>
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
                                            <input type="text" class="form-control daterange-single" placeholder="RT" name="rt" id="rt">
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
                                            <input type="text" class="form-control daterange-single" placeholder="RW" name="rw" id="rw">
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
                                            <input type="text" class="form-control daterange-single" placeholder="Nama Dusun" name="nama_dusun" id="nama_dusun">
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
                                            <input type="text" class="form-control daterange-single" placeholder="Nama Kelurahan atau Desa" name="nama_kelurahan_desa" id="nama_kelurahan_desa">
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
                                            <input type="text" class="form-control daterange-single" placeholder="Nama Kecamatan" name="kecamatan" id="kecamatan">
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
                                            <input type="text" class="form-control daterange-single" placeholder="Kode POS" name="kodepos" id="kodepos">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tempat Tinggal<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="tempattinggal" id="tempattinggal">
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
                                                <option value="" disabled>- Pilih -</option>
                                                <option value="Dilarang karena menerima bantuan serupa">Dilarang karena menerima bantuan serupa</option>
                                                <option value="Menolak">Menolak</option>
                                                <option value="Sudah Mampu">Sudah Mampu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Apakah Punya KIP<code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="Anak Keberapa" name="anakkeberapa" id="anakkeberapa">
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
                                                <input readonly type="email" class="form-control" placeholder="Email" name="email" id="email">
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
                                                <input type="text" class="form-control" placeholder="Telepon Ruman" name="telp" id="telp">
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
                                                <input type="text" class="form-control" placeholder="Nomor HP Pribadi" name="hp" id="hp">
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



    <!------------------------------------------
DEMO MODAL & DONATE BUTTON ONLY - DON'T COPY
------------------------------------------->
    <div class="modal fade" id="modal_newsletter" tabindex="-1" role="dialog" aria-labelledby="modal_newsletter"
        aria-hidden="true">
        <div class="modal-dialog shadow-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center justify-content-center">
                        <em class="text-muted mr-2">Share this freebie:</em>
                        <!-- Share Facebook -->
                        <span class="c-pointer iconbox iconsmall rounded-circle bg-secondary text-white mr-1"
                            data-sharer="facebook" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i
                                class="fab fa-facebook-f"></i></span>
                        <!-- Share Twitter -->
                        <span class="c-pointer iconbox iconsmall rounded-circle bg-info text-white mr-1"
                            data-sharer="twitter" data-title="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!"
                            data-hashtags="bootstrap,free"
                            data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i
                                class="fab fa-twitter"></i></span>
                        <!-- Share Google+ -->
                        <span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1"
                            data-sharer="googleplus"
                            data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i
                                class="fab fa-google"></i></span>
                        <!-- Share E-mail -->
                        <span class="c-pointer iconbox iconsmall rounded-circle bg-purple text-white mr-1"
                            data-sharer="email" data-title="Awesome Url"
                            data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"
                            data-subject="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!"
                            data-to="some@email.com"><i class="fas fa-envelope"></i></span>
                        <!-- Sharingbutton Pinterest -->
                        <span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1"
                            data-sharer="pinterest"
                            data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i
                                class="fab fa-pinterest"></i></span>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="{{ asset("anchor/") }}/assets/img/favicon.ico">
                    </div>
                    <h6 class="text-center font-weight-light ">Thanks for downloading Anchor Bootstrap UI Kit!</h6>
                    <h5 class="text-center mb-4">We'll e-mail you when a new version arrives! *</h5>
                    <form id="newsletter-form" action="https://www.themepush.com/sendy/subscribe" method="POST"
                        accept-charset="utf-8">
                        <div class="d-none">
                            <label for="hp">HP</label>
                            <br>
                            <input type="text" name="hp" id="hp">
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6">
                                <div class="form-group has-icon-left form-control-name">
                                    <label class="sr-only" for="inputName">Your name</label>
                                    <input type="text" name="name" id="name" required="" pattern="[A-Za-z\s]+"
                                        class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-icon-left form-control-email">
                                    <label class="sr-only" for="inputEmail">Email address</label>
                                    <input type="email" name="email" id="email" required="" class="form-control"
                                        placeholder="E-mail">
                                </div>
                            </div>
                            <input type="hidden" name="list" value="CVN62nDKE0qTf4XLs8J9iQ" checked="checked">
                            <div class="col-md-12 mb-3">
                                <input type="hidden" name="subform" value="yes">
                                <input onclick="requiredConsent()" class="btn btn-success btn-block shadow-sm"
                                    value="Send me updates & more freebies" type="submit" name="submit" id="submit">
                            </div>
                            <div class="col-md-12 mb-3 text-center">
                                <small class="d-block" style="color:#ccc;font-style:italic;line-height:1.4;">* This is a
                                    newsletter managed by WowThemes, the item author. It is the only way we can reach
                                    you out when a new version is released, so, please, subscribe!</small>
                            </div>
                        </div>
                        <div class="row justify-content-center d-none mt-3">
                            <label class="c-input c-checkbox small">
                                <input type="checkbox" name="gdpr" id="gdpr" checked="checked">
                                <span class="c-indicator"></span> I agree to the <a target="_blank"
                                    href="https://www.wowthemes.net/privacy-policy/#newsletter-subscription-forms">privacy
                                    policy</a>. </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="position:fixed; bottom:20px;left:20px;">
        <a href="https://api.whatsapp.com/send?phone=112" target="_blank"><img class="rounded-circle shadow-lg"
                src="{{ asset("anchor/") }}/assets/img/demo/coffee.png" width="70"
                data-toggle="tooltip" data-placement="top" title="" data-original-title="Buy me a coffee!"></a>
    </div>
    <!--------------------------------------
END DEMO MODAL & DONATE BUTTON
--------------------------------------->


    <!--------------------------------------
FOOTER
--------------------------------------->
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewbox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
        <path class="bg-black" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z" />
    </svg>
    <footer class="bg-black pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md mr-4">
                    <i class="fas fa-copyright text-white"></i>
                    <small class="d-block mt-3 text-muted">©
                        <script>
                            document.write(new Date().getFullYear())

                        </script>
                        TIM-DEV SMK DW KROMENGAN, Template by <a target="_blank"
                            href="https://www.wowthemes.net">WowThemes.net</a>. <a target="_blank"
                            href="https://www.wowthemes.net/freebies-license/">License</a></small>
                </div>
                <div class="col-6 col-md">
                    <h5 class="mb-4 text-white">Profil</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Visi & Misi</a></li>
                        <li><a class="text-muted" href="#">Sejarah Sekolah</a></li>
                        <li><a class="text-muted" href="#">Struktur Organisasi</a></li>
                        <li><a class="text-muted" href="#">Peta Lokasi</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5 class="mb-4 text-white">Paket Keahlian</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Teknik Bisnis Sepeda Motor</a></li>
                        <li><a class="text-muted" href="#">Teknik Komputer & Jaringan</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5 class="mb-4 text-white">Waka</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Kurikulum</a></li>
                        <li><a class="text-muted" href="#">Humas</a></li>
                        <li><a class="text-muted" href="#">Sarpras</a></li>
                        <li><a class="text-muted" href="#">Kesiswaan</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5 class="mb-4 text-white">Lainya</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Berita</a></li>
                        <li><a class="text-muted" href="#">Galeri</a></li>
                        <li><a class="text-muted" href="#">Info Lowongan Kerja</a></li>
                        <li><a class="text-muted" href="#">PPDB Online</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!--------------------------------------
JAVASCRIPTS
--------------------------------------->
    <script src="{{ asset("anchor/") }}/assets/js/vendor/jquery.min.js" type="text/javascript">
    </script>
    <script src="{{ asset("anchor/") }}/assets/js/vendor/popper.min.js" type="text/javascript">
    </script>
    <script src="{{ asset("anchor/") }}/assets/js/vendor/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="{{ asset("anchor/") }}/assets/js/vendor/share.js" type="text/javascript"></script>
    <script src="{{ asset("anchor/") }}/assets/js/functions.js" type="text/javascript"></script>

    <!-- Animation -->
    <script src="{{ asset("anchor/") }}/assets/js/vendor/aos.js" type="text/javascript"></script>
    <noscript>
        <style>
            *[data-aos] {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
            }

        </style>
    </noscript>
    <script>
        AOS.init({
            duration: 700
        });

    </script>

    <!-- Disable animation on less than 1200px, change value if you like -->
    <script>
        AOS.init({
            disable: function () {
                var maxWidth = 1200;
                return window.innerWidth < maxWidth;
            }
        });

    </script>

    <!-- Carousel Height Smooth -->
    <script>
        $('.carousel').on('slide.bs.carousel', function (event) {
            var height = $(event.relatedTarget).height();
            var $innerCarousel = $(event.target).find('.carousel-inner');
            $innerCarousel.animate({
                height: height
            });
        });

    </script>

    <!-- Popovers -->
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        $('.popover-dismiss').popover({
            trigger: 'focus'
        })

    </script>

    <!-- Tooltips -->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

</body>

</html>
