@extends('admin.layouts.master')
@section('title', 'pembeliandetail.create')
@section('pembeliandetails', 'active')

@section('content')
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
                                <a href="#">Create</a>
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
                        <h3 class="card-title">Create Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('pembeliandetail.store') }}" method="POST">
                            @CSRF
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('pembeliandetail.index') }}" class="m-1 btn btn-outline-danger">Back</a>
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
