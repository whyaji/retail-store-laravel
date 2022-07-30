@extends('admin.layouts.master')
@section('title', 'pembeliandetails')
@section('pembeliandetails', 'active')

@section('content')
    <!-- Main Content -->
    <div class="content">
        <div class="page-inner">

            <div class="container-fluid">
                <div class="page-header">
                    <div class="page-header">
                        <h4 class="page-title">Pembelian Detail</h4>
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
                                <a href="#">Pembelian Detail</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold">Tabel data dari Pembelian Detail</h6>
                            <a href="{{ route('pembeliandetail.create') }}" class="btn btn-sm btn-success"><i
                                    class="fas fa-plus"></i>
                                Create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <th>Faktur ID</th>
                                    <th>ID Barang</th>
                                    <th>Beli</th>
                                    <th>Jumlah</th>
                                    <th>Subtotal</th>
                                    <th>action</th>
                                </thead>
                                <tbody>
                                    @foreach ($pembeliandetails as $pembeliandetail)
                                        <tr>
                                            <td>{{ $pembeliandetail->id }}</td>
                                            <td>{{ $pembeliandetail->barang_id }}</td>
                                            <td>{{ $pembeliandetail->harga_beli }}</td>
                                            <td>{{ $pembeliandetail->jumlah }}</td>
                                            <td>{{ $pembeliandetail->sub_total }}</td>
                                            <td>
                                                <form class="float-left m-1" action="{{ route('pembeliandetail.destroy', [$pembeliandetail->id]) }}" method="POST">
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
