@extends('layout')
<nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('siswa.index') }}">Data Pembayaran SPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('siswa.index') }}">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('kelas.index') }}">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('spp.index') }}">SPP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas.index') }}">Petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pembayaran.index') }}">Bayar SPP</a>
          </li>
          
        </ul>
        <a href="{{ route('logout') }}" class="btn btn-outline-warning">Keluar</a>
      </div>
    </div>
  </nav>
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
<br>
<center>
<a href="{{ route('kelas.create') }}" class="btn btn-success tambah-data">Tambah Data</a>
</center>
<br>
<div class="container">
    <div class="card-block text-center">
<table class="table table-bordered table-hover">
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
                    <a href="{{ route('kelas.edit',$s->id_kelas) }}"class="btn btn-warning">Edit</a>
                    <a href="{{ route('kelas.show',$s->id_kelas) }}"class="btn btn-primary">Show</a>
                    @csrf
                    @method('DELETE')
                <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ini?..')" class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
    </div>
</div>