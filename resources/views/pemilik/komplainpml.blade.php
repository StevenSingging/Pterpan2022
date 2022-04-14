@extends('template.template1')
<title>Komplain & Masukan</title>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Pengirim</th>
                    <th>Tanggal</th>
                    <th>Komplain</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php $no=1; @endphp
                    @foreach($pkomp as $komp)
                    <tr align="center">
                    <th scope="row"><?php echo e($no++) + (($pkomp->currentPage()-1) * $pkomp->perPage()) ?></th>
                    <td>{{$komp->user->name}}</td>
                    <td>{{date('d-m-Y', strtotime($komp->created_at))}}</td>
                    <td>{{$komp->complain_msk}}</td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#balas-{{ $komp->id }}"><i class="fa fa-paper-plane"></i>Balas</button></td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
                  @foreach($pkomp as $kom)
                  <div class="modal fade" id="balas-{{ $kom->id }}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Balas Pesan</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        </div>
                      <form action="{{url('/pemilik/balaskomplain', $kom->id)}}" method="post">
                      {{ csrf_field() }}
                        <div class="modal-body">
                        <div class="form-group">
                            <label>Komplain</label>
                            <input type="text" name="complain_msk" class="form-control" value="{{$kom->complain_msk}}"disabled>
                        </div>
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Leave a comment here" name="balas" style="height: 100px"  value="{{$kom->balas}}"></textarea>
                        </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
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