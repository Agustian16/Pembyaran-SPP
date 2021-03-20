<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SPP;

class SppController extends Controller
{
    public function index() {
        $spps = SPP::all();
        
        return view('spp.index',compact('spps'));
    }

    public function create() {
        $spps = SPP::all();

        return view('spp.create');
    }

    public function store(Request $request) {
        $request->validate([
            'tahun' => ' required',
            'nominal' => 'required',
        ]);

        SPP::create($request->all());
        
        return redirect('spp')->with('success','Siswa created successfully.');
    }

    public function show($id) {
        $spps = SPP::where('id',$id)->get();
        return view('spp.show',compact('spps'));
    }

    public function edit($id)
     {
        $spps = SPP::find($id);
        return view('spp.edit',compact('spps'));
    }

    public function update(Request $request,$id) 
    {
        SPP::find($id)->update([
            'tahun' => $request ->tahun,
            'nominal' => $request ->nominal
        ]);

        return redirect()->route('spp.index');
    }

    public function destroy($id) {
        $spps = SPP::where('id',$id);
        $spps->delete();

        return redirect()->route('spp.index',compact('spps'))->with('success','Siswa deleted successfully');
    }
}