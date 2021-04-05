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
    {{-- data table --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<a href="{{ route('pembayaran.create') }}" class="btn btn-success tambah mt-3">Tambah Transaksi </a>
</center>
<div class="container">
    <div class="card-block text-center">
      <a href="/pembayaran/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
      <table class="table table-bordered  table-hover mt-3" id="table_id">

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
                <td>{{ $s->username }}</td>
                <td>{{ $s->nisn }} - {{$s->nama}}</td>
                <td>{{ $s->tgl_bayar }}</td>
                <td>{{ $s->bulan_bayar }}</td>
                <td>{{ $s->tahun_bayar }}</td>
                <td>{{ $s->tahun }} - {{ $s->nominal }}</td>
                <td>{{ $s->jumlah_bayar }}</td>
                <td>
                  <form action="{{ route('pembayaran.destroy', $s->id) }}" method="POST">

                    <a href="{{ route('pembayaran.show',$s->id) }}"class="btn btn-primary">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?..')">Hapus</button>
                  </form>
                </td>
            </tr>
              @endforeach
        </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>
    </div>
</div>
