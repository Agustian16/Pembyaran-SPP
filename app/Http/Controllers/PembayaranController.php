<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\SPP;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('pembayaran.index',compact('pembayarans'));
    }

    public function create()
    {
        $pembayarans = Pembayaran::all();
        $petugas = Petugas::all();
        $siswa = Siswa::all();
        $spps = SPP::all();
        return view('pembayaran.create',compact('pembayarans','petugas','siswa','spps'));
    }

    public function store(Request $request) {
        Pembayaran::create([
            'id' => $request->id,
            'id_petugas' => $request->id_petugas,
            'nisn' => $request->nisn,
            'tgl_bayar' => $request ->tgl_bayar,
            'bulan_bayar' => $request->bulan_bayar,
            'tahun_bayar' => $request->tahun_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);
        
        return redirect('pembayaran');
    }

    public function show($id) {
        $pembayarans = Pembayaran::where('id',$id)->get();
        return view('pembayaran.show',compact('pembayarans'));
    }

    public function edit($id) {
        $pembayarans = Pembayaran::where('id',$id)->first();
        return view('pembayaran.edit',compact('pembayarans'));
    }

    public function update(Request $request,$id) {

        $pembayarans = Pembayaran::where('id',$id)->update([
            'id_petugas' => $request->id_petugas,
            'nisn' => $request->nisn,
            'tgl_bayar' => $request ->tgl_bayar,
            'bulan_bayar' => $request->bulan_bayar,
            'tahun_bayar' => $request->tahun_bayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);

        return redirect()->route('pembayaran.index');
    }

    public function destroy($id) {
        $pembayarans = Pembayaran::where('id',$id)->get();
        $pembayarans->delete();

        return redirect()->route('pembayaran.index',compact('pembayarans'));
    }
}
