
@extends('layout')
<h1>Halaman Tambah Siswa</h1>
<br>

<div class="card">
    <div class="card-body">
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <center>
                <label for="">NISN :</label>
                    <input type="number" name="nisn" placeholder="masukan NISN">
                        <br>
                <label for="">NIS :</label>
                    <input type="number" name="nis" placeholder="masukan NIS">
                        <br>
                <label for="">Nama :</label>
                    <input type="text" name="nama" placeholder="masukan Nama">
                        <br>
        
                        <label for="">Kelas :</label>
                        <select name="id_kelas" id="Kelas">
                            @foreach ($kelas as $k )
                            <option value="{{ $k->nama_kelas }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    
                        <br>
                <label for="">Alamat :</label>
                    <input type="text" name="alamat" placeholder="masukan Alamat">
                        <br>
                <label for="">No.Telp :</label>
                    <input type="number" name="no_telp" placeholder="masukan No.Telp">        
                        <br>
                        
                        <label for="">SPP :</label>
                        <select name="id_spp" id="">
                            @foreach ($spps as $s )
                            <option value="{{ $s->id }}">{{ $s->tahun }}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <button type="submit">Tambah SISWA</button>
                </center>
        </form>

    </div>
</div>
