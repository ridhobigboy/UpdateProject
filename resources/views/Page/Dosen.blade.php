@extends('Layout.master')
@section('header')
Dosen
@endsection

@section('conten')
<a href="/Dosen/Tambah">+ Tambah prodi</a>
<br><br>
<table border="1">
    <tr>
        <th>id</th>
        <th>nama</th>
    </tr>
    @foreach ($dosen as $d)
        <tr>
            <td>{{ $d->id}}</td>
            <td>{{ $d->nama}}</td>
            <td>
                <a href="/Dosen/Edit/{{ $d->id}}">Edit</a>
                <a href="/Dosen/Hapus/{{ $d->id}}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
