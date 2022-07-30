@extends('admin.layouts.master')
@section('title', 'barang.edit')
@section('barangs', 'active')

@section('content')
    <!-- Main content -->
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
                                <a href="#">Edit</a>
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
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('barang.update', [$barang->id]) }}" method="POST">
                            @CSRF
                            @method('put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Barang</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                placeholder="Nama Barang" value="{{ $barang->nama }}">
                                            <small class="text-danger">
                                                @error('nama')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama_golongan">Nama Golongan</label>
                                            <input type="text" name="nama_golongan"
                                                class="form-control @error('nama_golongan') is-invalid @enderror"
                                                placeholder="Nama Golongan" value="{{ $barang->nama_golongan }}">
                                            <small class="text-danger">
                                                @error('nama_golongan')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="harga_beli">Harga Beli</label>
                                            <input type="number" name="harga_beli"
                                                class="form-control @error('harga_beli') is-invalid @enderror"
                                                placeholder="Harga Beli" value="{{ $barang->harga_beli }}">
                                            <small class="text-danger">
                                                @error('harga_beli')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="harga_jual">Harga Jual</label>
                                            <input type="number" name="harga_jual"
                                                class="form-control @error('harga_jual') is-invalid @enderror"
                                                placeholder="Harga Jual" value="{{ $barang->harga_jual }}">
                                            <small class="text-danger">
                                                @error('harga_jual')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="diskon">Diskon</label>
                                            <input type="number" name="diskon"
                                                class="form-control @error('diskon') is-invalid @enderror"
                                                placeholder="Diskon" value="{{ $barang->diskon }}">
                                            <small class="text-danger">
                                                @error('diskon')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="stock">Stok</label>
                                            <input type="number" name="stock"
                                                class="form-control @error('stock') is-invalid @enderror" placeholder="Stok"
                                                value="{{ $barang->stock }}">
                                            <small class="text-danger">
                                                @error('stock')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('barang.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                                    <button type="submit" class="m-1 btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
