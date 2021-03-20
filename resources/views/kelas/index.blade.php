@extends('layout')
    <h1>Data Kelas</h1>
    <a href="{{ route('spp.index') }}">SPP</a>
    <a href="{{ route('petugas.index') }}">Petugas</a>
    <br>
    <br>
<style>
    .tambah-data{
        position: relative;
        left: 540px;
        top: -20px
    }

</style>

@php
  $i = 1;  
  @endphp

<a href="{{ route('kelas.create') }}" class="btn btn-success tambah-data">Tambah Data</a>
<br>
<table class="table" border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kelas</th>
            <th>Kompetensi Keahlian</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $s )
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $s->nama_kelas }}</td>
            <td>{{ $s->kompetensi_keahlian }}</td>
            <td>    
                <form action="{{ route('kelas.destroy', $s->id_kelas) }}" method="POST">
                    <a href="{{ route('kelas.edit',$s->id_kelas) }}">Edit</a>
                    <a href="{{ route('kelas.show',$s->id_kelas) }}">Show</a>
                    @csrf
                    @method('DELETE')
                <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ini?..')">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>