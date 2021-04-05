<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PetugasController extends Controller
{
    public function index() {
        $users = User::all();

        return view('petugas.index',compact('users'));
    }

    public function create() {
        $users = User::all();
        $users->password = bcrypt('123');
        $users->level = 'petugas';
        $users->remember_token = Str::random(60);
        // $users->save();
        return view('petugas.create');
    }

    public function store(Request $request) {
     User::create([
            'id' => $request->id,
            'username' => $request ->username,
            'password' => bcrypt('123'),
            'level' => 'petugas',
        ]);

        Petugas::create([
            'id' => $request->id,
            'username' => $request ->username,
            'password' => bcrypt('123'),
            'level' => 'petugas',
        ]);

        return redirect('petugas');
    }

    public function show($id) {
        $users = User::where('id',$id)->get();
        return view('petugas.show',compact('users'));
    }

    public function edit($id) {
        $users = User::where('id',$id)->first();
        return view('petugas.edit',compact('users'));
    }

    public function update(Request $request,$nisn) {

        $petugas = User::where('nisn',$nisn)->update([
            'id' => $request->id,
            'username' => $request ->username,
            'password' => $request->password,
            'level' => $request->level,
        ]);

        return redirect()->route('petugas.index');    }

        public function destroy($id) {
            $petugas = Petugas::where('id',$id);
            $petugas->delete();

            return redirect()->route('petugas.index',compact('petugas'))->with('success','Petugas deleted successfully');
        }
}
