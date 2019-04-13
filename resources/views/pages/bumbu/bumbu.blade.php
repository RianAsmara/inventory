@extends('layouts.index')
@section('title','MakananController')
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
                            <a href="{{route("cetak")}}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-print"></i>
                                </span>
                                Cetak Data
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-sub">
                        <div class="row">
                            <div class="col-md-7 col-xs-12">
                                <div class="form-group form-inline" style="text-align: left">
                                    <label for="inlineinput" class="col-md-1 col-form-label p-0">Filter :</label>
                                    <div class="col-md-4 p-0 pl-1 ">
                                        <select class="form-control form-control-sm input-full" id="inlineinput">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 p-0 pl-1">
                                        <select class="form-control form-control-sm input-full" id="inlineinput">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-xs-12 p-0 pl-1">
                                        <button class="btn btn-outline-info btn-xs btn-block" id="inlineinput">
                                            <i class="fa fa-filter"></i>
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-xs-12">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Search for...">
                                        <span class="input-icon-addon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-head-bg-primary mt-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Bahan Makanan</th>
                                    <th>Nama Bahan Makanan</th>
                                    <th>Satuan</th>
                                    <th>Stok</th>
                                    <th>Stok Akhir Bulan Lalu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bumbus as $bum)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$bum->kategori}}</td>
                                    <td>{{$bum->nama_barang}}</td>
                                    <td>{{$bum->satuan}}</td>
                                    <td>{{$bum->stok}}</td>
                                    <td></td>
                                    <td>
                                        <a href="{{route('bumbu.edit', $bum->id)}}" class="btn btn-warning btn-xs"
                                            title="Update Data"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="{{route('bumbu.delete', $bum->id)}}"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                            class="btn btn-danger btn-xs" title="Hapus Data"><i
                                                class="fa fa-trash"></i></a>
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
</div>
@endsection
