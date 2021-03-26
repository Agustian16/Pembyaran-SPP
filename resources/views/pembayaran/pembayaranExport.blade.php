<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Petugas</th>
            <th>NISN</th>
            <th>Tgl Bayar</th>
            <th>Bulan Bayar</th>
            <th>Tahun Bayar</th>
            <th>SPP</th>
            <th>Jumlah Bayar</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach ($pembayarans as $s)
        <tr>
            <td>{{ $s->id_petugas }}</td>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->tgl_bayar }}</td>
                <td>{{ $s->bulan_bayar }}</td>
                <td>{{ $s->tahun_bayar }}</td>
                <td>{{ $s->id_spp }}</td>
                <td>{{ $s->jumlah_bayar }}</td>
        </tr>
    @endforeach
    </tbody>
</table>