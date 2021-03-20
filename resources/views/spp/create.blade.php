<h1>Halaman Tambah SPP</h1>
<br>
<a href="{{ route('spp.index') }}">Kembali</a>

<form action="{{ route('spp.store') }}" method="POST">
    @csrf
    <center>
        <label for="">Tahunn :</label>
            <input type="number" name="tahun" placeholder="masukan tahun">
                <br>
        <label for="">Nominal :</label>
            <input type="number" name="nominal" placeholder="masukan besar nominal">
                <br>
                <br>
                <button type="submit">Tambah SPP </button>
        </center>
</form>