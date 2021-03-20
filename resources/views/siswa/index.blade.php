@extends('layout')
    <h1>Data Siswa</h1>
    <a href="{{ route('kelas.index') }}">Kelas</a>
    <a href="{{ route('spp.index') }}">SPP</a>
    <a href="{{ route('petugas.index') }}">Petugas</a>
    <br>
    <br>
<style>
    .tambah-data{
        position: relative;
        left: 300px;
        top: -20px
    }

</style>

@php
  $i = 1;  
  @endphp

<a href="{{ route('siswa.create') }}" class="btn btn-success tambah-data">Tambah Data</a>
<br>
<table class="table" border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>alamat</th>
            <th>No.Telp</th>
            <th>SPP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswas as $s )
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $s->nisn }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->id_kelas }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->no_telp }}</td>
            <td>{{ $s->id_spp }}</td>
            <td>    
                <form action="{{ route('siswa.destroy', $s->nisn) }}" method="POST">
                    <a href="{{ route('siswa.edit',$s->nisn) }}">Edit</a>
                    <a href="{{ route('siswa.show',$s->nisn) }}">Show</a>
                    @csrf
                    @method('DELETE')
                <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ini?..')">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>