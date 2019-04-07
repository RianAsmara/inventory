@extends('layouts.index')
@section('title','Data Bumbuartisan make:controller Kering')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col">
            <div class="card p-3">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Data Bumbu Kering</div>
                        <div class="card-tools">
                            <a href="{{ route('bumbu.create') }}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                Tambah Data
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Kode Bumbu</th>
                                    <th>Anggaran</th>
                                    <th>Supplier</th>
                                    <th>Nama Bumbu</th>
                                    <th>Stok</th>
                                    <th>Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-xs" title="Update Data"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="" class="btn btn-danger btn-xs" title="Hapus Data"><i class="fa fa-trash"></i></a>
                                        <a href="" class="btn btn-primary btn-xs" title="Tambah Stok & Anggaran"><i class="fa fa-pencil-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
