@extends('ppdb.layouts.halluar')

@section('title','Beranda')
@section('link-nav-beranda','active')

@section('csshere')
@endsection

@section('jshere')
@endsection


@section('container')

<main class="container">


    <section class="pt-5 pb-5" data-aos="fade-up">
        <h3 class="h5 mb-1 font-weight-bold">Alur Pendaftaran</h3>
        <div class="card-body">
            <p class="mb-1">Periksa alur pendaftaran kalian melalui langkah berikut ini.</p>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-1">
                    <div class="card card-body bg-info">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                            </div>

                            <div class="media-body text-center">
                                <h6 class="media-title font-weight-semibold"><strong>Langkah 1</strong></h6>
                                <span class="opacity-75">Daftar Akun <br>PPDB</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-1">
                    <div class="card card-body bg-info">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                            </div>

                            <div class="media-body text-center">
                                <h6 class="media-title font-weight-semibold"><strong>Langkah 2</strong></h6>
                                <span class="opacity-75">Mengisi Identitas <br>Diri</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-1">
                    <div class="card card-body bg-info">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                            </div>

                            <div class="media-body text-center">
                                <h6 class="media-title font-weight-semibold"><strong>Langkah 3</strong></h6>
                                <span class="opacity-75">Isi data Orang Tua dan Wali</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-1">
                    <div class="card card-body bg-info">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                            </div>

                            <div class="media-body text-center">
                                <h6 class="media-title font-weight-semibold"><strong>Langkah 4</strong></h6>
                                <span class="opacity-75">Melengkapi data Diri dan Pilih Jurusan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-1">
                    <div class="card card-body bg-info">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-checkmark3 icon-2x"></i>
                            </div>

                            <div class="media-body text-center">
                                <h6 class="media-title font-weight-semibold"><strong>Langkah 5</strong></h6>
                                <span class="opacity-75">Mencetak Data Persetujuan</span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

            </div>
        </div>
    </section>



        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-8">
                <div class="text-center pt-5 mt-5 mb-5">
                    <h1 class="font-weight-light h3"> <strong>&nbsp;</strong> </h1>
                </div>
                <div class="text-center">

                    {{-- <a target="_blank" href="https://api.whatsapp.com/send?phone=6281234923340"><span
                            class="iconbox iconmedium rounded-circle bg-info text-white mr-1" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Hubungi"><i
                                class="fab fa-whatsapp"></i></span></a> --}}
                                &nbsp;

                </div>
            </div>
        </div>
        <!--------------------------------------
END
--------------------------------------->

    </main>

@endsection
