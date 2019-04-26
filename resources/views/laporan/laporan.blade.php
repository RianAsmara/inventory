<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000;
            /* text-align: left; */
            /* padding: 1px; */
            font-size: 14px;
        }

        /* body {
            background: rgb(204, 204, 204);
        } */

        /* page {
            background: white;
            display: block;
            margin: 0 auto; */
        /* margin-bottom: 0.5cm; */
        /* box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5); */
        /* padding: 1cm 1cm 1cm 1cm;
        } */

        /* page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        }

        page[size="A3"] {
            width: 29.7cm;
            height: 42cm;
        }

        page[size="A3"][layout="landscape"] {
            width: 42cm;
            height: 29.7cm;
        }

        @media print {

            body,
            page {
                margin: 0;
                box-shadow: 0;
            }
        } */
    </style>
</head>

<body>
<!-- <page size="A3"> -->
<div class="row">
    <h4>DAFTAR : LAPORAN PENGELUARAN BAHAN {{$jenis == 'makanan' ? 'MAKANAN' : 'BUMBU'}} KERING INSTALASI GIZI</h4>
    @if($bulan == '01')
        <h4>BULAN : JANUARI {{$tahun}}</h4>
    @elseif($bulan == '02')
        <h4>BULAN : FEBRUARI {{$tahun}}</h4>
    @elseif($bulan == '03')
        <h4>BULAN : MARET {{$tahun}}</h4>
    @elseif($bulan == '04')
        <h4>BULAN : APRIL {{$tahun}}</h4>
    @elseif($bulan == '05')
        <h4>BULAN : MEI {{$tahun}}</h4>
    @elseif($bulan == '06')
        <h4>BULAN : JUNI {{$tahun}}</h4>
    @elseif($bulan == '07')
        <h4>BULAN : JULI {{$tahun}}</h4>
    @elseif($bulan == '08')
        <h4>BULAN : AGUSTUS {{$tahun}}</h4>
    @elseif($bulan == '09')
        <h4>BULAN : SEPTEMBER{{$tahun}}</h4>
    @elseif($bulan == '10')
        <h4>BULAN : OKTOBER {{$tahun}}</h4>
    @elseif($bulan == '11')
        <h4>BULAN : NOVEMBER {{$tahun}}</h4>
    @elseif($bulan == '12')
        <h4>BULAN : DESEMBER {{$tahun}}</h4>
    @endif
</div>
<div class="row">
    <table border="1" width="100%">
        <tr style="text-align:center">
            <th rowspan="2">No</th>
            <th rowspan="2">Bahan</th>
            <th rowspan="2">Sat.</th>
            <th rowspan="2" style="width: 100px">Sisa Bln Lalu</th>
            <th rowspan="2" style="width: 80px">Penerimaan Bln Ini</th>
            <th colspan="31" style="text-align:center">Tanggal</th>
            <th rowspan="2">Jml</th>
            <th rowspan="2" style="width: 50px">Jml Pakai</th>
            <th rowspan="2">Sisa</th>
        </tr>
        <tr style="text-align:center; font-weight: bold;">
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
        </tr>
        @foreach($kategori as $k)
            @php
                $data = DB::table('checkouts')
                         ->join('master_barangs', 'checkouts.master_barang_id', '=', 'master_barangs.id')
                         ->select('checkouts.id', 'checkouts.tanggal_checkout', 'master_barangs.nama_barang', 'master_barangs.satuan', 'master_barangs.id as barang_id')
                         ->whereRaw('SUBSTRING(checkouts.tanggal_checkout, 4, 2) ='. $bulan)
                         ->where('master_barangs.jenis', '=', $jenis)
                         ->where('master_barangs.kategori', '=', $k->kategori)
                         ->groupby('checkouts.master_barang_id')->get();
            @endphp
            <tr>
                <td colspan="39" style="background: #e7eaf6; font-weight:bold; padding-left:10px;">{{$k->kategori}}.
                    Beras/Ketan/Mie/Jagung
                    DLL
                </td>
            </tr>
            @foreach($data as $d)
                <tr style="text-align:center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$d->nama_barang}}</td>
                    <td>{{$d->satuan}}</td>
                    @php
                        if ($bulan == 12){
                            $bulan_lalu = 01;
                        }else{
                            $bulan_lalu = $bulan - 01;
                        }
                        $stok_akhir = DB::table('stok_akhirs')
                                        ->join('master_barangs', 'stok_akhirs.master_barang_id', '=', 'master_barangs.id')
                                        ->select('stok_akhir')
                                        ->where('bulan', '=', $bulan_lalu)
                                        ->where('tahun', '=', '2019')
                                        ->where('master_barangs.kategori', '=', $k->kategori)
                                        ->first();
                        $penerimaan = DB::table('penerimaans')
                                        ->join('master_barangs', 'penerimaans.master_barang_id', '=', 'master_barangs.id')
                                        ->select('jumlah')
                                        ->whereRaw('SUBSTRING(penerimaans.tanggal_masuk, 4, 2) = '.$bulan)
                                        ->where('master_barangs.kategori', '=', $k->kategori)
                                        ->first();
                        $checkouts = DB::table('checkouts')
                                        ->select('jumlah')
                                        ->where('master_barang_id', '=', $d->barang_id)
                                        ->whereRaw('SUBSTRING(checkouts.tanggal_checkout, 4, 2) = '.$bulan)
                                        ->orderBy('tanggal_checkout', 'asc')
                                        ->get();
                    @endphp
                    <td>{{$stok_akhir ? $stok_akhir->stok_akhir : '-'}}</td>
                    <td>{{$penerimaan ? $penerimaan->jumlah : '-'}}</td>
                    @if(count($checkouts) < 31)
                        @foreach($checkouts as $c)
                            <td>{{$c->jumlah}}</td>
                        @endforeach
                        @for($i=0; $i < (31 - count($checkouts)); $i++)
                            <td>-</td>
                        @endfor
                    @else
                        @foreach($checkouts as $c)
                            <td>{{$c->jumlah}}</td>
                        @endforeach
                    @endif
                    <td></td>
                    @php
                        $stok = $stok_akhir ? $stok_akhir->stok_akhir : 0;
                        $terima = $penerimaan ? $penerimaan->jumlah : 0;
                        $jumlah = $stok + $terima;
                        $pakai = \App\Checkout::where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->where('master_barang_id', '=', $d->barang_id)->orderBy('tanggal_checkout', 'asc')->sum('jumlah');
                        $sisa = (int)$jumlah - (int)$pakai;
                    @endphp
                    <td>{{$pakai}}</td>
                    <td>{{$sisa}}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
</div>
<!-- </page> -->
</body>

</html>
