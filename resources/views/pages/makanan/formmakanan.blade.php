@extends('layouts.index')
@section('title','MakananController')
@section('content')
    @if(isset($makanan))
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Form Makanan Kering</div>
                        <div class="card-tools">
                            <a href="{{route('makanan.index')}}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <form action="{{route('makanan.update', $makanan->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Bahan Makanan</label>
                                    <input type="text" class="form-control" name="nama_makanan" required value="{{$makanan->nama_barang}}">
                                </div>
                                <div class="form-group">
                                    <label>Kategori Makanan</label>
                                    <select class="form-control" name="kategori" required>
                                        <option value="A" {{$makanan->kategori == 'A' ? 'selected' : ''}}>Kategori A</option>
                                        <option value="B" {{$makanan->kategori == 'B' ? 'selected' : ''}}>Kategori B</option>
                                        <option value="C" {{$makanan->kategori == 'C' ? 'selected' : ''}}>Kategori C</option>
                                        <option value="D" {{$makanan->kategori == 'D' ? 'selected' : ''}}>Kategori D</option>
                                        <option value="E" {{$makanan->kategori == 'E' ? 'selected' : ''}}>Kategori E</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <select class="form-control" name="satuan" required>
                                        <option value="Kg" {{$makanan->satuan == 'Kg' ? 'selected' : ''}}>Kg</option>
                                        <option value="Kaleng" {{$makanan->satuan == 'Kaleng' ? 'selected' : ''}}>Kaleng</option>
                                        <option value="Bungkus" {{$makanan->satuan == 'Bungkus' ? 'selected' : ''}}>Bungkus</option>
                                        <option value="Botol" {{$makanan->satuan == 'Botol' ? 'selected' : ''}}>Botol</option>
                                        <option value="Gelas" {{$makanan->satuan == 'Gelas' ? 'selected' : ''}}>Gelas</option>
                                        <option value="Kotak" {{$makanan->satuan == 'Kotak' ? 'selected' : ''}}>Kotak</option>
                                        <option value="Galon" {{$makanan->satuan == 'Galon' ? 'selected' : ''}}>Galon</option>
                                    </select>
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
                        <div class="card-title">Form Makanan Kering</div>
                        <div class="card-tools">
                            <a href="{{route('makanan.index')}}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <form action="{{route('makanan.save')}}" method="POST">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Bahan Makanan</label>
                                    <input type="text" class="form-control" name="nama_makanan" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Makanan</label>
                                    <select class="form-control" name="kategori" required>
                                        <option value="A">Kategori A</option>
                                        <option value="B">Kategori B</option>
                                        <option value="C">Kategori C</option>
                                        <option value="D">Kategori D</option>
                                        <option value="E">Kategori E</option>
                                    </select>
                                </div>
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
