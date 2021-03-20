<h1>Halaman Tambah Kelas</h1>
<br>

<form action="{{ route('kelas.store') }}" method="POST">
    @csrf
    {{-- <center>
        <label for="">NISN :</label>
            <input type="text" name="nisn" placeholder="masukan NISN">
                <br> --}}
        <label for="">Nama Kelas :</label>
            <input type="text" name="nama_kelas" placeholder="masukan nama kelas">
                <br>
        <label for="">Kompetensi Keahlian :</label>
             <input type="text" name="kompetensi_keahlian" placeholder="masukan Kompetensi Jurusan">
                <br>
                <br>
                <button type="submit">Tambah Kelas</button>
        </center>
</form>