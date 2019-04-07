<?php $__env->startSection('title','Form Makanan Kering'); ?>
<?php $__env->startSection('content'); ?>
<div class="col">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Makanan Kering</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Anggaran</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Bahan Makanan</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori Makanan</label>
                        <select class="form-control">
                            <option>A - </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="datepicker" name="datepicker">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Satuan</label>
                        <select class="form-control">
                            <option>Kg</option>
                            <option>Kaleng</option>
                            <option>Bungkus</option>
                            <option>Botol</option>
                            <option>Gelas</option>
                            <option>Kotak</option>
                            <option>Galon</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="" class="btn btn-success btn-sm">Simpan</a>
            <a href="" class="btn btn-danger btn-sm">Reset</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>