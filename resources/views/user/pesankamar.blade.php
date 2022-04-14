@extends('template.template1')
<title>Pemesanan</title>
@section('content')
<form action="{{route('simpanpesan')}}" method="post">
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
              <li class="breadcrumb-item active">Pesan Kamar</li>
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
        @if(session('flash_message_danger'))
        <div class="alert alert-danger">
        {{session('flash_message_danger')}}
        </div>
        @endif
            <div class="card card-primary card-outline">
                <div class="card-body">
                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tgl_masuk">
                        </div>
                        <div class="form-group">
                            <label>Kamar Tersedia</label>
                            <select class="custom-select form-control-border" name="kost_id">
                            <option selected="selected">Pilih Kamar</option>
                            @foreach($kost as $kst)
                                <option value="{{ $kst->id }}">{{$kst->nama_kost}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lama Sewa/Bulan</label>
                            <select class="custom-select form-control-border" name="lama_sewa">
                            <option selected="selected">Pilih Lama Sewa</option>
                                <option>1 </option>
                                <option>2 </option>
                                <option>3 </option>
                                <option>4 </option>
                                <option>5 </option>
                                <option>6 </option>
                                <option>7 </option>
                                <option>8 </option>
                                <option>9 </option>
                                <option>10 </option>
                                <option>11 </option>
                                <option>12 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Waktu Pembayaran</label>
                            <select class="custom-select form-control-border" name="waktupmb">
                            <option selected="selected">Pilih Waktu Pembayaran</option>
                                <option>Bulanan</option>
                            </select>
                        </div>
                    </form>
                    <div class="card-footer" >
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                    Ketentuan :<br>
                    <i class="fa fa-caret-right">Waktu mulai menyewa kamar terdekat: di hari H setelah pengajuan sewa.</i><br>
                    <i class="fa fa-caret-right">Waktu mulai menyewa kamar terjauh: 3 bulan setelah pengajuan sewa.</i>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
@endsection