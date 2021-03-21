<h1>Halaman Tambah Transaksi</h1>
<br>

<form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <center>
        <label for="">Petugas:</label>
        <select name="id_petugas" id="">
            @foreach ($petugas as $p )                
            <option value="{{ $p->username }}">{{ $p->username }}</option>
            @endforeach
        </select>
                <br>
                    <label for="">NISN :</label>
                                <select name="nisn" id="">
                                    @foreach ($siswa as $n )                                        
                                    <option value="{{ $n->nisn }}">{{ $n->nisn }} - {{ $n->nama }}</option>
                                    @endforeach
                                </select>
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
                                    <select name="id_spp" id="">
                                        @foreach ($spps as $s )                                            
                                        <option value="{{ $s->tahun }}">{{ $s->tahun }}</option>
                                        @endforeach
                                    </select>
                        <br>
                    <label for="">Jumlah Bayar :</label>
                    @foreach ($spps as $s )                        
                    <input type="number" name="jumlah_bayar" placeholder="Jumlah" value="{{ $s->nominal }}" disabled>        
                    @endforeach
            <br>
            <br>
        <button type="submit">Tambah Data</button>
    </center>
</form>