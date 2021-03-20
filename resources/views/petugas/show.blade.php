<h3>Detail Data Petugas</h3>

<a href="{{ route('petugas.index') }}">Kembali</a>
<br>
<br>
@foreach ($petugas as $s )
    <tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Username :</strong>
        <td>{{ $s->username }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Password :</strong>
        <td>{{ $s->password }}</td>
        </div>
</tr>
@endforeach