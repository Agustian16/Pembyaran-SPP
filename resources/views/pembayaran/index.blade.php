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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('history.index') }}">History</a>
          </li>
          
        </ul>
        <a href="{{ route('logout') }}" class="btn btn-outline-warning">Keluar</a>
      </div>
    </div>
  </nav>
<center>
    <style>
        .tambah{
            position: relative;
            left: 500px;
        }
    </style>
<a href="{{ route('pembayaran.create') }}" class="btn btn-success tambah mt-3">Tambah Transaksi </a>
</center>
<div class="container">
    <div class="card-block text-center">
      <a href="/pembayaran/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
      <table class="table table-bordered  table-hover mt-3">
        
        <thead>
          <tr>
            <th>No.</th>
            <th>Petugas</th>
            <th>NISN</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Bayar</th>
            <th>Tahun Bayar</th>
            <th>SPP</th>
            <th>Jumlah Bayar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
                    $i = 1;
                    @endphp

@foreach ($pembayarans as $s )
<tr>
<td>{{ $i++ }}</td>
                <td>{{ $s->id_petugas }}</td>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->tgl_bayar }}</td>
                <td>{{ $s->bulan_bayar }}</td>
                <td>{{ $s->tahun_bayar }}</td>
                <td>{{ $s->id_spp }}</td>
                <td>{{ $s->jumlah_bayar }}</td>
                <td>
                  <form action="{{ route('pembayaran.destroy', $s) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?..')">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
        </tbody>
</table>
    </div>
</div>