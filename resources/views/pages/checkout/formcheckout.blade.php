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
                            <label>Tanggal Masuk</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="datepicker" name="tanggal_checkout">
                                     {{-- value="{{date('d/m/Y')}}"> --}}
                                <div class="input-group-append">
										<span class="input-group-text">
											<i class="fa fa-calendar-check"></i>
										</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jenis</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                    <input type="radio" name="jenis" id="jenis" value="makanan"
                                           class="selectgroup-input"
                                           required>
                                    <span class="selectgroup-button"><i class="fa fa-cookie"></i> Makanan</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="jenis" id="jenis" value="bumbu"
                                           class="selectgroup-input"
                                           required>
                                    <span class="selectgroup-button"><i class="fa fa-bong"></i> Bumbu</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Pilih Bahan</label>
                            <div class="select2-input">
                                <select id="basic" name="master_barang_id" class="form-control" disabled required>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-sm" onclick="addToCart()">Tambah Ke Keranjang</button>
                <button class="btn btn-danger btn-sm" onclick="resetVal()">Reset</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-bg-primary mt-4">
                        <thead>
                        <tr>
                            <th>Nama Bahan Makanan</th>
                            <th>Jumlah Pakai</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody id="t-body">

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer">
                <form action="{{route('checkout.save')}}" method="POST">
                    {{csrf_field()}}
                    <div id="hidden-input">

                    </div>
                    <button type="submit" id="simpan_checkout" class="btn btn-success btn-sm">Simpan Checkout</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('inline-js')
    <script type="text/javascript">
        $(function () {
            var d = new Date();
            var month = d.getMonth();
            var year = d.getFullYear();
            var date = d.getDate();

            $('#datepicker').datetimepicker(
                {
                    format: 'DD/MM/YYYY',
                },
            );
            // $('#datepicker').val((date < 10 ? '0' : '') + date + '/' + (month < 10 ? '0' : '') + month + '/' + year);

            if ($('#hidden-input').children().length == 0){
                $('#simpan_checkout').attr('disabled', true);
            } else{
                $('#simpan_checkout').prop('disabled', false);
            }
        })

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
                        url: '{{URL::to('/penerimaan/get-barang/')}}' + '/' + radioValue,
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
        var checkout = [];
        var no = 1;

        function addToCart() {
            if ($('#basic').val() == '' || $('#jumlah').val() == '') {
                swal('Perhatian!', 'Inputan belum lengkap', 'warning');
            } else {
                var barang_id = $('#basic').val();
                var nama_barang = $('#basic option:selected').text();
                var jumlah = $('#jumlah').val();
                var tanggal = $('#datepicker').val();
                var html = '';
                var input = '';
                html += '<tr id= "row' + no + '">\n' +
                    '                            <td>' + nama_barang + '</td>\n' +
                    '                            <td>' + jumlah + '</td>\n' +
                    '                            <td>\n' +
                    '                                <button class="btn btn-danger btn-xs" title="Hapus Data" onclick="deleteItem(' + no + ')"><i class="fa fa-trash"></i></button >\n' +
                    '                            </td>\n' +
                    '                        </tr>';
                input += '<input type="hidden" name="tanggal_checkout[]" value="' + tanggal + '" id="tanggal_checkout'+no+'"><input type="hidden" name="master_barang_id[]" value="' + barang_id + '" id="barang'+no+'"><input type="hidden" name="jumlah[]" value="' + jumlah + '" id="jumlah'+no+'">';
            }
            $('#t-body').append(html);
            $('#hidden-input').append(input);
            no++;
            if ($('#hidden-input').children().length == 0){
                $('#simpan_checkout').attr('disabled', true);
            } else{
                $('#simpan_checkout').prop('disabled', false);
            }
        }

        function deleteItem(row) {
            var con = swal({
                title : 'Konfirmasi',
                text : 'Anda yakin akan menghapus data?',
                icon : 'warning',
                buttons :  true,
                dangerMode: true
            }).then((willDelete)=> {
                if (willDelete){
                    $('#row' + row + '').remove();
                    $('#barang' + row + '').remove();
                    $('#jumlah' + row + '').remove();
                    if ($('#hidden-input').children().length == 0){
                        $('#simpan_checkout').attr('disabled', true);
                    } else{
                        $('#simpan_checkout').prop('disabled', false);
                    }
                    swal('Data checkout terhapus!', {
                        icon: 'success',
                    })
                }
            });

        }

        function resetVal() {
            $('#basic').prop('disabled', true);
            $('#basic').html(
                '');
            $('#jumlah').val('');
        }

    </script>

@endsection
