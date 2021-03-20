<h3>Detail Data Kelas</h3>

<a href="{{ route('kelas.index') }}">Kembali</a>
<br>
<br>
@foreach ($kelas as $k )
    <tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>NISN :</strong>
        <td>{{ $k->nama_kelas }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>NIS :</strong>
        <td>{{ $k->kompetensi_keahlian }}</td>
        </div>
</tr>
@endforeach