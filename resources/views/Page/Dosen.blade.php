@extends('Layout.master')
@section('header')
Dosen
@endsection

@section('conten')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $d)
        <tr>
            <th scope="row">{{$d->id}}</th>
            <td>{{$d->nama}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
