<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Posyandu Mawar IX</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/assets/images/dashboard/d.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo"><img src="{{url('assets/assets/images/dashboard/pos2.png')}}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="{{url('assets/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">
          
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="{{url('logout')}}">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{url('assets/assets/images/faces/h.png')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{Session::get('nama_lengkap')}} </span>
                  <span class="text-secondary text-small">Mawar IX</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            @if(Session::get('hak_akses')=="kader")
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">
                <span class="menu-title">Halaman Utama</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Ibu</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('tambah_ibu')}}">Tambah Data Ibu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_ibu')}}">Data Ibu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_tidak_aktif_ibu')}}">Data Tidak Aktif</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_meninggal_ibu')}}">Data Meninggal</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#orm" aria-expanded="false" aria-controls="orm">
                <span class="menu-title">Anak</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-book-open-variant menu-icon"></i>
              </a>
              <div class="collapse" id="orm">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('tambah_anak')}}">Tambah Data</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_anak')}}">Data Anak </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('penimbangan_anak')}}">Penimbangan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_tidak_aktif_anak')}}">Data Tidak Aktif</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_meninggal_anak')}}">Data Meninggal</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#kelola" aria-expanded="false" aria-controls="kelola">
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-book-plus menu-icon"></i>
              </a>
              <div class="collapse" id="kelola">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('laporan_ibu')}}">Ibu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('pilih_laporan_anak')}}">Anak</a></li>
                </ul>
              </div>
            </li>
            @endif
          

            @if(Session::get('hak_akses')=="admin")
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="admin">
                <span class="menu-title">Kelola Akun</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-book-open-variant menu-icon"></i>
              </a>
              <div class="collapse" id="admin">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_ibu_admin')}}">Akun Kader</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('data_anak')}}">Akun Ibu</a></li>
                </ul>
              </div>
            </li>
            @endif
            
          
      
            
            <li class="nav-item sidebar-actions">

                <div class="mt-4">
                  <div class="border-bottom">
                    
                  </div>
                  
                </div>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    {{-- <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p> --}}

                    @include('flash')
                     @yield('content') {{-- Semua file konten kita akan ada di bagian ini --}}
                    
              </div>
              </div>
              </div>
          </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Dibuat Oleh <a href="#" target="_blank">Istiyani & Nadya Humaira</a>.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Dibuat Penuh <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/assets/js/off-canvas.js"></script>
    <script src="/assets/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>