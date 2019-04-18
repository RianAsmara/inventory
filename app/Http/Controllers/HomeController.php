<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterBarang;
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
        $data = Checkout::with('master_barang')->where('tanggal_checkout', '=', date('d/m/Y'))->get();

        $pdf = PDF::loadView('/laporan/laporan', $data)
            ->setPaper('legal', 'portrait');
        // return $pdf->download('laporan-pdf.pdf');
        // return $pdf->stream();
        return view('./laporan/laporan');
    }
}
