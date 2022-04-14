@extends('template.template1')
<title>Komplain & Masukan</title>
@section('content')
<form action="{{route('simpankomplain')}}" method="post">
{{ csrf_field() }}
<div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('user')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Komplain</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="container">
    @if(session('flash_message_success'))
        <div class="alert alert-success">
        {{session('flash_message_success')}}
        </div>
    @endif
        <div class="card">
            <div class="card-header">
                <h3>Komplain dan Masukan Customer</h3>
            </div>
            <div class="card-body">
                <h5>Silahkan menginputkan komplain maupun masukan untuk kami :</h5>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="complain_msk" style="height: 100px"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@include('sweetalert::alert')
@endsection