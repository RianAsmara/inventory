<?php $__env->startSection('title','MakananController'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($makanan)): ?>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Form Makanan Kering</div>
                        <div class="card-tools">
                            <a href="<?php echo e(route('makanan.index')); ?>" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(route('makanan.update', $makanan->id)); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Nama Bahan Makanan</label>
                                    <input type="text" class="form-control" name="nama_makanan" required value="<?php echo e($makanan->nama_barang); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Kategori Makanan</label>
                                    <select class="form-control" name="kategori" required>
                                        <option value="A" <?php echo e($makanan->kategori == 'A' ? 'selected' : ''); ?>>Kategori A</option>
                                        <option value="B" <?php echo e($makanan->kategori == 'B' ? 'selected' : ''); ?>>Kategori B</option>
                                        <option value="C" <?php echo e($makanan->kategori == 'C' ? 'selected' : ''); ?>>Kategori C</option>
                                        <option value="D" <?php echo e($makanan->kategori == 'D' ? 'selected' : ''); ?>>Kategori D</option>
                                        <option value="E" <?php echo e($makanan->kategori == 'E' ? 'selected' : ''); ?>>Kategori E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <select class="form-control" name="satuan" required>
                                        <option value="Kg" <?php echo e($makanan->satuan == 'Kg' ? 'selected' : ''); ?>>Kg</option>
                                        <option value="Kaleng" <?php echo e($makanan->satuan == 'Kaleng' ? 'selected' : ''); ?>>Kaleng</option>
                                        <option value="Bungkus" <?php echo e($makanan->satuan == 'Bungkus' ? 'selected' : ''); ?>>Bungkus</option>
                                        <option value="Botol" <?php echo e($makanan->satuan == 'Botol' ? 'selected' : ''); ?>>Botol</option>
                                        <option value="Gelas" <?php echo e($makanan->satuan == 'Gelas' ? 'selected' : ''); ?>>Gelas</option>
                                        <option value="Kotak" <?php echo e($makanan->satuan == 'Kotak' ? 'selected' : ''); ?>>Kotak</option>
                                        <option value="Galon" <?php echo e($makanan->satuan == 'Galon' ? 'selected' : ''); ?>>Galon</option>
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
    <?php else: ?>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Form Makanan Kering</div>
                        <div class="card-tools">
                            <a href="<?php echo e(route('makanan.index')); ?>" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(route('makanan.save')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Nama Bahan Makanan</label>
                                    <input type="text" class="form-control" name="nama_makanan" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
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
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>