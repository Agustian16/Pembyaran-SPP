

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- select2 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>Pembayaran</title>
</head>
<body>

    <h1>Halaman Tambah Transaksi</h1>
    <br>

    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <center>
            <label for="">Petugas:</label>
            <input type="text" name="id_petugas" value="{{Auth::user()->id}}" readonly>
                    <br>
                        <label for="">NISN :</label>
                                    <select name="nisn" id="nisn" onchange="dataSiswa()">
                                        @foreach ($siswa as $n )
                                        <option value="{{ $n->nisn }}">{{ $n->nisn }} - {{ $n->nama }}</option>
                                        @endforeach
                                    </select>
                                <br>
                        <label for="">SPP :</label>
                        @foreach ($spps as $s )
                        <input type="number" name="jumlah_bayar" placeholder="Jumlah" value="{{ $s->nominal }}" disabled>
                        @endforeach
                        <br>
                            <label for="">Terakhir Bayar :</label>
                            <input type="text" disabled id="ket">
                        <br>
                            <label for="">Jumlah Bayar :</label>
                            <input type="number" name="jumlah_bayar">
                <br>
                <br>
            <button type="submit">Tambah Data</button>
        </center>
    </form>

    <script>
        $(document).ready(function() {
            $('#nisn').select2();
        });
    </script>

<script>
    function dataSiswa(){
         var nisn = $('#nisn').val();
        //  console.log(nisn);

         $.ajax({
             url:"{{ url('pembayaran/get-data/') }}"+ '/' + nisn,
             type:'GET',
             success: function(data){
                 console.log(data);
                 $('#ket').val("Rp." + data['harga'] +  " " + data['bulan']+'/'+data['tahun']);
             },
             error: function (data){
                $('#ket').val("belum pernah bayar spp");
             }
         });
     }
</script>
</body>
</html>
