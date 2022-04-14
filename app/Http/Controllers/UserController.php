<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complain;
use App\Models\Kost;
use App\Models\Transaksi;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(){
        return view('user.dashboardusr');
    }


    public function komplainusr(){
        return view('user.komplainusr');
    }

    public function simpankomplain(Request $request){
        //dd($request->all());
        Complain::create([
            'user_id' => $request -> user() -> id ,
            'complain_msk' => $request -> complain_msk,
        ]);
        return redirect('user/komplain')->with('toast_success','Pengisian Berhasil');
    }

    public function infokost(){
        $countkost = Kost::whereNull('keterangan')
        ->count(); 
        return view('user.informasikostusr',compact('countkost'));
    }

    public function pesan(){
        $kost = Kost::whereNull('keterangan')->get();
        return view('user.pesankamar',compact('kost'));
    }
    
    public function simpanpesan(Request $request,$id=null){
        //dd($request->all());
        $trans= Transaksi::where('user_id', Auth::user()->id)->where('status',1)->first();
        $data = $request->all();
    if(empty($trans)){
       Transaksi::create([
        'user_id' => $request -> user() -> id ,
        'kost_id' => $request -> kost_id,
        'tgl_masuk' => $request -> tgl_masuk,
        'lama_sewa' => $request -> lama_sewa,
        'total_bayar' => 700000*$request -> lama_sewa,
        'waktupmb' => $request -> waktupmb,
        ]);
        Kost::where(['id'=>$data['kost_id']])->update(['Keterangan'=> 1]);
        return redirect('user/pesankamar')->with('toast_success','Pemesanan Berhasil');
    }else{
        return redirect('user/pesankamar')->with('toast_error','Pemesanan hanya 1 kali');
    }
    }

    public function viewtransaksiusr() {
        $trs = Transaksi::paginate();
        return view('user.transaksiusr',compact('trs'));
       
    }

    public function viewinputfile($id) {
        $trsi = Transaksi::where(['id'=>$id])
        ->wherenotNull('status')->get();
        return view('user.inputfile',compact('trsi'));    
    }

    public function simpaninput(Request $request,$id){
        //dd($request->all());
        $nm = $request->bukti_bayar;
        $namafile = $nm->getClientOriginalName();

        Transaksi::where(['id'=>$id])->update(['bukti_bayar'=>$namafile]);
        $nm->move(public_path().'/img',$namafile);

        return redirect()->back()->with('toast_success','Input File Berhasil');
    }
}
