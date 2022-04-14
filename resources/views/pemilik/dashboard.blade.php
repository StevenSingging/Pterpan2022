@extends('template.template1')
<title>Pemilik</title>

@section('content')
<div class="container">

<div class="jumbotron jumbotron-fluid" style="background: url({{asset('Admin/dist/img/kost1.jpg') }}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
  <div class="container">
    <b class="display-4" style="font-family:Times New Roman;">Selamat Datang di SIKOSANKU</b>
  </div>
</div>
</div>
<div class="card-body"> 

</div>

@include('sweetalert::alert')
@endsection
