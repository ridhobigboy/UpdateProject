@extends('Layout.master')

@section('header')
   Prodi
@endsection

@section('conten')
{{-- <a href="/prodi/tambah">+ Tambah prodi</a>
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
</table> --}}
 <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        {{-- <th scope="col">Last</th>
        <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach ($prodi as $p)
        <tr>
            <th scope="row">{{ $p->id}}</th>
            <td>{{ $p->nama}}</td>
            {{-- <td>Otto</td>
            <td>@mdo</td>  --}}
          </tr>
        @endforeach
      {{-- <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr> --}}
    </tbody>
  </table>
@endsection
