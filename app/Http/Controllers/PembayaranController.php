<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

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
        return view('pembayaran.create',compact('pembayarans'));
    }
}
