@extends('template.template1')
<title>Input Bukti Bayar User</title>
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          {!! Toastr::message() !!}
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('user')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Pembayaran</li>
            </ol>
          </div>
        </div>
      </div>
</div>
<div class="container">
        <div class="container">
        @if(session('flash_message_success'))
            <div class="alert alert-success">
            {{session('flash_message_success')}}
            </div>
        @endif
        @foreach($trsi as $trs)
            <div class="card">
                <div class="card-header">
                    <h3>Pembayaran</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Pemilik Kost telah mengkonfirmasi pesanan silahkan lakukan pembayaran</h5>
                            Total Pembayaran : Rp. {{number_format($trs->total_bayar)}}<br>
                            Jumlah Angsuran per Bulan : Rp. {{number_format($trs->psn->harga)}}
                           
                        </div>
                        
                        <div class="col-md-6">
                        <form action="{{route('simpaninput',$trs->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card">
                                <div class="card-header">
                                    <b>Silahkan lakukan pembayaran ke no rekening :</b><br>
                                    <p>BNI - 982167261 a.n Anisa Fahira</p><br>
                                    <p>Batas pengumpulan bukti pembayaran adalah 2 hari sesudah pemesanan</p><br>
                                    <p>Pemesanan akan dianggap batal jika lebih dari batas waktu yang ditentukan<p>
                                    <div class="form-group">
                                        <input type="file" name="bukti_bayar" id="bukti_bayar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="card-footer">
                Ketentuan :<br>
                <i class="fa fa-caret-right">Pembayaran DP 50% dari jumlah angsuran perbulan.</i>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@include('sweetalert::alert')
@endsection
