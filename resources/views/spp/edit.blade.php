@extends('layout')
    <a href="{{route('spp.index')}}" class="btn btn-primary ml-4">Kembali</a>

<form action="{{ route('spp.update', $spps->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="">Tahun</label>
        <input type="text" name="tahun" id="Tahun" value="{{ $spps->tahun }}">
    <label for="">Nominal</label>
        <input type="text" name="nominal" id="Nominal" value="{{ $spps->nominal }}">
        <button type="submit">Update</button>
</form>
