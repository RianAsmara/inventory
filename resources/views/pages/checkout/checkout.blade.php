@extends('layouts.index')
@section('title','Data Checkout')
@section('content')
<div class="page-inner">
    <div class="row">
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
                                    <th>Kode Checkout</th>
                                    <th>Tanggal Pakai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-xs" title="Detail Checkout"><i
                                                class="fa fa-eye"></i></a>
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
