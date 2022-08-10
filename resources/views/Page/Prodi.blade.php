@extends('Layout.master')

@section('header','Prodi')
   Prodi
@endsection

@section('conten')
<a href="/prodi/tambah">+ Tambah prodi</a>
<br><br>
<table border="1">
    <tr>
        <th>id</th>
        <th>nama</th>
    </tr>
    @foreach ($prodi as $p)
        <tr>
            <td>{{ $p->id}}</td>
            <td>{{ $p->nama}}</td>
            <td>
                <a href="/prodi/edit/{{ $p->id}}">Edit</a>
                <a href="/prodi/hapus/{{ $p->id}}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
