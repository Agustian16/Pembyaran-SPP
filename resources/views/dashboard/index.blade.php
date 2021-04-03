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
