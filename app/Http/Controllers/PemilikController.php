<?php

namespace App\Http\Controllers;
use App\Models\Complain;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaksi;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PemilikController extends Controller
{
    public function index(){
        $pesan = Transaksi::where('status',null)->first();
        $comp = Complain::where('balas',null)->first();
        $inpt = Transaksi::whereNotNull('bukti_bayar')->first();
        $usr1=Transaksi::where('user_id',Auth::user()->id)->first();;
        $usr2=Complain::all();
        if($pesan){
            toast('Seseorang mengajukan pemesanan kamar','info');
        }elseif($comp){
            toast('Seseorang mengirimkan komplain/masukan','question');
        }elseif($inpt){
            toast('Seseorang mengunggah Bukti Pembayaran','info');
        }
        return view('pemilik.dashboard');
    }




    public function transaksipml(){
        $trs = Transaksi::paginate();
        return view('pemilik.transaksipml',compact('trs'));
    }

    public function viewcomplain() {
        $pkomp = Complain::whereNull('balas')->paginate();
        return view('pemilik.komplainpml',compact('pkomp'));
    }

    public function balas(Request $request, $id=null) {
        $data = $request->all();
        Complain::where(['id'=>$id])->update(['balas'=>$data['balas']]);
        return redirect()->back()->with('toast_success','Balas Berhasil');
    }

    public function konfirmasi(Request $request,$id){
        $data = $request->all();
        Transaksi::where(['id'=>$id])->update(['status'=>1]);
        return redirect()->back()->with('toast_success','Konfirmasi Berhasil');
    }

    public function tolak(Request $request,$id){
        $data = $request->all();
        Transaksi::where(['id'=>$id])->update(['status'=>2]);
        return redirect()->back()->with('toast_success','Ditolak Berhasil');
    }

    
}