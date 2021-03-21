<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PetugasController extends Controller
{
    public function index() {
        $petugas = Petugas::all();
        
        return view('petugas.index',compact('petugas'));
    }

    public function create() {
        $petugas = Petugas::all();
        return view('petugas.create');
    }

    public function store(Request $request) {
     Petugas::create([
            'id' => $request->id,
            'username' => $request ->username,
            'password' => $request->password,
            'level' => $request->level,
        ]);
        
        return redirect('petugas');
    }

    public function show($id) {
        $petugas = Petugas::where('id',$id)->get();
        return view('petugas.show',compact('petugas'));
    }

    public function edit($id) {
        $petugas = Petugas::where('id',$id)->first();
        return view('petugas.edit',compact('petugas'));
    }

    public function update(Request $request,$nisn) {

        $petugas = Petugas::where('nisn',$nisn)->update([
            'id' => $request->id,
            'username' => $request ->username,
            'password' => $request->password,
            'level' => $request->level,
        ]);

        return redirect()->route('petugas.index');    }

    public function destroy($id) {
        // $petugas = Petugas::where('id',$id)->get();
        // $petugas->delete();
        Petugas::find($id)->delete();

        return redirect()->route('petugas.index');
    }
}
