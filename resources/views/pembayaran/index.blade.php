<h1>Data Pembayaran SPP</h1>

<a href="{{ route('pembayaran.create') }}">Tambah Transaksi </a>
<br>
<br>
<table border="3">
        <tr>
            <th>No.</th>
            <th>Petugas</th>
            <th>NISN</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Bayar</th>
            <th>Tahun Bayar</th>
            <th>SPP</th>
            <th>Jumlah Bayar</th>
        </tr>
        <tbody>
            <tr>
                @php
                    $i = 1;
                @endphp

                @foreach ($pembayarans as $s )
                <td>{{ $i++ }}</td>
                <td>{{ $s->id_petugas }}</td>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->tgl_bayar }}</td>
                <td>{{ $s->bulan_bayar }}</td>
                <td>{{ $s->tahun_bayar }}</td>
                <td>{{ $s->id_spp }}</td>
                <td>{{ $s->jumlah_bayar }}</td>
                @endforeach
            </tr>
        </tbody>
</table>