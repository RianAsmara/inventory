<?php

namespace App\Http\Controllers\MasterBarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MasterBarang;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BumbuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bumbus = MasterBarang::where('jenis', '=', 'bumbu')->paginate(10);
        return view('pages.bumbu.bumbu', compact('bumbus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.bumbu.formbumbu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = MasterBarang::create([
            'kategori' => $request->kategori,
            'nama_barang' => $request->nama_bumbu,
            'satuan' => $request->satuan,
            'jenis' => 'bumbu',
        ]);

        session()->put('success', 'Data bumbu berhasil ditambahkan.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(MasterBarang $bumbu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterBarang $bumbu)
    {
        return view('pages.bumbu.formbumbu', compact('bumbu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterBarang $bumbu)
    {
        $status = $bumbu->update([
            'kategori' => $request->kategori,
            'nama_barang' => $request->nama_bumbu,
            'satuan' => $request->satuan,
        ]);

        session()->put('success', 'Data bumbu berhasil diupdate.');
        return redirect()->route('bumbu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterBarang $bumbu)
    {
        $bumbu->findOrFail($bumbu);
        $status = $bumbu->delete();
        session()->put('success', 'Data bumbu berhasil dihapus.');
        return redirect()->route('bumbu.index');
    }

    public function search(Request $request)
    {
        $key = $request->key;
        $bumbus = MasterBarang::where('jenis', '=', 'bumbu')
            ->where('kategori', 'like', "%" . $key . "%")
            ->orWhere('nama_barang', 'like', "%" . $key . "%")
            ->where('jenis', '=', 'bumbu')
            ->paginate(10);
        return view('pages.bumbu.bumbu', compact('bumbus', 'key'));
    }

}
