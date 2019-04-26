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
<<<<<<< HEAD
     public function index()
     {
         return view('laporan.index');
     }

    public function cetakLaporan(Request $request)
    {
=======
    public function index()
    {
        return view('laporan.index');
    }

    public function cetakLaporan(Request $request)
    {
>>>>>>> 4cea0c234e0ea3b076f0641688cfa7287af461a2
        $jenis = $request->jenis;
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $kategori = DB::select('select kategori from master_barangs group by kategori order by kategori asc');
        $pdf = PDF::loadView('laporan/laporan', compact('kategori', 'jenis', 'bulan', 'tahun'))
            ->setPaper('legal', 'landscape');
<<<<<<< HEAD
         return $pdf->download('laporan-pdf.pdf');
         return $pdf->stream();
//        return view('laporan/laporan', compact('kategori', 'jenis', 'bulan', 'tahun'));
=======
        return $pdf->download('laporan ' . $jenis . ' bulan ' . $bulan . ' tahun ' . $tahun . '.pdf');
        return $pdf->stream();
//                return view('laporan/laporan', compact('kategori', 'jenis', 'bulan', 'tahun'));
>>>>>>> 4cea0c234e0ea3b076f0641688cfa7287af461a2
    }
}
