<h3>Detail Data SPP</h3>

<a href="{{ route('spp.index') }}">Kembali</a>
<br>
<br>
@foreach ($spps as $s )
    <tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Tahun :</strong>
        <td>{{ $s->tahun }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Nominal :</strong>
        <td>{{ $s->nominal }}</td>
        </div>
</tr>
@endforeach