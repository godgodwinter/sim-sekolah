@extends('admin.layouts.main')
@section('title','Tahun Pelajaran')
@section('csshere')
<!-- Data Table Css -->

@endsection
@section('jshere')
<!-- data-table js -->

@endsection

@section('headernav')

@endsection
@section('notif')
@if (session('status'))
<div class="alert alert-info border-info">
    {{ session('status') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            class="pcoded-micon"> <i class="feather icon-x-square"></i></span>
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@endsection
@section('site-content')

    <div class="site-content">
      <div class="profile">
        <div class="row gutter-sm">
          <div class="col-md-4 col-sm-5">
            <div class="p-about m-b-20">
              <div class="pa-padding">
                <div class="pa-avatar">
                  <img src="{{ asset("cosmos/") }}/img/avatars/2.jpg" alt="" width="100" height="100">
                </div>
                <div class="pa-name">{{ ucfirst(config('app.name'))}}
                  <i class="zmdi zmdi-check-circle text-success m-l-5"></i>
                </div>
                <div class="pa-text">Laravel 8.4 · PHP 7.4 · Bootstrap 4? · JavaScript ?</div>
                <div class="pa-rating">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star-outline"></i>
                </div>
                <button type="button" class="btn btn-primary m-r-10">
                  <i class="zmdi zmdi-github-alt"></i> Github</button>
                <button type="button" class="btn btn-warning">
                  <i class="zmdi zmdi-plus"></i> New task</button>
              </div>
              <div class="pa-stat">
                <div class="row no-gutter">
                  <div class="pas-item col-xs-4">
                    <div class="pas-number">17</div>
                    <div class="pas-text">Projects</div>
                  </div>
                  <div class="pas-item col-xs-4">
                    <div class="pas-number">24</div>
                    <div class="pas-text">Reviews</div>
                  </div>
                  <div class="pas-item col-xs-4">
                    <div class="pas-number">102</div>
                    <div class="pas-text">Posts</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-users m-b-20">
              <h4 class="m-y-0">Team</h4>
              <hr class="m-b-10">
              <div class="row">
                <div class="col-xs-3">
                  <a href="#">
                    <div class="pu-avatar">
                      <img src="{{ asset("cosmos/") }}/img/avatars/1.jpg" alt="">
                    </div>
                    <div class="pu-name">Kukuh Setya Nugraha</div>
                  </a>
                </div>
                <div class="col-xs-3">
                  <a href="#">
                    <div class="pu-avatar">
                      <img src="{{ asset("cosmos/") }}/img/avatars/3.jpg" alt="">
                    </div>
                    <div class="pu-name">Ron Carran</div>
                  </a>
                </div>
              
              </div>
            </div>
            <div class="p-info m-b-20">
              <h4 class="m-y-0">Contact info</h4>
              <hr>
              <div class="pi-item">
                <div class="pii-icon">
                  <i class="zmdi zmdi-phone"></i>
                </div>
                <div class="pii-value">+6285736862399</div>
              </div>
              <div class="pi-item">
                <div class="pii-icon">
                  <i class="zmdi zmdi-email"></i>
                </div>
                <div class="pii-value">setyanugraha.kukuh@gmail.com</div>
              </div>
              <div class="pi-item">
                <div class="pii-icon">
                  <i class="zmdi zmdi-home"></i>
                </div>
                <div class="pii-value">Malang, Indonesia</div>
              </div>
            </div>
            <div class="p-skills m-b-20 m-sm-0">
              <h4 class="m-y-0">Current progress</h4>
              <hr>
              <div class="clearfix m-b-5">
                <small class="pull-left">Tagihan</small>
                <small class="pull-right">20%</small>
              </div>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">20% Complete (success)</span>
                </div>
              </div>
              <div class="clearfix m-b-5">
                <small class="pull-left">PPDB</small>
                <small class="pull-right">5%</small>
              </div>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                  <span class="sr-only">5% Complete (success)</span>
                </div>
              </div>
              <div class="clearfix m-b-5">
                <small class="pull-left">Perpustakaan</small>
                <small class="pull-right">2%</small>
              </div>
              <div class="progress progress-xs m-b-0">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">2% Complete (success)</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-7">
            <div class="p-content">
              <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                <li class="active">
                  <a href="#tab-timeline" data-toggle="tab" role="tab">Pembaruan <span class="badge badge-primary m-l-5">7</span></a>
                </li>
                <li>
                  <a href="#tab-timeline" data-toggle="tab" role="tab">Bug <span class="badge badge-primary m-l-5">2</span></a>
                </li>
                <li>
                  <a href="#tab-timeline" data-toggle="tab" role="tab">Future</a>
                </li>
                <li class="pull-sm-right hidden-xs">
                  <a href="#" data-toggle="tab" role="tab">
                    <i class="zmdi zmdi-chevron-right"></i>
                  </a>
                </li>
                <li class="pull-sm-right hidden-xs">
                  <a href="#" data-toggle="tab" role="tab">
                    <i class="zmdi zmdi-chevron-left"></i>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab-timeline" role="tabpanel">
                  <div class="clearfix p-y-20 p-x-30">
                    <h4 class="pull-sm-left">Versi Terbaru 02 November 2020</h4>
                    <button type="button" class="btn btn-outline-primary pull-sm-right">
                      <i class="zmdi zmdi-plus"></i> New task</button>
                  </div>
                  <div class="pc-task">
                    <a href="#">
                      <div class="pct-avatar">
                        <img src="{{ asset("cosmos/") }}/img/avatars/3.jpg" alt="" width="40" height="40">
                      </div>
                      <div class="pct-name">Menambahkan Dokumentasi Website
                        <span class="label label-danger m-l-5">new</span>
                      </div>
                      <div class="pct-time">
                        <i class="zmdi zmdi-alarm-check"></i> 02 11 2020</div>
                      <div class="pct-text">Dokumentasi untuk history perubahan dan informasi pembuatan sistem.</div>
                      <div class="clearfix">
                        <button type="button" class="btn btn-outline-success btn-xs pull-left">
                          <i class="zmdi zmdi-refresh"></i> Clear</button>
                        <button type="button" class="btn btn-default btn-xs pull-right m-l-10">
                          <i class="zmdi zmdi-delete"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-xs pull-right">
                          <i class="zmdi zmdi-edit"></i>
                        </button>
                      </div>
                    </a>
                  </div>
                 
                  <div class="pc-task">
                    <a href="#">
                      <div class="pct-avatar">
                        <img src="{{ asset("cosmos/") }}/img/avatars/3.jpg" alt="" width="40" height="40">
                      </div>
                      <div class="pct-name">Menambahkan Menu Tahun Pelajaran
                        <span class="label label-danger m-l-5">new</span>
                      </div>
                      <div class="pct-time">
                        <i class="zmdi zmdi-alarm-check"></i> 02 11 2020</div>
                      <div class="pct-text">Dokumentasi untuk history perubahan dan informasi pembuatan sistem.</div>
                      <div class="clearfix">
                        <button type="button" class="btn btn-outline-danger btn-xs pull-left">
                          <i class="zmdi zmdi-refresh-sync-off"></i> Progress</button>
                        <button type="button" class="btn btn-default btn-xs pull-right m-l-10">
                          <i class="zmdi zmdi-delete"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-xs pull-right">
                          <i class="zmdi zmdi-edit"></i>
                        </button>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
