<h1>Halaman Edit Siswa</h1>
<br>

    <a href="{{route('siswa.index')}}" class="btn btn-primary ml-4">Kembali</a>
    <br>
    <br>
<form action="{{ route('siswa.update',$siswas->nisn) }}" method="POST">
    @csrf
    @method('PUT')
    <center>
        <label for="">NISN :</label>
            <input disabled type="text" name="nisn" value="{{ $siswas->nisn }}">
                <br>
        <label for="">NIS :</label>
            <input type="text" name="nis" value="{{ $siswas->nis }}" disabled>
                <br>
        <label for="">Nama :</label>
            <input type="text" name="nama" value="{{ $siswas->nama }}">
                <br>
        <label for="">Kelas :</label>
            {{-- <input type="text" name="id_kelas" value="{{ $siswas->id_kelas }}"> --}}
            <select name="" id="">
                @foreach ($kelass as $a)
                <option value="{{$a->id_kelas}}">{{$a->nama_kelas}}</option>
                @endforeach

            </select>
                <br>
        <label for="">Alamat :</label>
            <input type="text" name="alamat" value="{{ $siswas->alamat }}">
                <br>
        <label for="">No.Telp :</label>
            <input type="text" name="no_telp" value="{{ $siswas->no_telp }}">
                <br>
        <label for="">SPP :</label>
            {{-- <input type="text" name="id_spp" value="{{ $siswas->id_spp }}"> --}}
            <select name="" id="">
                @foreach ($spps as $s)
                <option value="{{$s->id}}">{{$s->tahun}}</option>
                @endforeach

            </select>
                <br>
                <br>
                <button type="submit">Update SISWA</button>
        </center>
</form>
