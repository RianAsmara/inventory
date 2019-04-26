<?php $__env->startSection('title','MakananController'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-inner">
        <div class="row">
            <div class="col">
                <div class="card p-3">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Data Makanan Kering</div>
                            <div class="card-tools">
                                <a href="<?php echo e(route('makanan.create')); ?>"
                                   class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                    Tambah Data
                                </a>
                                <a href="<?php echo e(route("cetak")); ?>" class="btn btn-info btn-border btn-round btn-sm mr-2">
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
                            <form action="<?php echo e(route('makanan.search')); ?>" method="GET">
                                <div class="row">
                                    <div class="col-md-5 col-xs-12">
                                        <div class="form-group">
                                            <div class="input-icon">
                                                <?php if(isset($key)): ?>
                                                    <input type="text" class="form-control form-control-sm"
                                                           placeholder="Search for..." name="key" value="<?php echo e($key); ?>">
                                                    <span class="input-icon-addon">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                                <?php else: ?>
                                                    <input type="text" class="form-control form-control-sm"
                                                           placeholder="Search for..." name="key">
                                                    <span class="input-icon-addon">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-xs"><i
                                                    class="fa fa-search"></i> Cari
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-head-bg-primary mt-4">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode</th>
                                    <th>Nama Bahan Makanan</th>
                                    <th>Satuan</th>
                                    <th>Stok</th>
                                    <th>Stok Akhir Bulan Lalu</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $makanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($mak->kategori); ?></td>
                                        <td><?php echo e($mak->nama_barang); ?></td>
                                        <td><?php echo e($mak->satuan); ?></td>
                                        <td><?php echo e($mak->stok); ?></td>
                                        <?php
                                            $bulan = date('m');
                                            $bulan_lalu = 0;
                                            if ($bulan == 12){
                                                $bulan_lalu = 01;
                                            }else{
                                                $bulan_lalu = $bulan - 01;
                                            }
                                            $stok_bukan_lalu = DB::table('stok_akhirs')
                                                                ->join('master_barangs', 'stok_akhirs.master_barang_id', '=', 'master_barangs.id')
                                                                ->select('stok_akhir')
                                                                ->where('bulan', '=', $bulan_lalu)
                                                                ->where('tahun', '=', date('Y'))
                                                                ->where('master_barangs.id', '=', $mak->id)
                                                                ->first();
                                        ?>
                                        <td><?php echo e($stok_bukan_lalu ? $stok_bukan_lalu->stok_akhir : '-'); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('makanan.edit', $mak->id)); ?>" class="btn btn-warning btn-xs"
                                               title="Update Data"><i class="fa fa-pencil-alt"></i></a>
                                            <a href="<?php echo e(route('makanan.delete', $mak->id)); ?>"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data makanan ini?')"
                                               class="btn btn-danger btn-xs" title="Hapus Data"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo e($makanans->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>