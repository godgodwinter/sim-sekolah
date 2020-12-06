<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/favicon.ico">
<link rel="icon" type="image/png" href="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Anchor Bootstrap 4.1.3 UI Kit by WowThemesNet</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">
    
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
<!-- Main CSS -->
<link href="{{ asset("anchor/") }}/assets/css/main.css" rel="stylesheet"/>
    
<!-- Animation CSS -->
<link href="{{ asset("anchor/") }}/assets/css/vendor/aos.css" rel="stylesheet"/>
    
</head>
    
<body> 
    
<!----------------------------------------------------------------------
NAVBAR (remove topnav if you don't want changed nav background on scroll)
------------------------------------------------------------------------>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>PPDB</strong> SMK DW</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1" aria-expanded="false" aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Data Identitas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Data Raport</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Unggah Berkas</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://wowthemes.net" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lain-lain</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Jurusan</a>
                    <a class="dropdown-item" href="#">Biaya Pendaftaran</a>
                    <a class="dropdown-item" href="#">Kartu Peserta</a>
                </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github"></i></a></li>
            </ul>
        </div>
    </div>
    </nav>
<!-- End Navbar -->
    
    
<!-------------------------------------
HEADER
--------------------------------------->
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-3 bg-primary position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> & easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> & <strong><i class="fab fa-sass fa-2x text-info"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right h-max-380 position-relative z-index-1">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
    <path class="bg-primary" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
    </svg>
</header>
<!--- END HEADER -->
    
    
<main class="container">
    
<!--------------------------------------
COLOR SCHEME
--------------------------------------->
<section class="pt-5 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Halaman Beranda</h3>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Pilih Gelombang PPDB</h5>
            </div>
            <div class="card-body">
                <p class="mb-3">Sebelum mengisi data pendaftaran, silahkan terlebih dahulu memilih jalur pendaftaran berikut ini.</p>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="table-responsive">
                            <form action="#" method="post" id="form_rapor">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="p-1 text-center" rowspan="2">Jalur</th>
                                            <th class="text-center" colspan="2" class="text-center">Tanggal</th>
                                            <th rowspan="2" class="text-center"><i class="icon-more2"></i></th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Dibuka</th>
                                            <th class="text-center">Ditutup</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Gelombang  1</td><td class="p-1 text-center">01-10-2020</td><td class="p-1 text-center">11-12-2020</td><td class="p-1 text-center"><a class="btn bg-teal btn-sm"><i class="icon-checkmark3 mr-2"></i>Sudah Terdaftar</a></td></tr>										</tbody>
                                </table>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Alur Pendaftaran</h5>
            </div>
            <div class="card-body">
                <p class="mb-3">Periksa alur pendaftaran kalian melalui langkah berikut ini.</p>

                <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card card-body bg-info" style="background-image: url(https://ppdb.smktelkom-mlg.sch.id/assets/images/backgrounds/panel_bg.png);">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h6 class="media-title font-weight-semibold">Gelombang</h6>
                                    <span class="opacity-75">Pilih jalur pendaftaran</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card card-body bg-info" style="background-image: url(https://ppdb.smktelkom-mlg.sch.id/assets/images/backgrounds/panel_bg.png);">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h6 class="media-title font-weight-semibold">Data Identitas</h6>
                                    <span class="opacity-75">Isi data profil diri</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card card-body bg-info" style="background-image: url(https://ppdb.smktelkom-mlg.sch.id/assets/images/backgrounds/panel_bg.png);">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h6 class="media-title font-weight-semibold">Data Nilai Rapor</h6>
                                    <span class="opacity-75">Input nilai rapor kalian</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card card-body bg-info" style="background-image: url(https://ppdb.smktelkom-mlg.sch.id/assets/images/backgrounds/panel_bg.png);">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h6 class="media-title font-weight-semibold">Unggah Berkas</h6>
                                    <span class="opacity-75">Rapor, SK sehat & ishihara</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card card-body bg-info" style="background-image: url(https://ppdb.smktelkom-mlg.sch.id/assets/images/backgrounds/panel_bg.png);">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h6 class="media-title font-weight-semibold">Pilihan Jurusan</h6>
                                    <span class="opacity-75">Tentukan juruan kalian</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card card-body bg-light" style="background-image: url(https://ppdb.smktelkom-mlg.sch.id/assets/images/backgrounds/panel_bg.png);">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                <i class="icon-cross2 icon-2x"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h6 class="media-title font-weight-semibold">Bayar Pendaftaran</h6>
                                    <span class="opacity-75">Transfer biaya pendaftaran</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card card-body bg-light" style="background-image: url(https://ppdb.smktelkom-mlg.sch.id/assets/images/backgrounds/panel_bg.png);">
                            <div class="media">
                                <div class="mr-3 align-self-center">
                                <i class="icon-cross2 icon-2x"></i>
                                </div>

                                <div class="media-body text-right">
                                    <h6 class="media-title font-weight-semibold">Cetak Kartu Peserta</h6>
                                    <span class="opacity-75">Unduh/cetak kartu peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="pt-5 pb-5" data-aos="fade-up">
    <h3 class="h5 mb-4 font-weight-bold">Halaman Identitas</h3>

    
	<form action="#" method="post" id="form">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Identitas Diri</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan melengkapi data profil kalian sesuai dengan form yang disediakan. jika terdapat tanda bintang <code>(*)</code>, maka wajib diisi.</p>
    
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">IDENTITAS DIRI</legend>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">NISN <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-menu"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="NISN" name="nisn" id="nisn">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Lengkap <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-user"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Pendaftar" name="nama_lengkap" id="nama_lengkap">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Panggilan <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-user"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama Panggilan" name="nama_nick" id="nama_nick">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Jenis Kelamin <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-minimum-results-for-search="Infinity" data-container-css-class="select-md" data-fouc name="gender" id="gender">
                                                <option value="" disabled selected>- Pilih -</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tempat Lahir <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Tanggal Lahir <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </span>
                                            <input type="text" class="form-control daterange-single" placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir">
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
                                                <option value="kristen">Kristen</option>
                                                <option value="katholik">Katholik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="budha">Budha</option>
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
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Alamat" name="alamat" id="alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Provinsi <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select onchange="get_kab_by_prov(this.value)" class="form-control form-control-md select select2" data-container-css-class="select-md" data-fouc name="id_provinsi" id="id_provinsi">
                                                <option value="" disabled selected>- Pilih -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kota/Kab <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <select class="form-control form-control-md select select2" data-container-css-class="select-md" data-fouc name="id_kota" id="id_kota">
                                                <option value="" disabled selected>- Pilih -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Telepon <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-phone2"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Telepon" name="telp" id="telp">
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">INFORMASI ORANG TUA</legend>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah" id="nama_ayah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kerja Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-bowtie"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Kerja Ayah" name="kerja_ayah" id="kerja_ayah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Telepon Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-phone2"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Telepon Ayah" name="telp_ayah" id="telp_ayah">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Alamat Ayah <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Alamat Ayah" name="alamat_ayah" id="alamat_ayah"></textarea>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Nama Ibu <code>*</code></label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu" id="nama_ibu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Kerja Ibu</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-bowtie"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Kerja Ibu" name="kerja_ibu" id="kerja_ibu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Telepon Ibu</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-phone2"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Telepon Ibu" name="telp_ibu" id="telp_ibu">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Alamat Ibu</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <textarea rows="3" cols="3" class="form-control" placeholder="Alamat Ibu" name="alamat_ibu" id="alamat_ibu"></textarea>
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
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Asal Sekolah</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan melengkapi data asal sekolah anda. jika terdapat tanda bintang <code>(*)</code>, maka wajib diisi.</p>
    
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <legend class="text-uppercase font-size-sm font-weight-bold">ASAL SEKOLAH</legend>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Provinsi SMP <code>*</code></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <select onchange="get_kab_by_prov_smp(this.value)" class="form-control form-control-md select select2" data-container-css-class="select-md" data-fouc name="id_provinsi_smp" id="id_provinsi_smp">
                                                <option value="" disabled selected>- Pilih -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Kota/Kab SMP <code>*</code></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <select onchange="get_smp(this.value)" class="form-control form-control-md select select2" data-container-css-class="select-md" data-fouc name="id_kota_smp" id="id_kota_smp">
                                                <option value="" disabled selected>- Pilih -</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Asal SMP <code>*</code></label>
                                    <div class="col-lg-10">
                                        <div class="input-group" id="smp_drop">
                                            <select onchange="cek_smp(this.value)" class="form-control form-control-md select select2" data-container-css-class="select-md" data-fouc name="asal_smp" id="asal_smp">
                                                <option value="" disabled selected>- Pilih -</option>
                                            </select>
                                        </div>
    
                                        <div class="input-group mt-1" id="smp_lain" style="display: none">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-office"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Asal SMP" name="asal_smp2" id="asal_smp2">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Alamat SMP <code>*</code></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-location3"></i></span>
                                            </span>
                                            <textarea rows="5" cols="3" class="form-control" placeholder="Alamat SMP" name="alamat_smp" id="alamat_smp"></textarea>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Telepon SMP <code>*</code></label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-phone2"></i></span>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Telepon SMP" name="telp_smp" id="telp_smp">
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
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Kuesioner</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Silahkan mengisi kuesioner berikut ini sebelum menyimpan data identitas anda.</p>
    
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group pt-2">
                                                <input type="hidden" name="kuesioner[]" value="1">
                                                <label class="font-weight-semibold">Dari Mana Anda Memperoleh Info SMK Telkom Malang?</label>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_1" value="1" data-fouc>
                                                            Guru Sekolah													</label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_1" value="2" data-fouc>
                                                            Saudara / Kerabat													</label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_1" value="3" data-fouc>
                                                            Internet / Media Sosial													</label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_1" value="4" data-fouc>
                                                            Brosur													</label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_1" value="5" data-fouc>
                                                            Presentasi Siswa													</label>
                                                    </div>
                                                                                        </div>
                                        </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group pt-2">
                                                <input type="hidden" name="kuesioner[]" value="2">
                                                <label class="font-weight-semibold">Kenapa anda memilih mendaftar di SMK Telkom Malang?</label>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_2" value="6" data-fouc>
                                                            Lulusan mudah mencari kerja													</label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_2" value="7" data-fouc>
                                                            Sekolah berprestasi													</label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_2" value="8" data-fouc>
                                                            Pengajar yang kompeten													</label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input-styled" name="jwb_2" value="9" data-fouc>
                                                            Sekolah IT terbaik													</label>
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

<section class="pt-4 pb-5" data-aos="fade-up" id="example-carousel">
    <h3 class="h5 mb-4 font-weight-bold">Data Nilai Rapor</h3>
    <div class="row">
        <div class="col-xl-2"></div>
<div class="col-xl-8">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Data Nilai Rapor</h5>
        </div>
        <div class="card-body">
            <p class="mb-3">Silahkan mengisi data nilai rapor mulai dari semester 1 hingga semester 4.</p>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="table-responsive">
                        <form action="#" method="post" id="form_rapor">
                            <table class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th rowspan="2" width="30%" class="text-center">Mata Pelajaran</th>
                                        <th colspan="4" class="text-center">Semester Ke-</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="min-width:70px;">1</th>
                                        <th class="text-center" style="min-width:70px;">2</th>
                                        <th class="text-center" style="min-width:70px;">3</th>
                                        <th class="text-center" style="min-width:70px;">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                                    <tr>
                                                        <td>Fisika</td>
                                                      <td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6781" id="nr_6781" value="90"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6784" id="nr_6784" value="90"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6787" id="nr_6787" value="90"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6790" id="nr_6790" value="90"></td></tr>
                                                    <tr>
                                                        <td>Bahasa Inggris</td>
                                                      <td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6782" id="nr_6782" value="90"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6785" id="nr_6785" value="100"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6788" id="nr_6788" value="100"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6791" id="nr_6791" value="100"></td></tr>
                                                    <tr>
                                                        <td>Matematika</td>
                                                      <td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6783" id="nr_6783" value="50"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6786" id="nr_6786" value="50"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6789" id="nr_6789" value="40"></td><td class="p-2 text-center"><input  type="number" class="text-center form-control p-1" name="nr_6792" id="nr_6792" value="40"></td></tr>										</tbody>
                            </table>
                        </form>
                    </div>

                </div>

            </div>

            <p class="mb-3 mt-4 text-center">
                <code>Data nilai rapor tidak bisa diubah setelah diverfikasi oleh panitia.</code><br>
                Dengan menekan tombol <code>Simpan</code>, data yang anda cantumkan di atas adalah benar dan<br>dapat dipertanggungjawabkan.<br>
                            <a href="#" onclick="save()" class="mt-2 btn bg-teal btn-lg"><i class="icon-floppy-disk mr-2"></i>Simpan</a>						
            </p>
        </div>
    </div>
</div>
<div class="col-xl-2"></div>
    </div>


</div>
</section>    

--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up" id="example-carousel">
<h3 class="h5 mb-4 font-weight-bold">Unggah Berkas</h3>
<!-- Page content -->
<div class="page-content">
    <div class="content-wrapper">

        <div class="content">

<div class="row">
    <div class="col-xl-12">
                    <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Unggah Berkas</h5>
            </div>
            <div class="card-body">
                <p class="mb-3">Silahkan mengisi data nilai rapor mulai dari semester 1 hingga semester 4. <br><code>Data nilai rapor tidak bisa diubah setelah diverfikasi oleh panitia.</code><br></p>
                                    
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="table-responsive">
                            <form action="#" method="post" id="form_rapor">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="30%">Berkas</th>
                                            <th>Status Berkas</th>
                                            <th width="30%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Rapor Semester Ke-1</td><td><span class="text-danger">Belum diunggah!</span></td><td><button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_unggah_rapor" onclick="get_detail_rapor(2261, 'Rapor Semester Ke-1')"><b><i class="icon-file-upload2"></i></b> Unggah File</button></td></tr><tr><td>Rapor Semester Ke-2</td><td><span class="text-danger">Belum diunggah!</span></td><td><button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_unggah_rapor" onclick="get_detail_rapor(2262, 'Rapor Semester Ke-2')"><b><i class="icon-file-upload2"></i></b> Unggah File</button></td></tr><tr><td>Rapor Semester Ke-3</td><td><span class="text-danger">Belum diunggah!</span></td><td><button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_unggah_rapor" onclick="get_detail_rapor(2263, 'Rapor Semester Ke-3')"><b><i class="icon-file-upload2"></i></b> Unggah File</button></td></tr><tr><td>Rapor Semester Ke-4</td><td><span class="text-danger">Belum diunggah!</span></td><td><button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_unggah_rapor" onclick="get_detail_rapor(2264, 'Rapor Semester Ke-4')"><b><i class="icon-file-upload2"></i></b> Unggah File</button></td></tr><tr><td>Surat Keterangan Tidak Buta Warna</td><td><span class="text-danger">Belum diunggah!</span></td><td><button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_unggah_berkas" onclick="get_detail_berkas(1136, 'Surat Keterangan Tidak Buta Warna')"><b><i class="icon-file-upload2"></i></b> Unggah File</button></td></tr><tr><td>Surat Keterangan Sehat</td><td><span class="text-danger">Belum diunggah!</span></td><td><button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_unggah_berkas" onclick="get_detail_berkas(1135, 'Surat Keterangan Sehat')"><b><i class="icon-file-upload2"></i></b> Unggah File</button></td></tr>											
                                    </tbody>
                                </table>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>
                </div>
</div>


</div>

<input type="hidden" name="id_data" id="id_data">

<div id="modal_unggah_rapor" class="modal fade" tabindex="-1">
<div class="modal-dialog">
    <div class="modal-content">
        <form action="#" method="post" id="form-import-rapor">
            <div class="modal-header bg-danger-700">
                <h6 class="modal-title"><i class="icon-menu7"></i> Unggah File <span id="nama_rapor"></span></h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="dropzone dropzone_rapor" style="min-height: 16rem;">
                    <div class="dz-message" style="text-align: center;margin-top: 15%;color: #aaa;">
                        <h5>KLIK/DRAG FILE PDF DI SINI <br> Pastikan Format File PDF, Maksimal 1MB</h5>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<div id="modal_unggah_berkas" class="modal fade" tabindex="-1">
<div class="modal-dialog">
    <div class="modal-content">
        <form action="#" method="post" id="form-import-berkas">
            
            <div class="modal-header bg-danger-700">
                <h6 class="modal-title"><i class="icon-menu7"></i> Unggah File Berkas <span id="nama_berkas"></span></h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="dropzone dropzone_berkas" style="min-height: 16rem;">
                    <div class="dz-message" style="text-align: center;margin-top: 15%;color: #aaa;">
                        <h5>KLIK/DRAG FILE PDF DI SINI <br> Pastikan Format File PDF, Maksimal 1MB</h5>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<div id="modal_preview" class="modal fade" tabindex="-1">
<div class="modal-dialog">
    <div class="modal-content">
        <form action="#" method="post" id="form-import-berkas">
            
            <div class="modal-header bg-danger-700">
                <h6 class="modal-title"><i class="icon-menu7"></i> Preview <span id="nama_preview"></span></h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div id="preview_file"></div>
            </div>
        </form>
    </div>
</div>
</div>
</section>

<section class="pt-4 pb-5" data-aos="fade-up" id="example-carousel">
    <h3 class="h5 mb-4 font-weight-bold">Pilih Jurusan</h3>
    <div class="page-content">
		<div class="content-wrapper">

			<div class="content">

	<div class="row">
				<div class="col-xl-2"></div>
		<div class="col-xl-8">
			<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pilihan Jurusan</h5>
					</div>
					<div class="card-body">
						<p class="mb-3">Silahkan memilih jurusan <code>salah satu atau keduanya</code> sesuai prioritas yang anda minati. <br><code>Tidak diperkenankan pindah jurusan jika sudah dinyatakan diterima.</code></p>
						<form action="#" method="post" id="form_jurusan">
							<div class="form-group">
								<div class="input-group">
																		<select class="form-control form-control-md select" data-minimum-results-for-search="Infinity" data-container-css-class="select-md"  data-fouc name="id_jurusan" id="id_jurusan" required>
										<option value="">- Pilih -</option>
										<option value="1">Rekayasa Perangkat Lunak</option><option value="2">Teknik Komputer dan Jaringan</option><option value="3">Rekayasa Perangkat Lunak - Teknik Komputer dan Jaringan</option><option value="4">Teknik Komputer dan Jaringan - Rekayasa Perangkat Lunak</option>									</select>
								</div>
							</div>
						</form>

						<p class="mb-3 mt-4 text-center">
							
										<a href="#" onclick="save()" class="mt-1 btn bg-teal btn-lg"><i class="icon-floppy-disk mr-2"></i>Simpan</a>							
						</p>
					</div>
						
					</div>
		</div>
		<div class="col-xl-2"></div>
			</div>


</div>
</section>

<section class="pt-4 pb-5" data-aos="fade-up" id="example-carousel">
    <h3 class="h5 mb-4 font-weight-bold">Carousel</h3>
    <!-- Page content -->
	<div class="page-content">
		<div class="content-wrapper">

			<div class="content">

	<div class="row">
		<div class="col-xl-12">
						<div class="card">
				<div class="card-header header-elements-inline">
										<h4 class="card-title">Bayar Pendaftaran</h5> <h5><span class="badge badge-secondary">Belum Membayar</span></h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-8">
	                    	<div class="mr-auto mb-2">
								<p class="mb-1">Silahkan melakukan transfer ke nomor rekening :<h5 class="font-weight-black m-0"><mark>9.3509.930.0000.11100</mark></h5> <h3><code>BANK BTN atas nama TS-SMK TELKOM MALANG </code></h3>Pastikan nominal sesuai dengan yang tertulis, agar proses verifikasi lebih cepat. Panitia akan memverifikasi pembayaran anda maksimal 1x24 jam.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="mb-3 alert alert-info text-right p-1 pr-3">

								<div class="mr-3 p-2 align-self-start" style="float: left">
			                    	<i class="icon-credit-card2 icon-3x text-muted opacity-25"></i>
		                    	</div>
		                    	<div class="mr-auto">
									<p>Biaya pendaftaran sebesar:</p>
				                    <h1 class="mb-0 font-weight-semibold">Rp200.487</h1>
				                </div>
		                    </div>
						</div>
					</div>
					
					<legend class="text-uppercase font-size-md font-weight-bold mt-3">UNGGAH BUKTI TRANSFER</legend>
					<div class="row">
						<div class="col-lg-8">
																		<div class="dropzone dropzone_bukti">
												<div class="dz-message" style="text-align: center;margin-top: 15%;color: #aaa;">
													<h5>KLIK/DRAG FOTO DI SINI <br> Pastikan Format File JPG/PNG, Maksimal 1MB</h5>
												</div>
											</div>						</div>
						<div class="col-lg-4">
							<img src="https://ppdb.smktelkom-mlg.sch.id/assets/images/wallet.png" width="100%">
						</div>
					</div>
					

	
										
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						</div>

					</div>

				</div>
			</div>
					</div>
	</div>
</div>

<div id="modal_preview" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="#" method="post" id="form-import-berkas">
				
				<div class="modal-header bg-danger-700">
					<h6 class="modal-title"><i class="icon-menu7"></i> Preview <span id="nama_preview"></span></h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<p class="alert alert-danger"><b>Belum Unggah Bukti Bayar!</b>.<br> Silahkan mengunggah bukti pembayaran terlebih dahulu!.</p>				</div>
			</form>
		</div>
	</div>
</div>

<!-- Page content -->
<div class="page-content">
    <div class="content-wrapper">

        <div class="content">

<div class="row">
    <div class="col-xl-12">
                        <p class="alert alert-danger"><b>Anda belum melakukan pembayaran!.</b><br>Kartu peserta dapat diunduh setelah pembayaran diverifikasi oleh Panitia.</p>
                </div>
</div>
</div>
</section>
<!--------------------------------------
CAROUSEL
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up" id="example-carousel">
<h3 class="h5 mb-4 font-weight-bold">Carousel</h3>
<div class="full-width">
	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner shadow-sm rounded">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset("anchor/") }}/assets/img/demo/slide1.jpg" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Mountains, Nature Collection</h5>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset("anchor/") }}/assets/img/demo/slide3.jpg" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h5>Living the Dream, Lost Island</h5>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
    
<!--------------------------------------
BUTTONS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Buttons</h3>
<div class="row mb-3">
	<div class="col">
		<button type="button" class="btn btn-block btn-primary mb-1">Primary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-info">Info</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-secondary">Secondary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-success">Success</button>
	</div>
</div>
<div class="row mb-3">
	<div class="col">
		<button type="button" class="btn btn-block btn-warning mb-1">Warning</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-danger">Danger</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-purple">Purple</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-cyan">Cyan</button>
	</div>
</div>
<div class="row mb-3">
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-primary mb-1">Primary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-info">Info</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-success">Success</button>
	</div>
</div>
<div class="row mb-3">
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-warning mb-1">Warning</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-danger">Danger</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-purple">Purple</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-cyan">Cyan</button>
	</div>
</div>
<h5 class="mt-5 mb-3">Round</h5>
<div class="row mb-3">
	<div class="col">
		<button type="button" class="btn btn-block btn-primary btn-round mb-1">Primary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-info btn-round">Info</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-secondary btn-round">Secondary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-success btn-round">Success</button>
	</div>
</div>
<div class="row mb-3 mb-3">
	<div class="col">
		<button type="button" class="btn btn-block btn-warning btn-round mb-1">Warning</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-danger btn-round">Danger</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-purple btn-round">Purple</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-cyan btn-round">Cyan</button>
	</div>
</div>
<div class="row mb-3">
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-primary btn-round mb-1">Primary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-info btn-round">Info</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-secondary btn-round">Secondary</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-success btn-round">Success</button>
	</div>
</div>
<div class="row">
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-warning btn-round mb-1">Warning</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-danger btn-round">Danger</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-purple btn-round">Purple</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-block btn-outline-cyan btn-round">Cyan</button>
	</div>
</div>
<h5 class="mt-5">Sizes</h5>
<button type="button" class="btn btn-sm btn-info btn-round mb-1">Small</button>
<button type="button" class="btn btn-info btn-round mb-1">Default</button>
<button type="button" class="btn btn-lg btn-info btn-round mb-1">Large</button>
</section>

    
<!--------------------------------------
BADGES
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Badges</h3>
<div class="row">
	<div class="col-md-6">
		<span class="badge badge-pill badge-primary">Primary</span>
		<span class="badge badge-pill badge-secondary">Secondary</span>
		<span class="badge badge-pill badge-success">Success</span>
		<span class="badge badge-pill badge-danger">Danger</span>
		<span class="badge badge-pill badge-warning">Warning</span>
		<span class="badge badge-pill badge-info">Info</span>
		<div class="mt-4">
			<button type="button" class="btn btn-secondary mr-2 mb-2">
			Notifications <span class="badge badge-info ml-2">4</span>
			</button>
			<a class="btn btn-primary mr-2 mb-2" href="#">
			New Items <span class="badge badge-warning ml-2">2</span>
			</a>
			<a class="btn btn-success mr-2 mb-2" href="#">
			Discount <span class="badge badge-danger ml-2">50%</span>
			</a>
			<a class="btn btn-info mb-2" href="#">
			Profile <span class="badge badge-dark ml-2">15%</span>
			</a>
		</div>
	</div>
</div>
</section>

    
<!--------------------------------------
ALERTS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Alerts</h3>
<div class="row">
	<div class="col-md-6">
		<div class="alert alert-primary" role="alert">
			 A simple primary alert-check it out!
		</div>
		<div class="alert alert-secondary" role="alert">
			 A simple secondary alert-check it out!
		</div>
		<div class="alert alert-success" role="alert">
			 A simple success alert-check it out!
		</div>
	</div>
	<div class="col-md-6">
		<div class="alert alert-danger" role="alert">
			<i class="fas fa-bullhorn"></i> A simple danger alert-check it out! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="alert alert-warning" role="alert">
			 A simple warning alert-check it out! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="alert alert-info" role="alert">
			 A simple info alert-check it out! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
			</button>
		</div>
	</div>
</div>
</section>

    
    
<!--------------------------------------
ICONS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Icons</h3>
<p class="mb-5">
	 Anchor UI Kit comes with latest Font Awesome (5.3.1), the web’s most popular icon set and toolkit.
</p>
<span class="inline-block mr-3">
<i class="fa fa-heart text-danger"></i><i class="fa fa-heart text-danger fa-2x"></i><i class="fa fa-heart text-danger fa-3x"></i>
</span>
<span class="mr-3">
<span class="iconbox iconmedium rounded-circle text-primary"><i class="fab fa-facebook-f"></i></span>
<span class="iconbox iconmedium rounded-circle text-info"><i class="fab fa-twitter"></i></span>
<span class="iconbox iconmedium rounded-circle text-danger"><i class="fab fa-google"></i></span>
</span>
<span class="mr-3">
<span class="iconbox iconsmall fill rounded-circle bg-primary text-white shadow border-0"><i class="fas fa-cart-arrow-down"></i></span>
<span class="iconbox iconmedium fill rounded-circle bg-warning text-white shadow border-0"><i class="fas fa-coffee"></i></span>
<span class="iconbox iconlarge fill rounded-circle bg-success text-white shadow border-0"><i class="fa fa-book-reader"></i></span>
</span>
</section>

    
<!--------------------------------------
NAVBARS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Navbars</h3>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
<div class="container">
	<a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1" aria-expanded="false" aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown-1">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Features</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://wowthemes.net" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
			</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github"></i></a></li>
		</ul>
	</div>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
<div class="container">
	<a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-2" aria-controls="navbarNavDropdown-2" aria-expanded="false" aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-2">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Features</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-2">
				<a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
			</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github"></i></a></li>
		</ul>
	</div>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-4">
<div class="container">
	<a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-4" aria-controls="navbarNavDropdown-4" aria-expanded="false" aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown-4">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Features</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-4">
				<a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
			</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github"></i></a></li>
		</ul>
	</div>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-4">
<div class="container">
	<a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-5" aria-controls="navbarNavDropdown-5" aria-expanded="false" aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-5">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Features</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-5">
				<a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
			</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github"></i></a></li>
		</ul>
	</div>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
<div class="container">
	<a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-6" aria-controls="navbarNavDropdown-6" aria-expanded="false" aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-6">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Features</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-6">
				<a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
			</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github"></i></a></li>
		</ul>
	</div>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container">
	<a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7" aria-expanded="false" aria-label="Toggle navigation" style=""><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown-7">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="#">Features</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-7">
				<a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a class="dropdown-item" href="#">Marketing</a>
			</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github"></i></a></li>
		</ul>
	</div>
</div>
</nav>
</section>
    
<!--------------------------------------
HEADERS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Headers</h3>
<div class="full-width">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-primary position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-info"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-primary" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-secondary position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-info"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-secondary" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-info position-relative">
        <div class="container-fluid h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5 text-primary">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-primary"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-primary btn-round mt-1">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-info" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-warning position-relative">
        <div class="container-fluid text-dark h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-dark"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-dark btn-round mt-1">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-warning" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-danger position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-white"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round mt-1">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-danger" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-cyan position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round mt-1">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-cyan" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-purple position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-info"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round mt-1">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-purple" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-success position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-info"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round mt-1">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-success" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
	<hr class="border-0 mt-5 mb-5">
<header>
    <div class="jumbotron jumbotron-lg jumbotron-fluid mb-0 pb-5 bg-dark position-relative">
        <div class="container-fluid text-white h-100">
            <div class="d-lg-flex align-items-center justify-content-between text-center pl-lg-5">
                <div class="col pt-4 pb-4">
                    <h1 class="display-3">Build something <strong>nice</strong> &amp; easy</h1>
                    <h5 class="font-weight-light mb-4">With this FREE Bootstrap 4.1.3<strong> UI Kit</strong> &amp; <strong><i class="fab fa-sass fa-2x text-info"></i></strong></h5>
                    <a href="#" class="btn btn-lg btn-outline-white btn-round mt-1">Learn more</a>
                </div>
                <div class="col align-self-bottom align-items-right text-right">
                    <img src="{{ asset("anchor/") }}/assets/img/demo/dashb2.png" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </div>
    <svg style="-webkit-transform:rotate(-180deg); -moz-transform:rotate(-180deg); -o-transform:rotate(-180deg); transform:rotate(-180deg); margin-top: -1px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve">
    <path class="bg-dark" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path>
    </svg>
</header>
</div>
</section>
    
    
<!--------------------------------------
CALL TO ACTIONS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Call to action</h3>
<div class="jumbotron p-5 jumbotron-fluid bg-primary">
	<div class="container h-100">
		<div class="row justify-content-between align-items-center text-md-center text-lg-left">
			<div class="col-lg-9">
				<h5 class="font-weight-light text-white">Free Bootstrap 4.1.3<strong> UI Kit</strong> with <strong><i class="fab fa-sass fa-2x"></i></strong> for rapid development</h5>
			</div>
			<div class="col-lg-3 text-md-center text-lg-right mt-4 mb-4">
				<a href="#" class="btn btn-lg btn-info">Call to action</a>
			</div>
		</div>
	</div>
</div>
<div class="jumbotron p-5 jumbotron-fluid bg-info">
	<div class="container text-center h-100">
		<h5 class="font-weight-light mb-4">Free Bootstrap 4.1.3<strong> UI Kit</strong> with <strong><i class="fab fa-sass fa-2x"></i></strong> for rapid development</h5>
		<a href="#" class="btn btn-lg btn-primary">Call to action</a>
	</div>
</div>
<div class="jumbotron p-5 jumbotron-fluid bg-warning">
	<div class="container h-100">
		<div class="row justify-content-between align-items-center text-md-center text-lg-left">
			<div class="col-lg-9">
				<h5 class="font-weight-light text-dark">Free Bootstrap 4.1.3<strong> UI Kit</strong> with <strong><i class="fab fa-sass fa-2x"></i></strong> for rapid development</h5>
			</div>
			<div class="col-lg-3 text-md-center text-lg-right mt-4 mb-4">
				<a href="#" class="btn btn-lg btn-outline-dark">Call to action</a>
			</div>
		</div>
	</div>
</div>
</section>

    
<!--------------------------------------
JUMBOTRON
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Jumbotron BG Image Overlay</h3>
<div class="jumbotron jumbotron-xl jumbotron-fluid overlay overlay-blue" style="background-size:cover; background-image:url({{ asset("anchor/") }}/assets/img/demo/1.jpg);">
	<div class="container text-center text-white h-100">
		<h1 class="display-2">Anchor <strong>UI Kit</strong></h1>
		<h5 class="font-weight-light">Free Bootstrap 4.1.3<strong> UI Kit</strong> with <strong><i class="fab fa-sass fa-2x"></i></strong> for rapid development</h5>
	</div>
	<p class="bottom-align-text-absolute">
		<span class="d-block text-center text-white">Made with <i class="fas fa-heart text-danger"></i> by WOW Themes</span>
	</p>
</div>
<div class="jumbotron jumbotron-xl jumbotron-fluid overlay overlay-red" style="background-size:cover; background-image:url({{ asset("anchor/") }}/assets/img/demo/2.jpg);">
	<div class="container text-center text-white h-100">
		<h1 class="display-2">Anchor <strong>UI Kit</strong></h1>
		<h5 class="font-weight-light">Free Bootstrap 4.1.3<strong> UI Kit</strong> with <strong><i class="fab fa-sass fa-2x"></i></strong> for rapid development</h5>
	</div>
	<p class="bottom-align-text-absolute">
		<span class="d-block text-center text-white">Made with <i class="fas fa-heart text-danger"></i> by WOW Themes</span>
	</p>
</div>
<div class="jumbotron jumbotron-xl jumbotron-fluid overlay overlay-black mb-0" style="background-size:cover; background-image:url({{ asset("anchor/") }}/assets/img/demo/4.jpg);">
	<div class="container text-center text-white h-100">
		<h1 class="display-2">Anchor <strong>UI Kit</strong></h1>
		<h5 class="font-weight-light">Free Bootstrap 4.1.3<strong> UI Kit</strong> with <strong><i class="fab fa-sass fa-2x"></i></strong> for rapid development</h5>
	</div>
	<p class="bottom-align-text-absolute">
		<span class="d-block text-center text-white">Made with <i class="fas fa-heart text-danger"></i> by WOW Themes</span>
	</p>
</div>
</section>
    
    
<!--------------------------------------
IMAGE AVATARS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Avatars</h3>
<span class="mr-3">
<img class="rounded-circle shadow" src="{{ asset("anchor/") }}/assets/img/demo/avatar.png" width="50">
<img class="rounded-circle shadow" src="{{ asset("anchor/") }}/assets/img/demo/avatar.png" width="70">
<img class="rounded-circle shadow" src="{{ asset("anchor/") }}/assets/img/demo/avatar.png" width="90">
</span>
<span class="mr-3">
<img class="rounded-circle shadow" src="{{ asset("anchor/") }}/assets/img/demo/avatar2.jpg" width="50">
<img class="rounded-circle shadow" src="{{ asset("anchor/") }}/assets/img/demo/avatar2.jpg" width="70">
<img class="rounded-circle shadow" src="{{ asset("anchor/") }}/assets/img/demo/avatar2.jpg" width="90">
</span>
</section>

    
    
<!--------------------------------------
TOOLTIPS & POPOVERS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Popovers & Tooltips</h3>
<div class="row">
	<div class="col-md-6">
		<h4 class="h6 mb-4">Popovers (click me)</h4>
		<a tabindex="0" data-placement="top" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Top</a>
		<a tabindex="0" data-placement="right" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Right</a>
		<a tabindex="0" data-placement="bottom" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Bottom</a>
		<a tabindex="0" data-placement="left" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Left</a>
	</div>
	<div class="col-md-6">
		<h4 class="h6 mb-4">Tooltips (hover me)</h4>
		<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
		On top </button>
		<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">
		On right </button>
		<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">
		On bottom </button>
		<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">
		On left </button>
	</div>
</div>
</section>

    
    
<!--------------------------------------
TABLE
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Table</h3>
<table class="table">
<thead class="thead-dark">
<tr>
	<th scope="col">
		 #
	</th>
	<th scope="col">
		 First
	</th>
	<th scope="col">
		 Last
	</th>
	<th scope="col">
		 Handle
	</th>
</tr>
</thead>
<tbody>
<tr>
	<th scope="row">
		 1
	</th>
	<td>
		 Mark
	</td>
	<td>
		 Otto
	</td>
	<td>
		 @mdo
	</td>
</tr>
<tr>
	<th scope="row">
		 2
	</th>
	<td>
		 Jacob
	</td>
	<td>
		 Thornton
	</td>
	<td>
		 @fat
	</td>
</tr>
<tr>
	<th scope="row">
		 3
	</th>
	<td>
		 Larry
	</td>
	<td>
		 the Bird
	</td>
	<td>
		 @twitter
	</td>
</tr>
</tbody>
</table>
</section>

    
<!--------------------------------------
PRICING
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Pricing</h3>
<div class="card-deck card-pricing text-center">
	<div class="card border-0 shadow-sm">
		<div class="card-header bg-info border-0 pt-4 pb-4">
			<h3 class="my-0 font-weight-normal mb-3">Personal</h3>
			<h4 class="card-title pricing-card-title">$11 <small class="text-muted">/ mo</small></h4>
		</div>
		<div class="card-body">
			<ul class="list-unstyled mt-3 mb-4">
				<li>10 users included</li>
				<li>2 GB of storage</li>
				<li>Email support</li>
				<li>Help center access</li>
			</ul>
			<button type="button" class="btn btn-info">Sign up for free</button>
		</div>
	</div>
	<div class="card shadow-sm border-0">
		<div class="card-header bg-primary border-0 pt-4 pb-4">
			<h3 class="my-0 font-weight-normal text-white mb-3">Premium</h3>
			<h4 class="card-title pricing-card-title text-white">$15 <small>/ mo</small></h4>
		</div>
		<div class="card-body">
			<ul class="list-unstyled mt-3 mb-4">
				<li>20 users included</li>
				<li>10 GB of storage</li>
				<li>Priority email support</li>
				<li>Help center access</li>
			</ul>
			<button type="button" class="btn btn-primary">Start Free</button>
		</div>
	</div>
	<div class="card border-0 shadow-sm">
		<div class="card-header bg-info border-0 pt-4 pb-4">
			<h3 class="my-0 font-weight-normal mb-3">Enterprise</h3>
			<h4 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h4>
		</div>
		<div class="card-body">
			<ul class="list-unstyled mt-3 mb-4">
				<li>30 users included</li>
				<li>15 GB of storage</li>
				<li>Phone and email support</li>
				<li>Help center access</li>
			</ul>
			<button type="button" class="btn btn-info">Contact us</button>
		</div>
	</div>
</div>
</section>

    
    
<!--------------------------------------
PAGINATION
--------------------------------------->
<section class="pt-4 pb-0" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Pagination</h3>
<nav aria-label="Page navigation example">
<ul class="pagination">
	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
	<li class="page-item"><a class="page-link" href="#">1</a></li>
	<li class="page-item active"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item"><a class="page-link" href="#">5</a></li>
	<li class="page-item"><a class="page-link" href="#">6</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
</ul>
</nav>
</section>

    
    
<!--------------------------------------
FORMS
--------------------------------------->
<section class="pt-5 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Forms</h3>
<h4 class="mb-4 h5">Inline Form</h4>
<form>
	<div class="row">
		<div class="col">
			<input type="text" class="form-control input-round" placeholder="First name">
		</div>
		<div class="col">
			<input type="text" class="form-control input-round" placeholder="Last name">
		</div>
		<div class="col">
			<button type="submit" class="btn btn-primary btn-round">Subscribe</button>
		</div>
	</div>
</form>
<div class="row justify-content-between mt-5">
	<div class="col-md-4">
		<h4 class="mb-4 h5">Sign Up</h4>
		<form>
			<div class="form-group">
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-success btn-round">Sign in</button>
		</form>
	</div>
	<div class="col-md-8 pl-5">
		<h4 class="mb-4 h5">Contact</h4>
		<form>
			<div class="row form-group">
				<div class="col">
					<input type="text" class="form-control" placeholder="First name">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Last name">
				</div>
			</div>
			<div class="form-group">
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-round">Submit</button>
		</form>
	</div>
</div>
</section>

    
    
<!--------------------------------------
MODALS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Modals</h3>
<div class="row">
	<div class="col-md-4">
		<!-- Button trigger modal type 1-->
		<button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModalCenter">
		Basic vertical center </button>
	</div>
	<div class="col-md-4">
		<!-- Button trigger modal type 2-->
		<button type="button" class="btn btn-info w-100" data-toggle="modal" data-target="#exampleModalLong">
		Scroll long content </button>
	</div>
	<div class="col-md-4">
		<!-- Button trigger modal type 3 -->
		<button type="button" class="btn btn-block btn-purple w-100" data-toggle="modal" data-target="#modal_5">
		Colored Modal </button>
	</div>
</div>
</section>
<!-- Modal Type 1 -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header border-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="pb-4 pr-4 pl-4 text-center">
					<img src="{{ asset("anchor/") }}/assets/img/favicon.ico">
					<h2 class="heading mt-4">Basic Modal</h2>
					<p>
						 Do not keep silent when your own ideas and values are being attacked. If a dictatorship ever comes to this country, it will be by the fault of those who keep silent.
					</p>
					<p>
						<em class="text-muted">You can add any HTML in the body.</em>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Type 2 -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<p>
					 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
				</p>
				<p>
					 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
				</p>
				<p>
					 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
				</p>
				<p>
					 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
				</p>
				<p>
					 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
				</p>
				<p>
					 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
				</p>
				<p>
					 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Type 3 -->
<div class="modal fade" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="modal_5" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-danger text-white">
			<div class="modal-header border-0">
				<h5 class="modal-title text-white">This can be any color!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="py-3 text-center">
					<i class="fas fa-exclamation-circle fa-4x"></i>
					<h4 class="heading mt-4">Would you like to continue?</h4>
					<p>
						 You can add any HTML code in the body modal!
					</p>
				</div>
			</div>
			<div class="modal-footer border-0">
				<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">No, thank you!</button>
			</div>
		</div>
	</div>
</div>

    
    
<!--------------------------------------
CARDS
--------------------------------------->
<section class="pt-4 pb-5" data-aos="fade-up">
<h3 class="h5 mb-4 font-weight-bold">Cards</h3>
<div class="row">
	<div class="col-lg-6">
		<div class="card bg-dark overlay overlay-black text-white shadow-sm border-0">
			<img class="card-img" src="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/demo/7.jpg" alt="Card image">
			<div class="card-img-overlay d-flex align-items-center text-center">
				<div class="card-body">
					<h3 class="card-title">Overlay center align</h3>
					<p class="card-text text-muted">
						 With supporting text below as a natural lead-in to additional content.
					</p>
					<a href="#" class="btn btn-info btn-round">Do anything</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card bg-dark overlay overlay-blue text-white shadow-sm border-0 mt-sm-4 mt-lg-0">
			<img class="card-img" src="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/demo/9.jpg" alt="Card image">
			<div class="card-img-overlay d-flex align-items-center text-center">
				<div class="card-body">
					<h3 class="card-title">Special title treatment</h3>
					<p class="card-text">
						 Perhaps you need a button
					</p>
					<a href="#" class="btn btn-purple btn-round">Go somewhere</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row mt-5">
	<div class="col-md-4">
		<div class="card shadow-sm border-0">
			<img class="card-img-top" src="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/demo/blog8.jpg" alt="Card image cap">
			<div class="card-body text-center">
				<img class="rounded-circle shadow mt-neg5" src="{{ asset("anchor/") }}/assets/img/demo/avatar.png" width="70">
				<h5 class="card-title">Sal</h5>
				<p class="card-text text-muted">
					 Hi, I am the author of Anchor Bootstrap UI Kit @wowthemesnet.
				</p>
				<div class="text-center">
					<a target="_blank" href="https://facebook.com/wowthemesnet/"><span class="iconbox iconsmall rounded-circle bg-secondary text-white mr-1"><i class="fab fa-facebook-f"></i></span></a>
					<a target="_blank" href="https://twitter.com/wowthemesnet"><span class="iconbox iconsmall rounded-circle bg-info text-white mr-1"><i class="fab fa-twitter"></i></span></a>
					<a target="_blank" href="https://github.com/wowthemesnet"><span class="iconbox iconsmall rounded-circle bg-dark text-white"><i class="fab fa-github"></i></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card shadow-sm border-0">
			<div class="date">
				<div class="day">
					 27
				</div>
				<div class="month">
					 Mar
				</div>
			</div>
			<img class="card-img-top" src="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/demo/3.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Summer holiday is the best</h5>
				<p class="card-text text-muted">
					 Some quick example text to build on the card title and make up the bulk of the card's content.
				</p>
				<a href="#" class="btn btn-purple btn-round">View More</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card shadow-sm border-0">
			<img class="card-img-top" src="{{ asset("anchor/") }}/{{ asset("anchor/") }}/assets/img/demo/2.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Just a card</h5>
				<p class="card-text text-muted">
					 Some quick example text to build on the card title and make up the bulk of the card's content.
				</p>
				<a href="#" class="btn btn-info btn-round">Read More</a>
			</div>
		</div>
	</div>
</div>
</section>
    
    
<!--------------------------------------
JUST FOR DEMO - CTA
--------------------------------------->
<section class="pt-5 pb-5 bg-warning rounded mt-5 mb-5" data-aos="zoom-in">
<div class="container text-center">
	<img src="{{ asset("anchor/") }}/assets/img/favicon.ico"><br>
	<h1 class="mb-3 mt-3">Like what you see?</h1>
	<h3 class="font-weight-light mb-5">Download Anchor UI Kit for <em><strong>free</strong></em> and build something nice upon it!</h3>
	<div class="row justify-content-center mb-5">
		<div class="col-lg-3">
			<a class="btn btn-info shadow shadow-lg btn-lg d-block mb-2 btn-round" href="#" data-toggle="modal" data-target="#modal_newsletter">
			<i class="fas fa-cloud-download-alt mr-1"></i> Download (.zip) 
			</a>
		</div>
		<div class="col-lg-3">
			<a target="_blank" class="btn btn-dark shadow-lg btn-lg d-block mb-2 btn-round" href="https://github.com/wowthemesnet/Anchor-Bootstrap-UI-Kit/fork">
			<i class="fab fa-github mr-1"></i> Fork on Github </a>
		</div>
		<div class="col-lg-3">
			<a target="_blank" class="btn btn-danger shadow-lg btn-lg d-block mb-2 btn-round" href="https://www.paypal.me/wowthemes/10">
			<i class="fas fa-coffee"></i> Buy me a coffee </a>
		</div>
	</div>
</div>
</section>
    
<!--------------------------------------
DEMO EXAMPLES
--------------------------------------->
<section class="pt-5 mt-4 pb-5 bg-info rounded">
<div class="container text-center">
	<h3 class="mb-4">Examples</h3>
	<div class="d-flex">
		<div class="col">
			<a href="{{ asset("anchor/") }}/login.html"><img src="{{ asset("anchor/") }}/assets/img/demo/screenshot4.png" class="shadow-lg"></a>
		</div>
		<div class="col">
			<a href="{{ asset("anchor/") }}/blog.html"><img src="{{ asset("anchor/") }}/assets/img/demo/screenshot2.png" class="shadow-lg"></a>
		</div>
		<div class="col">
			<a href="{{ asset("anchor/") }}/landing.html"><img src="{{ asset("anchor/") }}/assets/img/demo/screenshot3.png" class="shadow-lg"></a>
		</div>
	</div>
</div>
</section>
<div class="row justify-content-center mb-5 pb-3">
	<div class="col-md-8">
		<div class="text-center pt-5 mt-5 mb-5">
			<h1 class="font-weight-light h3"><strong>Anchor UI KIT</strong>, a project by Sal @WowThemes.net. You can use it for personal, commercial & client projects. <a target="_blank" href="https://www.wowthemes.net/freebies-license/">License.</a></h1>
		</div>
		<div class="text-center">
			<a target="_blank" href="https://facebook.com/wowthemesnet/"><span class="iconbox iconmedium rounded-circle bg-secondary text-white mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow Sal on Facebook"><i class="fab fa-facebook-f"></i></span></a>
			<a target="_blank" href="https://twitter.com/wowthemesnet"><span class="iconbox iconmedium rounded-circle bg-info text-white mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow Sal on Twitter"><i class="fab fa-twitter"></i></span></a>
			<a target="_blank" href="https://github.com/wowthemesnet"><span class="iconbox iconmedium rounded-circle bg-dark text-white mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow Sal on Github"><i class="fab fa-github"></i></span></a>
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
<div class="modal fade" id="modal_newsletter" tabindex="-1" role="dialog" aria-labelledby="modal_newsletter" aria-hidden="true">
	<div class="modal-dialog shadow-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center justify-content-center">
					<em class="text-muted mr-2">Share this freebie:</em>
					<!-- Share Facebook -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-secondary text-white mr-1" data-sharer="facebook" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-facebook-f"></i></span>
					<!-- Share Twitter -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-info text-white mr-1" data-sharer="twitter" data-title="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!" data-hashtags="bootstrap,free" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-twitter"></i></span>
					<!-- Share Google+ -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1" data-sharer="googleplus" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-google"></i></span>
					<!-- Share E-mail -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-purple text-white mr-1" data-sharer="email" data-title="Awesome Url" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/" data-subject="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!" data-to="some@email.com"><i class="fas fa-envelope"></i></span>
					<!-- Sharingbutton Pinterest -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1" data-sharer="pinterest" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-pinterest"></i></span>
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
				<form id="newsletter-form" action="https://www.themepush.com/sendy/subscribe" method="POST" accept-charset="utf-8">
					<div class="d-none">
						<label for="hp">HP</label>
						<br>
						<input type="text" name="hp" id="hp">
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6">
							<div class="form-group has-icon-left form-control-name">
								<label class="sr-only" for="inputName">Your name</label>
								<input type="text" name="name" id="name" required="" pattern="[A-Za-z\s]+" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group has-icon-left form-control-email">
								<label class="sr-only" for="inputEmail">Email address</label>
								<input type="email" name="email" id="email" required="" class="form-control" placeholder="E-mail">
							</div>
						</div>
						<input type="hidden" name="list" value="CVN62nDKE0qTf4XLs8J9iQ" checked="checked">
						<div class="col-md-12 mb-3">
							<input type="hidden" name="subform" value="yes">
							<input onclick="requiredConsent()" class="btn btn-success btn-block shadow-sm" value="Send me updates & more freebies" type="submit" name="submit" id="submit">
						</div>
						<div class="col-md-12 mb-3 text-center">
							<small class="d-block" style="color:#ccc;font-style:italic;line-height:1.4;">* This is a newsletter managed by WowThemes, the item author. It is the only way we can reach you out when a new version is released, so, please, subscribe!</small>
						</div>
					</div>
					<div class="row justify-content-center d-none mt-3">
						<label class="c-input c-checkbox small">
						<input type="checkbox" name="gdpr" id="gdpr" checked="checked">
						<span class="c-indicator"></span> I agree to the <a target="_blank" href="https://www.wowthemes.net/privacy-policy/#newsletter-subscription-forms">privacy policy</a>. </label>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div style="position:fixed; bottom:20px;left:20px;">
	<a href="https://www.paypal.me/wowthemes/10" target="_blank"><img class="rounded-circle shadow-lg" src="{{ asset("anchor/") }}/assets/img/demo/coffee.png" width="70" data-toggle="tooltip" data-placement="top" title="" data-original-title="Buy me a coffee!"></a>
</div>
<!--------------------------------------
END DEMO MODAL & DONATE BUTTON
--------------------------------------->

    
<!--------------------------------------
FOOTER
--------------------------------------->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
<path class="bg-black" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
</svg>
<footer class="bg-black pb-5">
<div class="container">
	<div class="row">
		<div class="col-12 col-md mr-4">
			<i class="fas fa-copyright text-white"></i>
			<small class="d-block mt-3 text-muted">©
			<script>document.write(new Date().getFullYear())</script>
			 Anchor Bootstrap UI Kit,  by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>. <a target="_blank" href="https://www.wowthemes.net/freebies-license/">License</a></small>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">Features</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Cool stuff</a></li>
				<li><a class="text-muted" href="#">Random feature</a></li>
				<li><a class="text-muted" href="#">Team feature</a></li>
				<li><a class="text-muted" href="#">Stuff for developers</a></li>
			</ul>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">Resources</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Resource</a></li>
				<li><a class="text-muted" href="#">Resource name</a></li>
				<li><a class="text-muted" href="#">Another resource</a></li>
				<li><a class="text-muted" href="#">Final resource</a></li>
			</ul>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">Utilities</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Business</a></li>
				<li><a class="text-muted" href="#">Education</a></li>
				<li><a class="text-muted" href="#">Government</a></li>
				<li><a class="text-muted" href="#">Gaming</a></li>
			</ul>
		</div>
		<div class="col-6 col-md">
			<h5 class="mb-4 text-white">About</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Team</a></li>
				<li><a class="text-muted" href="#">Locations</a></li>
				<li><a class="text-muted" href="#">Privacy</a></li>
				<li><a class="text-muted" href="#">Terms</a></li>
			</ul>
		</div>
	</div>
</div>
</footer>

    
    
<!--------------------------------------
JAVASCRIPTS
--------------------------------------->    
<script src="{{ asset("anchor/") }}/assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset("anchor/") }}/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="{{ asset("anchor/") }}/assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
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