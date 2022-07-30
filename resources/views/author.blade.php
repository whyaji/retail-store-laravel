@extends('layouts.master')
@section('title', 'author')
@section('content')

<section class="author section" id="author">
    <h2 class="section__title blogs__title">Data Pegawai</h2>
    <table class="table table-hoover">
        <thead>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No telp</th>
        </thead>
        <tbody>
            @foreach ($list as $data)
                <tr>
                    <td>{{ $data->id_pegawai }}</td>
                    <td>{{ $data->nama_pegawai }}</td>
                    <td>{{ $data->jenis_kelamain }}</td>
                    <td>{{ $data->alamat_pegawai }}</td>
                    <td>{{ $data->no_telp_pegawai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
