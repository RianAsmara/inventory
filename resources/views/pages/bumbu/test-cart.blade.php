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
                                <a href="{{ route('bumbu.create') }}"
                                   class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                    @php
                        Cart::destroy();
                        Cart::add([
                          ['id' => '1', 'name' => 'Makanan 1', 'qty' => 1, 'price' => 10],
                          ['id' => '2', 'name' => 'Makanan 2', 'qty' => 1, 'price' => 25],
                        ]);

                    @endphp

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
                                    <th>Kode Bahan Makanan</th>
                                    <th>Nama Bahan Makanan</th>
                                    <th>Satuan</th>
                                    <th>Stok</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $row)
                                    <tr>
                                        <td scope="row">{{$loop->iteration}}</td>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->qty}}</td>
                                        <td>{{$row->price}}</td>
                                        <td>{{$row->total}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>Subtotal</td>
                                    <td><?php echo Cart::subtotal(); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>Tax</td>
                                    <td><?php echo Cart::tax(); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>Total</td>
                                    <td><?php echo Cart::total(); ?></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
