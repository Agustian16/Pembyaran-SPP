@extends('layout')
<h1>Halaman Tambah Transaksi</h1>
<br>

<form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <center>
        <label for="">Petugas:</label>
        <select name="id_petugas" id="">
            @foreach ($petugas as $p )                
            <option value="{{ $p->username }}">{{ $p->username }}</option>
            @endforeach
        </select>
                <br>
                    <label for="">NISN :</label>
                                <select name="nisn" id="">
                                    @foreach ($siswa as $n )                                        
                                    <option value="{{ $n->nisn }}">{{ $n->nisn }} - {{ $n->nama }}</option>
                                    @endforeach
                                </select>
                            <br>
                    <label for="">Jumlah Bayar :</label>
                    @foreach ($spps as $s )                        
                    <input type="number" name="jumlah_bayar" placeholder="Jumlah" value="{{ $s->nominal }}">        
                    @endforeach
            <br>
            <br>
        <button type="submit">Tambah Data</button>
    </center>
</form>