<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kelas;

class KelasController extends Controller
{
    public function index() {
        $kelas = Kelas::all();
        return view('kelas.index',compact('kelas'));
    }

    public function create() {
        $kelas = Kelas::all();
        return view('kelas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => ' required',
        ]);

        Kelas::create($request->all());
        
        return redirect('kelas')->with('success','Kelas created successfully.');
    }

    public function show ($id_kelas) {
        $kelas = Kelas::where('id_kelas',$id_kelas)->get();
        return view('kelas.show',compact('kelas'));
    }

    public function edit($id_kelas) {
        $kelas = Kelas::where('id_kelas',$id_kelas)->first();
        return view('kelas.edit',compact('kelas'));
    }

    public function update(Request $request,$id_kelas) {
        $kelas = Kelas::where('id_kelas',$id_kelas)->update([
            'nama_kelas' => $request->nama_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
        ]);
        return redirect()->route('siswa.index');
    }

    public function destroy($id_kelas) {
        $kelas = Kelas::where('id_kelas', $id_kelas);
        $kelas->delete();
        return redirect()->route('kelas.index');
    }
}
