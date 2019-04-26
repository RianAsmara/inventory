@extends('layouts.index')
@section('title','MakananController')
@section('content')
    @if(isset($bumbu))
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Form Bumbu Kering</div>
                        <div class="card-tools">
                            <a href="{{route('bumbu.index')}}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <form action="{{route('bumbu.update', $bumbu->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Nama Bahan Makanan</label>
                                    <input type="text" class="form-control" name="nama_bumbu" required value="{{$bumbu->nama_barang}}">
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                            <label>Kategori Makanan</label>
                                            <select class="form-control" name="kategori" required>
                                                <option value="A" {{$bumbu->kategori == 'A' ? 'selected' : ''}}>Kategori A</option>
                                                <option value="B" {{$bumbu->kategori == 'B' ? 'selected' : ''}}>Kategori B</option>
                                                <option value="C" {{$bumbu->kategori == 'C' ? 'selected' : ''}}>Kategori C</option>
                                                <option value="D" {{$bumbu->kategori == 'D' ? 'selected' : ''}}>Kategori D</option>
                                                <option value="E" {{$bumbu->kategori == 'E' ? 'selected' : ''}}>Kategori E</option>
                                            </select>
                                        </div>
                            </div>
                                <div class="col-md-4 col-lg-4">
                                        <div class="form-group">
                                                <label>Satuan</label>
                                                <select class="form-control" name="satuan" required>
                                                    <option value="Kg" {{$bumbu->satuan == 'Kg' ? 'selected' : ''}}>Kg</option>
                                                    <option value="Kaleng" {{$bumbu->satuan == 'Kaleng' ? 'selected' : ''}}>Kaleng</option>
                                                    <option value="Bungkus" {{$bumbu->satuan == 'Bungkus' ? 'selected' : ''}}>Bungkus</option>
                                                    <option value="Botol" {{$bumbu->satuan == 'Botol' ? 'selected' : ''}}>Botol</option>
                                                    <option value="Gelas" {{$bumbu->satuan == 'Gelas' ? 'selected' : ''}}>Gelas</option>
                                                    <option value="Kotak" {{$bumbu->satuan == 'Kotak' ? 'selected' : ''}}>Kotak</option>
                                                    <option value="Galon" {{$bumbu->satuan == 'Galon' ? 'selected' : ''}}>Galon</option>
                                                </select>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Form Bumbu Kering</div>
                        <div class="card-tools">
                            <a href="{{route('bumbu.index')}}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <form action="{{route('bumbu.save')}}" method="POST">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Nama Bumbu</label>
                                    <input type="text" class="form-control" name="nama_bumbu" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" required>
                                                <option value="A">Kategori A</option>
                                                <option value="B">Kategori B</option>
                                                <option value="C">Kategori C</option>
                                                <option value="D">Kategori D</option>
                                                <option value="E">Kategori E</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                            <label>Satuan</label>
                                            <select class="form-control" name="satuan" required>
                                                <option value="Kg">Kg</option>
                                                <option value="Kaleng">Kaleng</option>
                                                <option value="Bungkus">Bungkus</option>
                                                <option value="Botol">Botol</option>
                                                <option value="Gelas">Gelas</option>
                                                <option value="Kotak">Kotak</option>
                                                <option value="Galon">Galon</option>
                                            </select>
                                        </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
@endsection
