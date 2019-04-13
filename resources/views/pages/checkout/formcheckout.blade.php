@extends('layouts.index')
@section('title','Form Checkout')
@section('content')
<div class="col">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Checkout</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">Jenis</label>
                        <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                                <input type="radio" name="jenis" id="jenis" value="makanan" class="selectgroup-input"
                                    required>
                                <span class="selectgroup-button"><i class="fa fa-cookie"></i> Makanan</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="jenis" id="jenis" value="bumbu" class="selectgroup-input"
                                    required>
                                <span class="selectgroup-button"><i class="fa fa-bong"></i> Bumbu</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pilih Bahan</label>
                        <div class="select2-input">
                            <select id="basic" name="master_barang_id" class="form-control" disabled required>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="" class="btn btn-success btn-sm">Tambah Ke Keranjang</a>
            <a href="" class="btn btn-danger btn-sm">Reset</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-head-bg-primary mt-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Bahan Makanan</th>
                            <th>Jumlah Pakai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>
                                <a href=""
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data makanan ini?')"
                                    class="btn btn-danger btn-xs" title="Hapus Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="" class="btn btn-success btn-sm">Simpan</a>
        </div>
    </div>
</div>
@endsection

@section('inline-js')
<script type="text/javascript">
    $('#datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
    });
    $('#basic').select2({
        theme: "bootstrap"
    });

    $(document).ready(function () {
        var selectHtml = '';
        $('.selectgroup input[type=radio]').on('click', function () {
            selectHtml = '';
            var radioValue = $("input[name='jenis']:checked").val();
            if (radioValue) {
                $.ajax({
                    dataType: 'JSON',
                    type: 'GET',
                    url: '{{URL::to(' / penerimaan / get - barang / ')}}' + '/' + radioValue,
                    beforeSend: function () {
                        $('#basic').prop('disabled', true);
                        $('#basic').html(
                            '<option value="" selected disabled>Loading...</option>');
                    },
                }).done(function (data) {
                    $('#basic').html('');
                    selectHtml = '<option value="" selected disabled>Pilih Bahan</option>';
                    for (i = 0; i < data.length; i++) {
                        selectHtml += '<option value="' + data[i].id + '">' + data[i]
                            .nama_barang + ' (' + data[i].satuan + ')</option>';
                    }
                    $('#basic').prop('disabled', false);
                    $('#basic').append(selectHtml);
                })
            }
        });


    })

</script>

@endsection
