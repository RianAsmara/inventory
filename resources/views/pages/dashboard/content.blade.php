@extends('layouts.index')
@section('title','Dashboard')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-sm-6 col-lg-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-secondary mr-3">
                        <i class="fa fa-shopping-basket"></i>
                    </span>
                    <div>
                        <h5 class="mb-1"><b><a href="{{route('makanan.index')}}">{{$makananCount}}</a></b></h5>
                        <small class="text-muted">Total Makanan Kering</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-success mr-3">
                        <i class="fa fa-shopping-basket"></i>
                    </span>
                    <div>
                        <h5 class="mb-1"><b><a href="{{route('bumbu.index')}}">{{$bumbuCount}}</a></b></h5>
                        <small class="text-muted">Total Bumbu Kering</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col">
            <div class="card p-3">
                <div class="card-header">
                    <div class="card-head-row mb-1">
                        <div class="card-title">Data Checkout</div>
                        <div class="card-tools">
                            <a href="{{ route('checkout.create') }}"
    class="btn btn-info btn-border btn-round btn-sm mr-2">
    <span class="btn-label">
        <i class="fa fa-plus"></i>
    </span>
    Tambah Data
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
                        <input type="text" class="form-control form-control-sm" placeholder="Search for...">
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
                    <th>Tanggal Checkout</th>
                    <th>Kategori</th>
                    <th>Nama Bahan Makanan</th>
                    <th>Satuan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($checkouts as $check)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$check->tanggal_checkout}}</td>
                    <td>{{$check->master_barang->kategori}}</td>
                    <td>{{$check->master_barang->nama_barang}}</td>
                    <td>{{$check->master_barang->satuan}}</td>
                    <td>{{$check->jumlah}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div> --}}
</div>
@endsection
