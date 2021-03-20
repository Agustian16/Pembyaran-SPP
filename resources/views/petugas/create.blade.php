<h1>Halaman Tambah Petugas</h1>
<br>

<form action="{{ route('petugas.store') }}" method="POST">
    @csrf
    <center>
        <label for="">Username :</label>
            <input type="text" name="username" placeholder="masukan username">
                <br>
        <label for="">password :</label>
            <input type="text" name="password" placeholder="masukan password">
                <br>
                <br>
                <button type="submit">Tambah Petugas</button>
        </center>
</form>