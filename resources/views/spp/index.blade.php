@extends('layout')
<nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('siswa.index') }}">Pembayaran SPP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('history.index') }}">History</a>
          </li>
          
        </ul>
        <a href="{{ route('logout') }}" class="btn btn-outline-warning">Keluar</a>
      </div>
    </div>
  </nav>
<style>
    .tambah{
        position: relative;
        left: 500px;
    }
</style>
<center>
<a href="{{ route('spp.create') }}" class="btn btn-success tambah mt-3">Tambah SPP</a>
</center>
<table class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
        <th>No.1</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <tr>

            @php
                $i = 1;
            @endphp

            @foreach ($spps as $s )
            <td>{{ $i++ }}</td>
            <td>{{ $s->tahun }}</td>
            <td>{{ $s->nominal }}</td>
            <td>
                <form action="{{ route('spp.destroy',$s->id) }}" method="POST">
                    <a href="{{ route('spp.edit',$s->id) }}"class= "btn btn-warning">Edit</a>
                    <a href="{{ route('spp.show',$s->id) }}"class= "btn btn-primary">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Anda Yakin ingin menghapus?..')" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>


</table>