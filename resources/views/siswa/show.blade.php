<h3>Detail Data Siswa</h3>

<a href="{{ route('siswa.index') }}">Kembali</a>
<br>
<br>
@foreach ($siswas as $s )
    <tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>NISN :</strong>
        <td>{{ $s->nisn }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>NIS :</strong>
        <td>{{ $s->nis }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Nama :</strong>
        <td>{{ $s->nama }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Kelas :</strong>
        <td>{{ $s->id_kelas }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Alamat :</strong>
        <td>{{ $s->alamat }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>No.Telp :</strong>
        <td>{{ $s->no_telp }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>SPP</strong>
        <td>{{ $s->id_spp }}</td>
        </div>
</tr>
@endforeach