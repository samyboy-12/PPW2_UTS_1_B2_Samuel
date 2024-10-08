@extends('layout')

@section('content')
<div class="mt-4">
    <h4 class="mb-4">PemainMU</h4>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>Nomor Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemainmu as $pemainmu)
            <tr>
                <td>{{ $pemainmu->id }}</td>
                <td>{{ $pemainmu->nama_pemain }}</td>
                <td>{{ $pemainmu->no_punggung }}</td>
                <td>{{ $pemainmu->posisi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
