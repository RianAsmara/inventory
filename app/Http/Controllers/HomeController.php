<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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

    public function generatePDF()
    {
        $data = ['title' => 'Welcome to belajarphp.net'];

        $pdf = PDF::loadView('/laporan/laporan', $data)
            ->setPaper('a3', 'portrait');
        // return $pdf->download('laporan-pdf.pdf');
        return $pdf->stream();
        // return view('./laporan/laporan');
    }
}
