@extends('layouts.index')
@section('title','Cetak Laporan')
@section('content')
<<<<<<< HEAD
    <div class="page-inner">
        <div class="row">
            <div class="col">
                <div class="card p-3">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Generate Laporan</div>
                        </div>
                    </div>
                    <form action="{{route('cetak')}}" method="POST">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis</label>
                                        <select class="form-control" name="jenis" required>
                                            <option value="makanan">Makanan</option>
                                            <option value="bumbu">Bumbu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select class="form-control" name="bulan" required>
                                            <option value="01" {{date('m') == "01" ? "selected" : ""}}>Januari</option>
                                            <option value="02" {{date('m') == "02" ? "selected" : ""}}>Februari</option>
                                            <option value="03" {{date('m') == "03" ? "selected" : ""}}>Maret</option>
                                            <option value="04" {{date('m') == "04" ? "selected" : ""}}>April</option>
                                            <option value="05" {{date('m') == "05" ? "selected" : ""}}>Mei</option>
                                            <option value="06" {{date('m') == "06" ? "selected" : ""}}>Juni</option>
                                            <option value="07" {{date('m') == "07" ? "selected" : ""}}>Juli</option>
                                            <option value="08" {{date('m') == "08" ? "selected" : ""}}>Agustus</option>
                                            <option value="09" {{date('m') == "09" ? "selected" : ""}}>September
                                            </option>
                                            <option value="10" {{date('m') == "10" ? "selected" : ""}}>Oktober</option>
                                            <option value="11" {{date('m') == "11" ? "selected" : ""}}>Novemer</option>
                                            <option value="12" {{date('m') == "12" ? "selected" : ""}}>Desember</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select class="form-control" name="tahun" required>
                                            <option value="2000" {{date('Y') == "2000" ? "selected" : ""}}>2000</option>
                                            <option value="2001" {{date('Y') == "2001" ? "selected" : ""}}>2001</option>
                                            <option value="2002" {{date('Y') == "2002" ? "selected" : ""}}>2002</option>
                                            <option value="2003" {{date('Y') == "2003" ? "selected" : ""}}>2003</option>
                                            <option value="2004" {{date('Y') == "2004" ? "selected" : ""}}>2004</option>
                                            <option value="2005" {{date('Y') == "2005" ? "selected" : ""}}>2005</option>
                                            <option value="2006" {{date('Y') == "2006" ? "selected" : ""}}>2006</option>
                                            <option value="2007" {{date('Y') == "2007" ? "selected" : ""}}>2007</option>
                                            <option value="2008" {{date('Y') == "2008" ? "selected" : ""}}>2008</option>
                                            <option value="2009" {{date('Y') == "2009" ? "selected" : ""}}>2009</option>
                                            <option value="2010" {{date('Y') == "2010" ? "selected" : ""}}>2010</option>
                                            <option value="2011" {{date('Y') == "2011" ? "selected" : ""}}>2011</option>
                                            <option value="2012" {{date('Y') == "2012" ? "selected" : ""}}>2012</option>
                                            <option value="2013" {{date('Y') == "2013" ? "selected" : ""}}>2013</option>
                                            <option value="2014" {{date('Y') == "2014" ? "selected" : ""}}>2014</option>
                                            <option value="2015" {{date('Y') == "2015" ? "selected" : ""}}>2015</option>
                                            <option value="2016" {{date('Y') == "2016" ? "selected" : ""}}>2016</option>
                                            <option value="2017" {{date('Y') == "2017" ? "selected" : ""}}>2017</option>
                                            <option value="2018" {{date('Y') == "2018" ? "selected" : ""}}>2018</option>
                                            <option value="2019" {{date('Y') == "2019" ? "selected" : ""}}>2019</option>
                                            <option value="2020" {{date('Y') == "2020" ? "selected" : ""}}>2020</option>
                                            <option value="2021" {{date('Y') == "2021" ? "selected" : ""}}>2021</option>
                                            <option value="2022" {{date('Y') == "2022" ? "selected" : ""}}>2022</option>
                                            <option value="2023" {{date('Y') == "2023" ? "selected" : ""}}>2023</option>
                                            <option value="2024" {{date('Y') == "2024" ? "selected" : ""}}>2024</option>
                                            <option value="2025" {{date('Y') == "2025" ? "selected" : ""}}>2025</option>
                                            <option value="2026" {{date('Y') == "2026" ? "selected" : ""}}>2026</option>
                                            <option value="2027" {{date('Y') == "2027" ? "selected" : ""}}>2027</option>
                                            <option value="2028" {{date('Y') == "2028" ? "selected" : ""}}>2028</option>
                                            <option value="2029" {{date('Y') == "2029" ? "selected" : ""}}>2029</option>
                                            <option value="2030" {{date('Y') == "2030" ? "selected" : ""}}>2030</option>
                                            <option value="2031" {{date('Y') == "2031" ? "selected" : ""}}>2031</option>
                                            <option value="2032" {{date('Y') == "2032" ? "selected" : ""}}>2032</option>
                                            <option value="2033" {{date('Y') == "2033" ? "selected" : ""}}>2033</option>
                                            <option value="2034" {{date('Y') == "2034" ? "selected" : ""}}>2034</option>
                                            <option value="2035" {{date('Y') == "2035" ? "selected" : ""}}>2035</option>
                                            <option value="2036" {{date('Y') == "2036" ? "selected" : ""}}>2036</option>
                                            <option value="2037" {{date('Y') == "2037" ? "selected" : ""}}>2037</option>
                                            <option value="2038" {{date('Y') == "2038" ? "selected" : ""}}>2038</option>
                                            <option value="2039" {{date('Y') == "2039" ? "selected" : ""}}>2039</option>
                                            <option value="2040" {{date('Y') == "2040" ? "selected" : ""}}>2040</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
=======
<div class="page-inner">
    <div class="row">
        <div class="col">
            <div class="card p-3">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Cetak Laporan</div>
                    </div>
                </div>
                <form action="{{route('cetak')}}" method="POST">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" name="jenis" required>
                                        <option value="makanan">Makanan</option>
                                        <option value="bumbu">Bumbu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Bulan</label>
                                    <select class="form-control" name="bulan" required>
                                        <option value="01" {{date('m') == "01" ? "selected" : ""}}>Januari</option>
                                        <option value="02" {{date('m') == "02" ? "selected" : ""}}>Februari</option>
                                        <option value="03" {{date('m') == "03" ? "selected" : ""}}>Maret</option>
                                        <option value="04" {{date('m') == "04" ? "selected" : ""}}>April</option>
                                        <option value="05" {{date('m') == "05" ? "selected" : ""}}>Mei</option>
                                        <option value="06" {{date('m') == "06" ? "selected" : ""}}>Juni</option>
                                        <option value="07" {{date('m') == "07" ? "selected" : ""}}>Juli</option>
                                        <option value="08" {{date('m') == "08" ? "selected" : ""}}>Agustus</option>
                                        <option value="09" {{date('m') == "09" ? "selected" : ""}}>September
                                        </option>
                                        <option value="10" {{date('m') == "10" ? "selected" : ""}}>Oktober</option>
                                        <option value="11" {{date('m') == "11" ? "selected" : ""}}>Novemer</option>
                                        <option value="12" {{date('m') == "12" ? "selected" : ""}}>Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <select class="form-control" name="tahun" required>
                                        <option value="2000" {{date('Y') == "2000" ? "selected" : ""}}>2000</option>
                                        <option value="2001" {{date('Y') == "2001" ? "selected" : ""}}>2001</option>
                                        <option value="2002" {{date('Y') == "2002" ? "selected" : ""}}>2002</option>
                                        <option value="2003" {{date('Y') == "2003" ? "selected" : ""}}>2003</option>
                                        <option value="2004" {{date('Y') == "2004" ? "selected" : ""}}>2004</option>
                                        <option value="2005" {{date('Y') == "2005" ? "selected" : ""}}>2005</option>
                                        <option value="2006" {{date('Y') == "2006" ? "selected" : ""}}>2006</option>
                                        <option value="2007" {{date('Y') == "2007" ? "selected" : ""}}>2007</option>
                                        <option value="2008" {{date('Y') == "2008" ? "selected" : ""}}>2008</option>
                                        <option value="2009" {{date('Y') == "2009" ? "selected" : ""}}>2009</option>
                                        <option value="2010" {{date('Y') == "2010" ? "selected" : ""}}>2010</option>
                                        <option value="2011" {{date('Y') == "2011" ? "selected" : ""}}>2011</option>
                                        <option value="2012" {{date('Y') == "2012" ? "selected" : ""}}>2012</option>
                                        <option value="2013" {{date('Y') == "2013" ? "selected" : ""}}>2013</option>
                                        <option value="2014" {{date('Y') == "2014" ? "selected" : ""}}>2014</option>
                                        <option value="2015" {{date('Y') == "2015" ? "selected" : ""}}>2015</option>
                                        <option value="2016" {{date('Y') == "2016" ? "selected" : ""}}>2016</option>
                                        <option value="2017" {{date('Y') == "2017" ? "selected" : ""}}>2017</option>
                                        <option value="2018" {{date('Y') == "2018" ? "selected" : ""}}>2018</option>
                                        <option value="2019" {{date('Y') == "2019" ? "selected" : ""}}>2019</option>
                                        <option value="2020" {{date('Y') == "2020" ? "selected" : ""}}>2020</option>
                                        <option value="2021" {{date('Y') == "2021" ? "selected" : ""}}>2021</option>
                                        <option value="2022" {{date('Y') == "2022" ? "selected" : ""}}>2022</option>
                                        <option value="2023" {{date('Y') == "2023" ? "selected" : ""}}>2023</option>
                                        <option value="2024" {{date('Y') == "2024" ? "selected" : ""}}>2024</option>
                                        <option value="2025" {{date('Y') == "2025" ? "selected" : ""}}>2025</option>
                                        <option value="2026" {{date('Y') == "2026" ? "selected" : ""}}>2026</option>
                                        <option value="2027" {{date('Y') == "2027" ? "selected" : ""}}>2027</option>
                                        <option value="2028" {{date('Y') == "2028" ? "selected" : ""}}>2028</option>
                                        <option value="2029" {{date('Y') == "2029" ? "selected" : ""}}>2029</option>
                                        <option value="2030" {{date('Y') == "2030" ? "selected" : ""}}>2030</option>
                                        <option value="2031" {{date('Y') == "2031" ? "selected" : ""}}>2031</option>
                                        <option value="2032" {{date('Y') == "2032" ? "selected" : ""}}>2032</option>
                                        <option value="2033" {{date('Y') == "2033" ? "selected" : ""}}>2033</option>
                                        <option value="2034" {{date('Y') == "2034" ? "selected" : ""}}>2034</option>
                                        <option value="2035" {{date('Y') == "2035" ? "selected" : ""}}>2035</option>
                                        <option value="2036" {{date('Y') == "2036" ? "selected" : ""}}>2036</option>
                                        <option value="2037" {{date('Y') == "2037" ? "selected" : ""}}>2037</option>
                                        <option value="2038" {{date('Y') == "2038" ? "selected" : ""}}>2038</option>
                                        <option value="2039" {{date('Y') == "2039" ? "selected" : ""}}>2039</option>
                                        <option value="2040" {{date('Y') == "2040" ? "selected" : ""}}>2040</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
>>>>>>> 4cea0c234e0ea3b076f0641688cfa7287af461a2
@endsection
