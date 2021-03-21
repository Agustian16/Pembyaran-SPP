<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\SPP;
use App\Models\Pembayaran;
use App\Models\Kelas;
use App\Models\User;


class SiswaController extends Controller
{
    public function index() {
        $siswas = Siswa::all();
        $spps = SPP::all();
        $pembayarans = Pembayaran::all();
        $kelas = Kelas::all();
        $users = User::all();
        return view('siswa.index',compact('siswas','kelas','spps','users'));
    }

    public function create() {
        $spps = SPP::all();
        $pembayarans = Pembayaran::all();
        $kelas = Kelas::all();

        return view('siswa.create',compact('spps','kelas'));
    }

    public function store(Request $request) {
        $request->validate([
            'nis' => 'required',
            'nama' => ' required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_spp' => 'required',
        ]);

        Siswa::create($request->all());
        
        return redirect('siswa')->with('success','Siswa created successfully.');
    }

    public function show($nisn) {
        $siswas = Siswa::where('nisn',$nisn)->get();
        return view('siswa.show',compact('siswas'));
    }

    public function edit($nisn) {
        $siswas = Siswa::where('nisn',$nisn)->first();
        return view('siswa.edit',compact('siswas'));
    }

    public function update(Request $request,$nisn) {

        $siswas = Siswa::where('nisn',$nisn)->update([
            'nisn' => $request->nisn,
            'nis' => $request ->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp
        ]);

        return redirect()->route('siswa.index') ->with('success','Siswa updated successfully');
    }

    public function destroy($nisn) {
        $siswas = Siswa::where('nisn',$nisn)->get();
        $siswas->delete();

        return redirect()->route('siswa.index',compact('siswas'))->with('success','Siswa deleted successfully');
    }
}
