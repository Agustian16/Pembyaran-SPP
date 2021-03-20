<h1>Data SPP Pertahun</h1>

<a href="{{ route('spp.create') }}">Tambah SPP</a>
<br>
<br>
<table border="1">
    <thead>
        <tr>
        <th>No.1</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <tr>

            @php
                $i = 1;
            @endphp

            @foreach ($spps as $s )
            <td>{{ $i++ }}</td>
            <td>{{ $s->tahun }}</td>
            <td>{{ $s->nominal }}</td>
            <td>
                <form action="{{ route('spp.destroy',$s->id) }}" method="POST">
                    <a href="{{ route('spp.edit',$s->id) }}">Edit</a>
                    <a href="{{ route('spp.show',$s->id) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Anda Yakin ingin menghapus?..')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>


</table>