@extends('template.template1')
<title>User</title>
@section('content')
<div class="jumbotron jumbotron-fluid" style="background: url({{asset('Admin/dist/img/kost1.jpg') }}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
  <div class="container">
    <b class="display-4" style="font-family:Times New Roman;">Selamat Datang di SIKOSANKU</b>
  </div>
</div>
<div class="container">
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
                  <i class="fa fa-star ml-3">5.0</i>
                  </td>
                </tr>
                <div class="desc" style="height:120px; ">
                <a href="{{route('informasikostusr')}}"><b  style="color:black;">Kost Babadan Yogyakarta </b></a>
                <p class="font-weight-light">K Mandi Dalam - Wifi - AC - Kasur - Akses 24 Jam </p>
                <b>Rp.700.000/ Bulan</b>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection