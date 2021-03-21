
@php
  $i = 1;  
  @endphp

<a href="{{ route('petugas.create') }}" class="btn btn-success tambah-data">Tambah Data</a>
<br>
<table class="table" border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($petugas as $s )
            <td>{{ $i++ }}</td>
            <td>{{ $s->username }}</td>
            <td>{{ $s->password }}</td>
            <td>{{ $s->level }}</td>
            <td>    
                <form action="{{ route('petugas.destroy', $s->id) }}" method="POST">
                    <a href="{{ route('petugas.edit',$s->id) }}">Edit</a>
                    <a href="{{ route('petugas.show',$s->id) }}">Show</a>
                    @csrf
                    @method('DELETE')
                <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ini?..')">Hapus</button>
                @endforeach
            </form>
            </td>
        </tr>
    </tbody>

</table>