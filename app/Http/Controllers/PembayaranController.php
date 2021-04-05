<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\SPP;
use App\Models\User;
use App\Exports\PembayaranExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\view_pembayaran;
use App\Models\view_pembayarans;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function export_excel()
    {
        return Excel::download(new PembayaranExport, 'pembayaran.xlsx');
    }
    public function index()
    {
        $pembayarans = view_pembayaran::latest('created_at')->get();
        $petugas = Petugas::all();
        $siswa = Siswa::all();
        $spps = SPP::all();
        $users = User::all();
        return view('pembayaran.index',compact('pembayarans','petugas','spps'));
    }

    public function create()
    {
        $pembayarans = Pembayaran::all();
        $petugas = Petugas::all();
        $siswa = Siswa::all();
        $spps = SPP::all();
        $users = User::all();
        return view('pembayaran.create',compact('pembayarans','siswa','spps','users','petugas'));
    }

    public function store(Request $request) {
        // $this->validate($request, [
        //     'nisn' => 'required',
        //     'jumlah_bayar' => 'required',
        // ]);

        $siswa = Siswa::where('nisn', '=', $request->nisn)->first();


        $harga = Spp::where('id', '=', $siswa->id_spp)->first();


        $bln = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];

        $transaksi = Pembayaran::where('nisn', '=', $request->nisn)->get();

        if (sizeof($transaksi) == 0) :
            $bulan = 6;
            $tahun = $harga->tahun;
        else :
            $a = array_key_last(end($transaksi));

            $akhir = $transaksi[$a];

            $a = array_search($akhir->bulan_bayar, $bln);

            if ($a == 11) :
                $bulan = 0;
                $tahun = $akhir->tahun_bayar + 1;
            else :
                $bulan = $a + 1;
                $tahun = $akhir->tahun_bayar;
            endif;
        endif;

        if ($request->jumlah_bayar < $harga->nominal) :
            return back()->with(['error' => 'Uang yg anda masukan kurang']);
        endif;

        $pembayaranSimpan = Pembayaran::create([
            'id_petugas' => $request->id_petugas,
            'nisn' => $request->nisn,
            'tgl_bayar' => Carbon::now(),
            'bulan_bayar' => $bln[$bulan],
            'tahun_bayar' => $tahun,
            'id_spp' => $siswa->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar
        ]);


        if ($pembayaranSimpan) {
            return redirect()->route('pembayaran.index')->with(['success' => 'Berhasil Disimpan']);
        } else {
            return redirect()->route('pembayaran.index')->with(['Error' => 'Gagal Disimpan']);
        }

    }

    public function show($id) {
        $pembayarans = view_pembayaran::where('id',$id)->get();
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
        $pembayarans = Pembayaran::find($id);
        $pembayarans->delete();
        return redirect()->route('pembayaran.index');
    }


    public function history(Request $request)
    {
        // fnc search
        // if ($request->has('cari')){
        //     $pembayarans = Pembayaran::where('nisn','LIKE','%'.$request->cari.'%')->get();
        // }else{
        //     $petugas = Pembayaran::all();
        // }

        // dd($request->all());

        if (auth()->user()->level=='admin' OR auth()->user()->level== 'petugas')
        {
            $pembayarans = view_pembayaran::all();
        }
        else
        {
            // validate siswa
            $users = auth()->user()->username;
            $siswas = Siswa::where('nama', $users)->pluck('nisn');
            $pembayarans = view_pembayaran::where('nisn',$siswas)->get();
        }
        // $spps = SPP::all();


        return view('history.index',compact('pembayarans'));


    }






    // Cari Fnc

//     public function cari(Request $request)
//     {
//         $cari = $request->cari;
//         $pembayarans = DB::table('pembayarans')
//         ->where('nisn','like',"%".$cari."%");
// // ->paginate();
//         return view('pembayaran.index',['pembayarans' => $pembayarans]);
//     }

        public function getData($nisn)
        {
            $siswas = Siswa::where('nisn', '=', $nisn)->first();
            $spp = Spp::where('id', '=', $siswas->id_spp)->first();
            $pembayaran = Pembayaran::where('nisn', '=', $siswas->nisn)
                ->latest()
                ->first();

            $data = [
                'harga' => $spp->nominal,
                'bulan' => $pembayaran->bulan_bayar,
                'tahun' => $pembayaran->tahun_bayar,
            ];

            return response()->json($data);
        }


}
