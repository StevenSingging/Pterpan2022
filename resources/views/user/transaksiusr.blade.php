@extends('template.template1')
<title>Transaksi User</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('user')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
          </div>
        </div>
      </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Kamar</th>
                    <th>Tanggal Masuk</th>
                    <th>Lama Sewa(Bln)</th>
                    <th>Status</th>
                    <th>Total Bayar</th>
                    <th>Bukti Bayar</th>
                  </tr>
                </thead>
                <tbody>
                @php $no=1; @endphp
                @foreach($trs as $tr)
                @if ($tr->user_id == Auth::user()->id)
                <tr align="center">
                <th scope="row"><?php echo e($no++) + (($trs->currentPage()-1) * $trs->perPage()) ?></th>
                <td>{{date('d-m-Y', strtotime($tr->created_at))}}</td>
                <td>{{$tr->psn->nama_kost}}</td>
                <td>{{date('d-m-Y', strtotime($tr->tgl_masuk))}}</td>
                <td>{{$tr->lama_sewa}}</td>
                <?php if($tr->status == null){ ?>
                        <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                      <?php }elseif($tr->status == 1){ ?>
                        <td><badge class="badge  badge-success ">Validasi</badge></td>
                      <?php }elseif($tr->status == 2){ ?>
                        <td><badge class="badge  badge-danger ">Ditolak</badge><br>
                      </td>
                <?php } ?>
                <td>Rp. {{number_format($tr->total_bayar)}}</td>
                <?php if($tr->status == 1 && $tr->bukti_bayar == null){ ?>
                  <td><a href="{{url('/user/viewinput',$tr->id)}}"
                      role="button"><i class="fas fa-file"></i></a> </td>
                <?php }elseif($tr->status == null && $tr->bukti_bayar == null){?>
                    <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                <?php }elseif($tr->status == 2 && $tr->bukti_bayar == null){?>
                  <td><badge class="badge  badge-danger ">DItolak</badge></td>
                <?php }elseif($tr->status == 1 && $tr->bukti_bayar != null){?>
                  <td><a href="{{ asset('img/'. $tr->bukti_bayar ) }}" target="_blank" rel="noopener noreferrer">Preview</a> </td>
                <?php }?>
                </tr>
                @endif
                @endforeach
                </tbody>
                
            </table>   
            
            </div>
        </div>
    </div>
</div>
</div>

@endsection