
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-bang-studio.com/cosmos/tables-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:54:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>{{ ucfirst(config('app.name'))}} @yield('title')</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("cosmos/") }}/css/vendor.min.css">
    <link rel="stylesheet" href="{{ asset("cosmos/") }}/css/cosmos.min.css">
    <link rel="stylesheet" href="{{ asset("cosmos/") }}/css/application.min.css">
    @yield('csshere')
  </head>
  {{-- <body class="layout layout-header-fixed layout-left-sidebar-fixed layout-desktop layout-left-sidebar-collapsed"> --}}

  <body class="layout layout-header-fixed layout-left-sidebar-fixed">
    <div class="site-overlay"></div>
    <div class="site-header">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand" href="index-2.html">
            <img src="{{ asset("cosmos/") }}/img/logo.png" alt="" height="25">
            <span>{{ ucfirst(config('app.name'))}}</span>
          </a>
          <button class="navbar-toggler left-sidebar-toggle pull-left visible-xs" type="button">
            <span class="hamburger"></span>
          </button>
          <button class="navbar-toggler right-sidebar-toggle pull-right visible-xs-block" type="button">
            <i class="zmdi zmdi-long-arrow-left"></i>
            <div class="dot bg-danger"></div>
          </button>
          <button class="navbar-toggler pull-right visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="more"></span>
          </button>
        </div>
        <div class="navbar-collapsible">
          <div id="navbar" class="navbar-collapse collapse">
            <button class="navbar-toggler left-sidebar-collapse pull-left hidden-xs" type="button">
              <span class="hamburger"></span>
            </button>
            <button class="navbar-toggler right-sidebar-toggle pull-right hidden-xs" type="button">
              <i class="zmdi zmdi-long-arrow-left"></i>
              <div class="dot bg-danger"></div>
            </button>
            <ul class="nav navbar-nav">
              <li class="visible-xs-block">
                <div class="nav-avatar">
                  <img class="img-circle" src="{{ asset("cosmos/") }}/img/avatars/1.jpg" alt="" width="48" height="48">
                </div>
                <h4 class="navbar-text text-center">Welcome, Admininstrator!</h4>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li class="nav-table dropdown visible-xs-block">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-account-o"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Admininstrator</span>
                </a>
                <ul class="dropdown-menu">

                  <li> <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">  <i class="zmdi zmdi-power m-r-10"></i>
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form></li>


                </ul>
              </li>



              <li class="nav-table dropdown hidden-sm-down">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell p-r-10">
                    <img class="img-circle" src="{{ asset("cosmos/") }}/img/avatars/1.jpg" alt="" width="32" height="32">
                  </span>
                  <span class="nav-cell">Admininstrator
                    <span class="caret"></span>
                  </span>
                </a>
                <ul class="dropdown-menu">

                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-settings m-r-10"></i> Settings</a>
                  </li>

                  <li role="separator" class="divider"></li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">  <i class="zmdi zmdi-power m-r-10"></i>
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="site-main">
      <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Main</li>
            <li>
              <a href="{{ url('admin/home ') }}">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">Beranda</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-settings"></i>
                </span>
                <span class="menu-text">Pengaturan</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{ url('/password ') }}">Ganti Password</a></li>
                <li><a href="{{ url('/password ') }}">Reset Password</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-file"></i>
                </span>
                <span class="menu-text">Master</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li><a href="{{ url('admin/tapel ') }}">Tahun Pelajaran</a></li>
                <li><a href="{{ url('admin/kelass ') }}">Kelas</a></li>
                <li><a href="{{ url('admin/siswas ') }}">Siswa</a></li>
              </ul>
            </li>
            <li>
              <a href="{{  url('/admin/aturtagihans ')  }}">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
                </span>
                <span class="menu-text">Atur Tagihan</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/admin/tagihansiswas ') }}">
                <span class="menu-icon">
                  <i class="zmdi zmdi-account-circle"></i>
                </span>
                <span class="menu-text">Tagihan Siswa</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/admin/ppdb_user') }}">
                <span class="menu-icon">
                  <i class="zmdi zmdi-account-circle"></i>
                </span>
                <span class="menu-text">PPDB Siswa</span>
              </a>
            </li>
            <li class="menu-title">LAIN-NYA</li>
            <li>
              <a href="admin/logout">
                <span class="menu-icon">
                  <i class="zmdi zmdi-power"></i>
                </span>
                <span class="menu-text">Keluar</span>
              </a>
            </li>


            <li>
              <a href="documentation">
                <span class="menu-icon">
                  <i class="zmdi zmdi-circle text-success"></i>
                </span>
                <span class="menu-text">Documentation</span>
              </a>
            </li>


          </ul>
        </div>
      </div>


    @yield('notif')

    {{-- <div class="alert alert-info border-info">
    OK <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
              class="pcoded-micon"> <i class="feather icon-x-square"></i></span>
          <span aria-hidden="true">&times;</span>
      </button>
  </div> --}}

    @yield('site-content')

      <div class="site-footer">
        2017 © Cosmos
      </div>
    </div>
    @yield('jshere')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

@if(Session::has('status'))
<script>
    swal("Great Job!!","{!! Session::get('status')!!}","success",{
        button:"OK",
    })
</script>
@endif
    <script src="{{ asset("cosmos/") }}/js/vendor.min.js"></script>
    <script src="{{ asset("cosmos/") }}/js/cosmos.min.js"></script>
    <script src="{{ asset("cosmos/") }}/js/application.min.js"></script>
    <script src="{{ asset("cosmos/") }}/js/tables-datatables.min.js"></script>
  </body>

<!-- Mirrored from big-bang-studio.com/cosmos/tables-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:54:46 GMT -->
</html>
