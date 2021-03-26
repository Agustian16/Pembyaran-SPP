@extends('layout')

<div class="card">
    <div class="card-body">
        <h3>Histori Pembayaran</h3>
    </div>
</div>
@foreach ($pembayarans as $p)
<div class="card">
    {{-- <div class="card-header">Histori Pembayaran</div> --}}
    <div class="card-body">
        <p class="card-text">
            <b>NISN :</b>{{ $p->nisn }} <br>
            <b>Nama Siswa : </b>{{ $p->nama }} <br>
            <b>Tanggal Bayar : </b>{{ $p->tgl_bayar }} <br>
            <b>Bulan Dibayar : </b>{{ $p->bulan_bayar }} <br>
            <b>Tahun Dibayar : </b>{{ $p->tahun_bayar }} <br>
            <b>Jumlah Bayar : </b>{{ $p->jumlah_bayar}} <br>
            @foreach ($spps as $p )                
            <b>Nominal : </b>{{ $p->nominal }} <br>
        </p>
    </div>
    @endforeach
    @endforeach
</div>
