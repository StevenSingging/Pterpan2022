@extends('template.template1')
<title>Informasi Kos</title>
@section('content')
<div class="container">
<div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Kost Babadan</h3>
              <div class="col-12">
                <img src="{{asset('Admin/dist/img/kost1.jpg') }}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Kost Babadan</h3>
              <p>Kamar kost nyaman dan luas dengan kamar mandi dalam. Lokasi Strategis dekat kampus UKDW, Pom Bensin, Minimarket dan Jalan Raya. Suasana sekitar tenang dan kondusif serta sangat menjaga privasi.</p>

              <hr>
              <h4>Kamar Tersedia</h4>
              <h5><b>{{$countkost}} Kamar<b></h5>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                 Rp.700.000
                </h2>
                <h4 class="mt-0">
                  <small>/ Bulan </small>
                </h4>
              </div>
             
              <div class="mt-4">
              <a href="{{route('pesan')}}">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Pesan 
                </div>
              </div></a>

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
      <!-- /.card -->

</div>
@endsection