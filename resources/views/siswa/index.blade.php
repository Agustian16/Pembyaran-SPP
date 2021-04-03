  @extends('layout')
      {{-- @if (auth()->user()->ceklevel=='admin') --}}
  <center>

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
      {{-- @endif --}}
      <br>
      <br>

      <style>
          .tambah-data{
              position: relative;
              left: 500px;
          }
  table{
      width: 100px;
  }
      </style>
  @php
    $i = 1;
    @endphp
  <a href="{{ route('siswa.create') }}" class="btn btn-success tambah-data">Tambah Data</a>

  <div class="container">
        <div class="card-block text-center">
  <table class="table table-bordered table-hover mt-3" border="1">
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
        <td>{{$s->nama_kelas}}</td>
        <td>{{ $s->alamat }}</td>
        <td>{{ $s->no_telp }}</td>
        <td>{{ $s->tahun }}</td>
        <td>
          <form action="{{ route('siswa.destroy', $s->nisn) }}" method="POST">
            <a href="{{ route('siswa.edit',$s->nisn) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('siswa.show',$s->nisn) }}" class="btn btn-primary">Show</a>
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
  </center>
