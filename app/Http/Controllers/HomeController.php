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
    // public function index()
    // {
    //     return view('home');
    // }

    public function cetakLaporan()
    {
        $kategori = DB::select('select kategori from master_barangs group by kategori');


        $pdf = PDF::loadView('laporan/laporan', compact('kategori'))
            ->setPaper('legal', 'portrait');
        // return $pdf->download('laporan-pdf.pdf');
        // return $pdf->stream();
        return view('laporan/laporan', compact('kategori'));

    }
}
