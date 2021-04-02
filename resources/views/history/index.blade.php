{{-- @extends('layout') --}}



{{-- <p>Cari Data Pembayaran :</p>
    <form action="{{route('history.index')}}" method="GET">
        <input type="text" name="cari" placeholder="Cari Pembayaran .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form> --}}

{{-- <p>Cari Data</p>
<form class="form-inline my-2 my-lg-0" method="GET" action="{{route('history.index')}}">
<input type="search" name="cari" id="" class="form-control mr-sm-2" placeholder="cari data..">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CARI</button>
</form> --}}

    {{-- <div class="card">
        <div class="card-body">
            <h3>Histori Pembayaran</h3>
    </div>
</div> --}}

{{-- <div class="card"> --}}
    {{-- <div class="card-header">Histori Pembayaran</div> --}}
    {{-- <div class="card-body">
        <p class="card-text">
            <b>NISN :</b>{{ $p->nisn }} <br>
            <b>Nama Siswa : </b>{{ $p->nama }} <br>
            <b>Tanggal Bayar : </b>{{ $p->tgl_bayar }} <br>
            <b>Bulan Dibayar : </b>{{ $p->bulan_bayar }} <br>
            <b>Tahun Dibayar : </b>{{ $p->tahun_bayar }} <br>
            <b>Jumlah Bayar : </b>{{ $p->jumlah_bayar}} <br>

            <b>Nominal : </b>{{ $p->nominal }} <br>
        </p>
    </div> --}}
{{-- </div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- data table --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <title>Halaman History</title>
</head>
<body>
<table id="table_id table table-bordered" class="display">
    <thead>
        <tr>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Tanggal Bayar</th>
            <th>Bulan bayar</th>
            <th>Tahun Bayar</th>
            <th>Jumlah Bayar</th>
            <th>Nominal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($pembayarans as $p)
            <td>{{ $p->nisn }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->tgl_bayar }}</td>
            <td>{{ $p->bulan_bayar }}</td>
            <td>{{ $p->tahun_bayar }}</td>
            <td>{{ $p->jumlah_bayar}}</td>
            @foreach ($spps as $p )
            <td>{{ $p->nominal }}</td>
        </tr>
        @endforeach
        @endforeach
    </tbody>
</table>

</body>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>
</html>

