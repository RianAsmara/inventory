<?php $__env->startSection('title','Data Makanan Kering'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-inner">
    <div class="row">
        <div class="col">
            <div class="card p-3">
                <div class="card-header">
                    <div class="card-head-row mb-1">
                        <div class="card-title">Data Makanan Kering</div>
                        <div class="card-tools">
                            <a href="<?php echo e(route('makanan.create')); ?>"
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                    <label>Lihat Data Bulan</label>
                                <select class="form-control" required="">
                                    <option value="">Pilih Bulan</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                    <option>Maret</option>
                                    <option>April</option>
                                    <option>Mei</option>
                                    <option>Juni</option>
                                    <option>Juli</option>
                                    <option>Agustus</option>
                                    <option>September</option>
                                    <option>Oktober</option>
                                    <option>November</option>
                                    <option>Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Cetak Laporan Per Triwulan</label>
                                    <select class="form-control" required="">
                                        <option value="">Pilih Bulan</option>
                                        <option>Triwulan I</option>
                                        <option>Triwulan II</option>
                                        <option>Triwulan III</option>
                                        <option>Triwulan IV</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered-bd-default">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Kode Bahan Makanan</th>
                                    <th>Anggaran</th>
                                    <th>Supplier</th>
                                    <th>Nama Bahan Makanan</th>
                                    <th>Stok</th>
                                    <th>Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                                        <a href="" class="btn btn-success btn-xs" title="Update Data"><i
                                                class="fa fa-pencil-alt"></i></a>
                                        <a href="" class="btn btn-danger btn-xs" title="Hapus Data"><i
                                                class="fa fa-trash"></i></a>
                                        <a href="" class="btn btn-primary btn-xs" title="Tambah Stok & Anggaran"><i
                                                class="fa fa-pencil-alt"></i></a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>