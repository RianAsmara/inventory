<?php

namespace App\Http\Controllers\Checkout;

use App\Checkout;
use App\MasterBarang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts = Checkout::with('master_barang')->orderBy('tanggal_checkout', 'desc')->paginate(10);
        return view('pages.checkout.checkout', compact('checkouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.checkout.formcheckout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count($request->jumlah) > 0) {
            for ($i = 0; $i < count($request->jumlah); $i++) {
                $status = Checkout::create([
                    'tanggal_checkout' => date('d/m/Y'),
                    'master_barang_id' => $request->master_barang_id[$i],
                    'jumlah' => $request->jumlah[$i]
                ]);

                if ($status) {
                    $master = MasterBarang::find($request->master_barang_id[$i]);
                    $master->stok = $master->stok - $request->jumlah[$i];
                    $master->save();
                }
            }
        }else{
            session()->put('error', 'Tidak ada data untuk disimpan.');
        }
        session()->put('success', 'Checkout berhasil.');
        return redirect()->back();
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
