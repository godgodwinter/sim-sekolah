
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
  <body class="layout layout-header-fixed layout-left-sidebar-fixed layout-desktop layout-left-sidebar-collapsed">
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
               
                  <li><a href="#">Settings</a></li>
             
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
              <li class="nav-table dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-apps"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Applications</span>
                </a>
                <div class="dropdown-menu dropdown-apps custom-dropdown">
                  <div class="a-area">
                    <div class="row gutter-xs">
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="{{ asset("cosmos/") }}/img/brands/dropbox.png" alt="">
                            </div>
                            <div class="ai-title">Dropbox</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="{{ asset("cosmos/") }}/img/brands/github.png" alt="">
                            </div>
                            <div class="ai-title">Github</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="{{ asset("cosmos/") }}/img/brands/wordpress.png" alt="">
                            </div>
                            <div class="ai-title">Wordpress</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="{{ asset("cosmos/") }}/img/brands/gmail.png" alt="">
                            </div>
                            <div class="ai-title">Gmail</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="{{ asset("cosmos/") }}/img/brands/drive.png" alt="">
                            </div>
                            <div class="ai-title">Drive</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="{{ asset("cosmos/") }}/img/brands/dribbble.png" alt="">
                            </div>
                            <div class="ai-title">Dribbble</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="#">Menu Pintasan</a>
                  </div>
                </div>
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
                    <a href="#">
                      <i class="zmdi zmdi-power m-r-10"></i> Logout</a>
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
              <a href="admin/dashboard">
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
                <li><a href="admin/password">Ganti Password</a></li>
                <li><a href="admin/password">Reset Password</a></li>
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
                <li><a href="admin/tapels">Tahun Pelajaran</a></li>
                <li><a href="admin/kelass">Kelas</a></li>
                <li><a href="admin/siswas">Siswa</a></li>
              </ul>
            </li>
            <li>
              <a href="aturtagihans">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
                </span>
                <span class="menu-text">Atur Tagihan</span>
              </a>
            </li>
            <li>
              <a href="admin/tagihansiswas">
                <span class="menu-icon">
                  <i class="zmdi zmdi-account-circle"></i>
                </span>
                <span class="menu-text">Tagihan Siswa</span>
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
    @yield('site-content')
      <div class="site-footer">
        2017 © Cosmos
      </div>
    </div>
    @yield('jshere')
    <script src="{{ asset("cosmos/") }}/js/vendor.min.js"></script>
    <script src="{{ asset("cosmos/") }}/js/cosmos.min.js"></script>
    <script src="{{ asset("cosmos/") }}/js/application.min.js"></script>
    <script src="{{ asset("cosmos/") }}/js/tables-datatables.min.js"></script>
  </body>

<!-- Mirrored from big-bang-studio.com/cosmos/tables-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:54:46 GMT -->
</html>