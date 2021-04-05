@extends('layout')
<h1>Halaman Edit Kelas</h1>
<br>

<a href="{{route('kelas.index')}}" class="btn btn-primary ml-4">Kembali</a>

<form action="{{ route('kelas.update',$kelas->id_kelas) }}" method="POST">
    @csrf
        <label for="">Nama Kelas :</label>
            <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}">
                <br>
        <label for="">Kompetensi Keahlian :</label>
             <input type="text" name="kompetensi_keahlian" value="{{ $kelas->kompetensi_keahlian }}">
                <br>
                <br>
                <button type="submit">Update Kelas</button>
</form>
