@extends('admin.layouts.master')
@section('title', 'barang.create')
@section('barangs', 'active')

@section('content')
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
                                <a href="#">Create</a>
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
                        <h3 class="card-title">Create Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="POST">
                            @CSRF
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                                <span style="color:red">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Barcode</label>
                                <input type="text" class="form-control" name="barcode" value="{{ old('barcode') }}">
                                <span style="color:red">
                                    @error('barcode')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Satuan</label>
                                <input type="text" class="form-control" name="satuan" value="{{ old('satuan') }}">
                                <span style="color:red">
                                    @error('satuan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Beli</label>
                                <input type="number" class="form-control" name="harga_beli"
                                    value="{{ old('harga_beli') }}">
                                <span style="color:red">
                                    @error('harga_beli')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Jual</label>
                                <input type="number" class="form-control" name="harga_jual"
                                    value="{{ old('harga_jual') }}">
                                <span style="color:red">
                                    @error('harga_jual')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Diskon</label>
                                <input type="number" class="form-control" name="diskon" value="{{ old('diskon') }}">
                                <span style="color:red">
                                    @error('diskon')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Golongan</label>
                                <input type="text" class="form-control" name="nama_golongan"
                                    value="{{ old('nama_golongan') }}">
                                <span style="color:red">
                                    @error('nama_golongan')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('barang.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                                    <button type="submit" class="m-1 btn btn-success">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
