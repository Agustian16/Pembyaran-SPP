<h1>Halaman Tambah Siswa</h1>
<br>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <center>
        <label for="">NISN :</label>
            <input type="number" name="nisn" placeholder="masukan NISN">
                <br>
        <label for="">NIS :</label>
            <input type="number" name="nis" placeholder="masukan NIS">
                <br>
        <label for="">Nama :</label>
            <input type="text" name="nama" placeholder="masukan Nama">
                <br>

                @foreach ($kelas as $k )
                    
                <label for="">Kelas :</label>
                <select name="id_kelas" id="Kelas">
                    <option value="{{ $k->nama_kelas }}">{{ $k->nama_kelas }}</option>
                </select>
                @endforeach
            
                <br>
        <label for="">Alamat :</label>
            <input type="text" name="alamat" placeholder="masukan Alamat">
                <br>
        <label for="">No.Telp :</label>
            <input type="number" name="no_telp" placeholder="masukan No.Telp">        
                <br>
                @foreach ($spps as $s )
                    
                <label for="">SPP :</label>
                <select name="id_spp" id="">
                    <option value="{{ $s->tahun }}">{{ $s->tahun }}</option>
                </select>
                @endforeach
                <br>
                <br>
                <button type="submit">Tambah SISWA</button>
        </center>
</form>