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
    <h4>DAFTAR : LAPORAN PENGELUARAN BAHAN MAKANAN KERING INSTALASI GIZI</h4>
    <h4>BULAN : DESEMBER 2018</h4>
</div>
<div class="row">
    <table border="1" width="100%">
        <tr style="text-align:center">
            <th rowspan="2">No</th>
            <th rowspan="2">Bahan</th>
            <th rowspan="2">Sat.</th>
            <th rowspan="2">Sisa Bln Lalu</th>
            <th rowspan="2">Penerimaan Bln Ini</th>
            <th colspan="31" style="text-align:center">Tanggal</th>
            <th rowspan="2">Jml</th>
            <th rowspan="2">Jml Pakai</th>
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
        @foreach($kategori as $d)
            @if($d->kategori == 'A')
                @php
                    $data = \App\MasterBarang::with(['checkout' => function ($q){$q->where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->orderBy('tanggal_checkout');}])->where('kategori', '=', 'A')->where('jenis', '=', 'makanan')->get();
                @endphp
                <tr>
                    <td colspan="39" style="background: #e7eaf6; font-weight:bold; padding-left:10px;">A.
                        Beras/Ketan/Mie/Jagung
                        DLL
                    </td>
                </tr>
                @foreach($data as $d)
                    <tr style="text-align:center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$d->nama_barang}}</td>
                    <td>{{$d->satuan}}</td>
                    <td>320</td>
                        @php
                            $pener = \App\Penerimaan::with(['master_barang' => function ($q){$q->where('id', '=', '1');}])->where(DB::raw("SUBSTRING(tanggal_masuk, 4, 2)"), '=', '04')->first();
                        @endphp
                    <td>{{'000'}}</td>
                        @php
                            $checkouts = \App\Checkout::where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->where('master_barang_id', '=', $d->id)->orderBy('tanggal_checkout', 'asc')->get();
                        @endphp
                        @foreach($checkouts as $c)
                            <td>{{$c->jumlah}}</td>
                        @endforeach
                        <td>11</td>
                        <td>{{\App\Checkout::where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->where('master_barang_id', '=', $d->id)->orderBy('tanggal_checkout', 'asc')->sum('jumlah')}}</td>
                        <td>11</td>
                    </tr>
                @endforeach
            @elseif($d->kategori == 'B')
                @php
                    $data = \App\MasterBarang::with(['checkout' => function ($q){$q->where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->orderBy('tanggal_checkout');}])->where('kategori', '=', 'B')->where('jenis', '=', 'makanan')->get();

                @endphp
                <tr>
                    <td colspan="39" style="background: #e7eaf6; font-weight:bold; padding-left:10px;">B.
                        Ini B
                    </td>
                </tr>
                @foreach($data as $d)
                    <tr style="text-align:center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->nama_barang}}</td>
                        <td>{{$d->satuan}}</td>
                        <td>320</td>
                        <td>2500</td>
                        @php
                            $checkouts = \App\Checkout::where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->where('master_barang_id', '=', $d->id)->orderBy('tanggal_checkout', 'asc')->get();
                        @endphp
                        @foreach($checkouts as $c)
                            <td>{{$c->jumlah}}</td>
                        @endforeach
                    </tr>
                @endforeach
            @elseif($d->kategori == 'C')
                @php
                    $data = \App\MasterBarang::with(['checkout' => function ($q){$q->where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->orderBy('tanggal_checkout');}])->where('kategori', '=', 'C')->where('jenis', '=', 'makanan')->get();

                @endphp
                <tr>
                    <td colspan="39" style="background: #e7eaf6; font-weight:bold; padding-left:10px;">C.
                        Ini C
                    </td>
                </tr>
                @foreach($data as $d)
                    <tr style="text-align:center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->nama_barang}}</td>
                        <td>{{$d->satuan}}</td>
                        <td>320</td>
                        <td>2500</td>
                        @php
                            $checkouts = \App\Checkout::where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->where('master_barang_id', '=', $d->id)->orderBy('tanggal_checkout', 'asc')->get();
                        @endphp
                        @foreach($checkouts as $c)
                            <td>{{$c->jumlah}}</td>
                        @endforeach
                    </tr>
                @endforeach
            @elseif($d->kategori == 'D')
                @php
                    $data = \App\MasterBarang::with(['checkout' => function ($q){$q->where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->orderBy('tanggal_checkout');}])->where('kategori', '=', 'D')->where('jenis', '=', 'makanan')->get();

                @endphp
                <tr>
                    <td colspan="39" style="background: #e7eaf6; font-weight:bold; padding-left:10px;">D.
                        Ini D
                    </td>
                </tr>
                @foreach($data as $d)
                    <tr style="text-align:center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->nama_barang}}</td>
                        <td>{{$d->satuan}}</td>
                        <td>320</td>
                        <td>2500</td>
                        @php
                            $checkouts = \App\Checkout::where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->where('master_barang_id', '=', $d->id)->orderBy('tanggal_checkout', 'asc')->get();
                        @endphp
                        @foreach($checkouts as $c)
                            <td>{{$c->jumlah}}</td>
                        @endforeach
                    </tr>
                @endforeach
            @elseif($d->kategori == 'E')
                @php
                    $data = \App\MasterBarang::with(['checkout' => function ($q){$q->where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->orderBy('tanggal_checkout');}])->where('kategori', '=', 'E')->where('jenis', '=', 'makanan')->get();
                @endphp
                <tr>
                    <td colspan="39" style="background: #e7eaf6; font-weight:bold; padding-left:10px;">E.
                        Ini E
                    </td>
                </tr>
                @foreach($data as $d)
                    <tr style="text-align:center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->nama_barang}}</td>
                        <td>{{$d->satuan}}</td>
                        <td>320</td>
                        <td>2500</td>
                        @php
                            $checkouts = \App\Checkout::where(DB::raw("SUBSTRING(tanggal_checkout, 4, 2)"), '=', '04')->where('master_barang_id', '=', $d->id)->orderBy('tanggal_checkout', 'asc')->get();
                        @endphp
                        @foreach($checkouts as $c)
                            <td>{{$c->jumlah}}</td>
                        @endforeach
                    </tr>
                @endforeach
            @endif
        @endforeach
        {{--<tr style="text-align:center">--}}
        {{--<td>1</td>--}}
        {{--<td>Beras C4</td>--}}
        {{--<td>Kg</td>--}}
        {{--<td>320</td>--}}
        {{--<td>2500</td>--}}
        {{--<td>11</td>--}}
        {{--<td>22</td>--}}
        {{--<td>33</td>--}}
        {{--<td>44</td>--}}
        {{--<td>55</td>--}}
        {{--<td>66</td>--}}
        {{--<td>77</td>--}}
        {{--<td>88</td>--}}
        {{--<td>99</td>--}}
        {{--<td>100</td>--}}
        {{--<td>11</td>--}}
        {{--<td>22</td>--}}
        {{--<td>33</td>--}}
        {{--<td>44</td>--}}
        {{--<td>55</td>--}}
        {{--<td>66</td>--}}
        {{--<td>77</td>--}}
        {{--<td>88</td>--}}
        {{--<td>99</td>--}}
        {{--<td>100</td>--}}
        {{--<td>11</td>--}}
        {{--<td>22</td>--}}
        {{--<td>33</td>--}}
        {{--<td>44</td>--}}
        {{--<td>55</td>--}}
        {{--<td>66</td>--}}
        {{--<td>77</td>--}}
        {{--<td>88</td>--}}
        {{--<td>99</td>--}}
        {{--<td>100</td>--}}
        {{--<td>100</td>--}}
        {{--<td>11</td>--}}
        {{--<td>11</td>--}}
        {{--<td>11</td>--}}
        </tr>
    </table>
</div>
<!-- </page> -->
</body>

</html>
