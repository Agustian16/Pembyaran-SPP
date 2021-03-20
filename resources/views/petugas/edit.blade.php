<h1>Halaman Edit Petugas</h1>
<br>

<form action="{{ route('petugas.update',$petugas->id) }}" method="POST">
    @csrf
    @method('PUT')
    <center>
        <label for="">Username :</label>
            <input disabled type="text" name="nisn" value="{{ $petugas->username }}">
                <br>
        <label for="">Password :</label>
            <input type="text" name="password" value="{{ $petugas->password }}">
                <br>
                <br>
                <button type="submit">Update SISWA</button>
        </center>
</form>