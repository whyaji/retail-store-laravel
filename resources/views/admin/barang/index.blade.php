@extends('admin.layouts.master')
@section('title', 'barangs')
@section('barangs', 'active')

@section('content')
    <!-- Main Content -->
    <div class="content">
        <div class="page-inner">

            <div class="container-fluid">
                <div class="page-header">
                    <div class="page-header">
                        <h4 class="page-title">Barang</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Base</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Barang</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold">Tabel data dari Barang</h6>
                            <a href="{{ route('barang.create') }}" class="btn btn-sm btn-success"><i
                                    class="fas fa-plus"></i>
                                Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <th>ID</th>
                                    <th>Golongan</th>
                                    <th>Barcode</th>
                                    <th>Nama</th>
                                    <th>Satuan</th>
                                    <th>Beli</th>
                                    <th>Jual</th>
                                    <th>Diskon</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($barangs as $barang)
                                        <tr>
                                            <td>{{ $barang->id }}</td>
                                            <td>{{ $barang->nama_golongan }}</td>
                                            <td>{{ $barang->barcode }}</td>
                                            <td>{{ $barang->nama }}</td>
                                            <td>{{ $barang->satuan }}</td>
                                            <td>{{ $barang->harga_beli }}</td>
                                            <td>{{ $barang->harga_jual }}</td>
                                            <td>{{ $barang->diskon }}</td>
                                            <td>{{ $barang->stock }}</td>
                                            <td>
                                                <a href="{{ route('barang.edit', [$barang->id]) }}"
                                                    class="btn btn-warning float-left m-1">Edit</a>
                                                <form class="float-left m-1"
                                                    action="{{ route('barang.destroy', [$barang->id]) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
