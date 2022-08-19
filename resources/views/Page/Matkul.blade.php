@extends('layout.master')

@section('header')
    Prodi
@endsection

@section('conten')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">SKS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matkul as $m)
            <tr>
                <th scope="row">{{$m->id}}</th>
                <td>{{$m->nama}}</td>
                <td>{{$m->sks}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
