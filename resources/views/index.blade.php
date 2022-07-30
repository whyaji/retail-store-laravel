@extends('layouts.master')
@section('title', 'home')
@section('content')

    <!--==================== MAIN ====================-->
    <section class="home section" id="home">
        <h2 class="section__title blogs__title">Daftar Paket byU</h2>
        <table class="table table-hoover">
            <thead>
                <th>Name Barang</th>
                <th>Golongan</th>
                <th>Harga</th>
                <th>Stok</th>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nama_golongan }}</td>
                        <td>{{ $item->harga_jual }}</td>
                        <td>{{ $item->stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
