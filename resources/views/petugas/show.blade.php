@extends('layout')

<h3>Detail Data Petugas</h3>

<a href="{{ route('petugas.index') }}" class="btn btn-primary">Kembali</a>
<br>
<br>
@foreach ($users as $s )
<div class="card">
    <div class="card-body">

    
    <tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Username :</strong>
        <td>{{ $s->username }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    <strong>Password :</strong>
        <td>{{ $s->password }}</td>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Level :</strong>
                <td>{{ $s->level }}</td>
                </div>
</tr>
</div>
</div>
@endforeach