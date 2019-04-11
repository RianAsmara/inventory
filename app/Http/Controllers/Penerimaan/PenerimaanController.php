<?php

namespace App\Http\Controllers\Penerimaan;

use App\MasterBarang;
use App\Penerimaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerimaans = Penerimaan::with('master_barang')->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.penerimaan.penerimaan', compact('penerimaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.penerimaan.formpenerimaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = Penerimaan::create([
            'tanggal_masuk' => $request->tanggal_masuk,
            'supplier' => $request->nama_supplier,
            'anggaran' => $request->anggaran,
            'jumlah' => $request->jumlah,
            'master_barang_id' => $request->master_barang_id,
        ]);

        if ($status){
            $master = MasterBarang::find($request->master_barang_id);
            $master->stok = $master->stok + $request->jumlah;
            $master->save();
            session()->put('success','Data penerimaan berhasil ditambahkan.');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MasterBarang $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterBarang $master)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterBarang $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterBarang $master)
    {
        //
    }

    public function getBarang($param){
        $barang = MasterBarang::where('jenis', '=', $param)->get();
        return response()->json($barang);
    }
}
