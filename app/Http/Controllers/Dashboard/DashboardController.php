<?php

namespace App\Http\Controllers\Dashboard;

use App\MasterBarang;
use App\StokAkhir;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now();
        $day = $date->day;
        $month = $date->month;
        $year = $date->year;
        if ($day < 10){
            $day = '0'.$day;
        }
        $previous_month = 0;
        if ($month == '01'){
            $previous_month = '12';
        }else{
            if ($month < 10){
                $previous_month = '0'.$month;
            }else{
                $previous_month = $month;
            }
        }

        if ($day == '01') {
            $master_barang = MasterBarang::get();
            foreach ($master_barang as $barang){
                $data = StokAkhir::where('bulan', '=', $previous_month)->where('tahun', '=', $year)->where('master_barang_id', '=', $barang->id)->get();
                if (count($data) == 0){
                    StokAkhir::create([
                        'bulan' => $previous_month,
                        'tahun' => $year,
                        'stok_akhir' => $barang->stok,
                        'master_barang_id' => $barang->id
                    ]);
                }
            }
            $makananCount = MasterBarang::where('jenis', '=', 'makanan')->count();
            $bumbuCount = MasterBarang::where('jenis', '=', 'bumbu')->count();
            return view('pages.dashboard.content', compact('makananCount', 'bumbuCount'));
        } else {
            $makananCount = MasterBarang::where('jenis', '=', 'makanan')->count();
            $bumbuCount = MasterBarang::where('jenis', '=', 'bumbu')->count();
            return view('pages.dashboard.content', compact('makananCount', 'bumbuCount'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
