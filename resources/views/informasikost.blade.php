<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Informasi Kost</title>

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
    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Kost Babadan</h3>
              <div class="col-12">
                <img src="Admin/dist/img/kost1.jpg" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Kost Babadan</h3>
              <p>Kamar kost nyaman dan luas dengan kamar mandi dalam. Lokasi Strategis dekat kampus UKDW, Pom Bensin, Minimarket dan Jalan Raya. Suasana sekitar tenang dan kondusif serta sangat menjaga privasi.</p>

              <hr>
              <h4>Kamar Tersedia</h4>
              <h5><b>{{$countkost1}} Kamar<b></h5>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                 Rp.700.000
                </h2>
                <h4 class="mt-0">
                  <small>/ Bulan </small>
                </h4>
              </div>

              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat disabled">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Pesan
                </div>
              </div>
            <div class="bg-danger mt-3">
                <h5 class="text-center">Silahkan <a href="/login">Login</a> dahulu sebelum memesan.</h5>
            </div>
            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-fasilitas-tab" data-toggle="tab" href="#product-fasilitas" role="tab" aria-controls="product-desc" aria-selected="true">Fasilitas</a>
                <a class="nav-item nav-link" id="product-peraturan-tab" data-toggle="tab" href="#product-peraturan" role="tab" aria-controls="product-comments" aria-selected="false">Peraturan</a>
                <a class="nav-item nav-link" id="product-ukuran-tab" data-toggle="tab" href="#product-ukuran" role="tab" aria-controls="product-rating" aria-selected="false">Ukuran Kamar</a>
                <a class="nav-item nav-link" id="product-lokasi-tab" data-toggle="tab" href="#product-lokasi" role="tab" aria-controls="product-rating" aria-selected="false">Lokasi</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-fasilitas" role="tabpanel" aria-labelledby="product-fasilitas-tab"> <div class="row">
                <div class="col">
                <ion-icon name="checkbox"></ion-icon><b>Kamar Mandi Dalam.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>AC.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>Kasur.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>Wifi.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>Kloset Duduk.</b><br>
                </div>
                <div class="col">
                <ion-icon name="checkbox"></ion-icon><b>Lemari.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>Meja Belajar.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>Dapur Bersama.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>Ruang Tamu.</b><br>
                <ion-icon name="checkbox"></ion-icon><b>Tempat Parkir luas.</b><br>
                </div>
              </div> </div>
              <div class="tab-pane fade" id="product-peraturan" role="tabpanel" aria-labelledby="product-peraturan-tab"> <i class="fa fa-caret-right"></i><b>Dilarang membawa hewan peliharaan.</b><br>
                    <i class="fa fa-caret-right"></i><b>Dilarang membawa teman lawan jenis.</b><br> <i class="fa fa-caret-right"></i><b>Kerabat menginap dikenakan biaya.</b> </div>
              <div class="tab-pane fade" id="product-ukuran" role="tabpanel" aria-labelledby="product-ukuran-tab"> 4X5 m2 </div>
              <div class="tab-pane fade" id="product-lokasi" role="tabpanel" aria-labelledby="product-lokasi-tab"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.849630873033!2d110.42077521415332!3d-7.6992812783847615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ea64e66a735%3A0x97463eb1cb9e7f5f!2sAsrama%20Ukdw!5e0!3m2!1sid!2sid!4v1649953793196!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
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
