<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spp Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <br>

<div class="card col-md-6 mt-10 mx-auto" onclick="window.print()">
    <div class="card-header">
            <h2 class="text-center">Kwitansi Pembayaran Uang Spp</h2>
    </div>
    @foreach ($pembayarans as $pembayaran)
    <div class="card-body">
            <b>NISN : </b>{{ $pembayaran->nisn }} <br>
            <b>Nama Siswa : </b>{{ $pembayaran->username }} <br>
            <b>Tanggal Bayar : </b>{{ $pembayaran->tgl_bayar }} <br>
            <b>Bulan Dibayar : </b>{{ $pembayaran->bulan_bayar }} <br>
            <b>Tahun Dibayar : </b>{{ $pembayaran->tahun_bayar }} <br>
            <b>Nominal : </b>{{ $pembayaran->nominal }} <br>
            <b>Jumlah Bayar : </b>{{ $pembayaran->jumlah_bayar}} <br>
    </div>
    @endforeach
</div>

</body>
</html>
