<?php

namespace App\Http\Controllers;

use App\Checkout;
use Illuminate\Http\Request;
use App\MasterBarang;
use Illuminate\Support\Facades\DB;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {
         return view('laporan.index');
     }

    public function cetakLaporan(Request $request)
    {
        $jenis = $request->jenis;
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $kategori = DB::select('select kategori from master_barangs group by kategori order by kategori asc');
        $pdf = PDF::loadView('laporan/laporan', compact('kategori', 'jenis', 'bulan', 'tahun'))
            ->setPaper('legal', 'landscape');
         return $pdf->download('laporan-pdf.pdf');
         return $pdf->stream();
//        return view('laporan/laporan', compact('kategori', 'jenis', 'bulan', 'tahun'));
    }
}
