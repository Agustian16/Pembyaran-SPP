<h1>Halaman Edit Petugas</h1>
<br>
<a href="{{route('petugas.index')}}" class="btn btn-primary ml-4">Kembali</a>

<form action="{{ route('petugas.update',$users->id) }}" method="POST">
    @csrf
    @method('PUT')
    <center>
        <label for="">Username :</label>
            <input disabled type="text" name="nisn" value="{{ $users->username }}">
                <br>
        <label for="">Password :</label>
            <input type="text" name="password" value="{{ $users->password }}">
                <br>
                <br>
                <button type="submit">Update SISWA</button>
        </center>
</form>
