<h1>Halaman Tambah Siswa</h1>
<br>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <center>
        <label for="">NISN :</label>
            <input type="text" name="nisn" placeholder="masukan NISN">
                <br>
        <label for="">NIS :</label>
            <input type="text" name="nis" placeholder="masukan NIS">
                <br>
        <label for="">Nama :</label>
            <input type="text" name="nama" placeholder="masukan Nama">
                <br>
        <label for="">Kelas :</label>
            <input type="text" name="id_kelas" placeholder="Pilih Kelas">
                <br>
        <label for="">Alamat :</label>
            <input type="text" name="alamat" placeholder="masukan Alamat">
                <br>
        <label for="">No.Telp :</label>
            <input type="text" name="no_telp" placeholder="masukan No.Telp">        
                <br>
        <label for="">SPP :</label>
            <input type="text" name="id_spp" placeholder="Pilih Tahun SPP">
                <br>
                <br>
                <button type="submit">Tambah SISWA</button>
        </center>
</form>