@extends('layout')


<a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah Data</a>
    <h1>Data Siswa</h1>
    <br>
    
@php
  $i = 1;  
@endphp

<table class="table">
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
                <a href="{{ route('siswa.edit',$s->nisn) }}">Edit</a>
                <a href="{{ route('siswa.show',$s->nisn) }}">Show</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>