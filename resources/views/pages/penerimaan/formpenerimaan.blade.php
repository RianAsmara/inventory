@extends('layouts.index')
@section('title','MakananController')
@section('content')

    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Form Bahan Makanan/Bumbu Masuk</div>
                    <div class="card-tools">
                        <a href="{{route('penerimaan.index')}}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-arrow-left"></i>
                                </span>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{route('penerimaan.save')}}" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker" name="tanggal_masuk">
                                    <div class="input-group-append">
										<span class="input-group-text">
											<i class="fa fa-calendar-check"></i>
										</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Supplier</label>
                                <input type="text" class="form-control" name="nama_supplier" required>
                            </div>
                            <div class="form-group">
                                <label>Anggaran</label>
                                <input type="text" class="form-control" name="anggaran" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jenis" id="jenis" value="makanan" class="selectgroup-input" required>
                                        <span class="selectgroup-button"><i class="fa fa-cookie"></i> Makanan</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jenis" id="jenis" value="bumbu" class="selectgroup-input" required>
                                        <span class="selectgroup-button"><i class="fa fa-bong"></i> Bumbu</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
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
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                </div>
            </form>
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
            var selectHtml= '';
            $('.selectgroup input[type=radio]').on('click', function () {
                selectHtml = '';
                var radioValue = $("input[name='jenis']:checked").val();
                if(radioValue){
                    $.ajax({
                        dataType: 'JSON',
                        type: 'GET',
                        url: '{{URL::to('/penerimaan/get-barang/')}}'+'/'+radioValue,
                        beforeSend: function(){
                            $('#basic').prop('disabled', true);
                            $('#basic').html('<option value="" selected disabled>Loading...</option>');
                        },
                    }).done(function (data) {
                        $('#basic').html('');
                        selectHtml = '<option value="" selected disabled>Pilih Bahan</option>';
                        for (i=0; i< data.length;i++){
                            selectHtml += '<option value="'+data[i].id+'">'+data[i].nama_barang+' ('+data[i].satuan+')</option>';
                        }
                        $('#basic').prop('disabled', false);
                        $('#basic').append(selectHtml);
                    })
                }
            });


        })
    </script>

@endsection


