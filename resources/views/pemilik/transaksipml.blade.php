@extends('template.template1')
<title>Transaksi Pemilik</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('pemilik')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
          </div>
        </div>
      </div>
</div>
<div class="container-fluid">
  @if(session('flash_message_success'))
  <div class="alert alert-success">
    {{session('flash_message_success')}}
  </div>
  @endif
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Tanggal Pesan</th>
                    <th>Nama Pemesan</th>
                    <th>Lama Sewa(Bln)</th>
                    <th>Tanggal Sewa</th>
                    <th>Total Bayar</th>
                    <th>Status</th>
                    <th>Bukti Bayar</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                @php $no=1; @endphp
                @foreach($trs as $tr)
                <tr align="center">
                <th scope="row"><?php echo e($no++) + (($trs->currentPage()-1) * $trs->perPage()) ?></th>
                <td>{{date('d-m-Y', strtotime($tr->created_at))}}</td>
                <td>{{$tr->userts->name}}</td>
                <td>{{$tr->lama_sewa}}</td>
                <td>{{date('d-m-Y', strtotime($tr->tgl_masuk))}}</td>
                <td>Rp. {{number_format($tr->total_bayar)}}</td>
                
                <?php if($tr->status == null){ ?>
                <td><a href="{{url('/pemilik/konfirmasi',$tr->id)}}"  onclick="return confirm('Apakah Anda yakin data akan dikonfirmasi ?')" 
                      role="button"><i class="fas fa-check"></i></a> |
                <a href="{{url('/pemilik/tolak',$tr->id)}}"onclick="return confirm('Apakah Anda yakin data akan ditolak ?')"
                        role="button"><i class="fas fa-minus" style="color : red"></i></a></td>
                <?php }elseif($tr->status == 1){ ?>
                  <td><badge class="badge  badge-success ">Konfirmasi</badge></td>
                <?php }elseif($tr->status == 2){ ?>
                  <td><badge class="badge  badge-danger ">Ditolak</badge></td>
                <?php }?>

                <?php if($tr->status == 1 && $tr->bukti_bayar == null){ ?>
                        <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                <?php }elseif($tr->status == 2){ ?>
                  <td><badge class="badge  badge-danger ">Ditolak</badge></td>
                <?php }elseif($tr->status == 1 && $tr->bukti_bayar != null) {?>
                  <td><a href="{{ asset('img/'. $tr->bukti_bayar ) }}" target="_blank" rel="noopener noreferrer">Preview</a> </td>
                <?php }?>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail-{{ $tr->id }}"><i class="fa fa-caret-right"></i></button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @foreach($trs as $tri)
            <div class="modal fade" id="detail-{{ $tri->id }}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Detail</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                          Nama : {{$tr->userts->name}} <br>
                          Email : {{$tr->userts->email}} <br>
                          No.Telp : {{$tr->userts->no_telp}} <br>
                          Gender : {{$tr->userts->gender}} <br>
                          Pekerjaan : {{$tr->userts->pekerjaan}} <br>
                          Alamat : {{$tr->userts->alamat}} <br>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>  
                  </div>
            @endforeach  

            </div>
        </div>
    </div>
</div>
</div>
@include('sweetalert::alert')
@endsection