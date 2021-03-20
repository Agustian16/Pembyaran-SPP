<h1>Halaman Tambah Transaksi</h1>
<br>

<form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <center>
        <label for="">Petugas:</label>
            <input type="number" name="id_petugas" placeholder="Pilih Petugas">
                <br>
                    <label for="">NISN :</label>
                        <input type="number" name="nisn" placeholder="masukan NISN">
                            <br>
                                <label for="">Tanggal Bayar :</label>
                                    <input type="number" name="tgl_bayar" placeholder="masukan Tanggal Bayar">
                                        <br>
                                           <label for="">Bulan Bayar :</label>
                                                 <input type="text" name="bulan_bayar" placeholder="masukan Bulan Bayar">
                                                    <br>
                                            <label for="">Tahun Bayar :</label>
                                        <input type="number" name="tahun_bayar" placeholder="masukan Tahun Bayar">        
                                    <br>
                                <label for="">SPP :</label>
                            <input type="number" name="id_spp" placeholder="Pilih Tahun SPP">        
                        <br>
                    <label for="">Jumlah Bayar :</label>
                <input type="number" name="jumlah_bayar" placeholder="Jumlah">        
            <br>
            <br>
        <button type="submit">Tambah Data</button>
    </center>
</form>