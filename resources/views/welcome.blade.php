
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIKOSANKU</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  
</head>

<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="public/Admin/index3.html" class="navbar-brand">
        <img src="{{asset('Admin/dist/img/fti-ukdw.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIKOSANKU</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link" data-toggle="modal" data-target="#modal-xl">About</a>
          </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item">
        <a href="/login" class="btn btn-block bg-gradient-primary">Masuk</a>
      </li>
      <li class="nav-item">
        <a href="{{url('register')}}" class="btn ">Daftar</a>
      </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <div class="container">
                <img class="d-block "  src="{{asset('Admin/dist/img/kost1.jpg') }}" style="display:block; margin:auto" alt="First slide">
              </div>
              </div>
              <div class="carousel-item">
              <div class="container">
                <img class="d-block" src="{{asset('Admin/dist/img/kost1.jpg') }}" style="display:block; margin:auto" alt="Second slide">
              </div>
              </div>
              <div class="carousel-item">
              <div class="container">
                <img class="d-block " src="{{asset('Admin/dist/img/kost1.jpg') }}" style="display:block; margin:auto" alt="Third slide">
              </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <h2 class="mt-5">Informasi Kos</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="box">
                <img src="Admin/dist/img/kost1.jpg" style="width:101%; height:150px;" alt="" />
                <tr>
                  <td>
                  <badge class="badge  badge-warning mt-2" style="">Campur</badge>
                  </td>
                  <td>
                  <badge class="badge  badge-danger mt-2 ml-5" style="">Kos Andalan</badge>
                  </td>
                  <td>
                  <i class="fa fa-star ml-5">5.0</i>
                  </td>
                </tr>
                <div class="desc" style="height:120px; ">
                <a href="{{url('informasikost')}}"><b  style="color:black;">Kost Babadan Yogyakarta </b></a>
                <p class="font-weight-light">K Mandi Dalam - Wifi - AC - Kasur - Akses 24 Jam </p>
                <b>Rp.550.000/ Bulan</b>
                </div>
              </div>
            </div>
          </div>
          <h2 class="mt-5">Komentar Penghuni Kos</h2>
          <div class="row">
            <div class="col-md-4">
            <div class="card card-widget widget-user-2 shadow">
              <div class="widget-user-header ">
              <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="{{asset('Admin/dist/img/user1-128x128.jpg') }}" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Steven</h3>
              <h5 class="widget-user-desc">Mahasiswa</h5>
              <tr>
                <td><i class="fa fa-star"></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star-half"></i> 4.5</td>
              </tr>
              </div>
              <div class="card-footer p-0 ">
                <p class="ml-3">"Aplikasi ini sangat Luar Biasa".</p>
              </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card card-widget widget-user-2 shadow">
              <div class="widget-user-header ">
              <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="{{asset('Admin/dist/img/user8-128x128.jpg') }}" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Christian</h3>
              <h5 class="widget-user-desc">Pekerja</h5>
              <tr>
                <td><i class="fa fa-star"></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star "></i> 5.0</td>
              </tr>
              </div>
              <div class="card-footer p-0 ">
                <p class="ml-3">"Aplikasi Ini Mantap".</p>
              </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card card-widget widget-user-2 shadow">
              <div class="widget-user-header ">
              <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="{{asset('Admin/dist/img/user4-128x128.jpg') }}" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Nadia </h3>
              <h5 class="widget-user-desc">Mahasiswa</h5>
              <tr>
                <td><i class="fa fa-star"></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star "></i></td>
                <td><i class="fa fa-star "></i> 4.0</td>
              </tr>
              </div>
              <div class="card-footer p-0 ">
                <p class="ml-3">"Aplikasi ini sangat useless".</p>
              </div>
            </div>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
      <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Aplikasi SIKOSANKU</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <p>Adalah aplikasi yang berguna bagi pencari kos untuk mencari kos dengan mudah dan dengan harga yang murah.</p>
      </div>
      </div>
      </div>
      </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="{{asset('Admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('Admin/dist/js/adminlte.min.js') }}"></script>
<script src="{{asset('Admin/dist/js/demo.js') }}"></script>
</body>
</html>
