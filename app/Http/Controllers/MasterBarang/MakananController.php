<?php

namespace App\Http\Controllers\MasterBarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MasterBarang;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanans = MasterBarang::where('jenis', '=', 'makanan')->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.makanan.makanan', compact('makanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.makanan.formmakanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = MasterBarang::create([
            'kategori' => $request->kategori,
            'nama_barang' => $request->nama_makanan,
            'satuan' => $request->satuan,
            'jenis' => 'makanan',
        ]);

        session()->put('success','Data makanan berhasil ditambahkan.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MasterBarang $makanan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterBarang $makanan)
    {
        return view('pages.makanan.formmakanan', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterBarang $makanan)
    {
        $status = $makanan->update([
            'kategori' => $request->kategori,
            'nama_barang' => $request->nama_makanan,
            'satuan' => $request->satuan,
        ]);

        session()->put('success','Data makanan berhasil diupdate.');
        return redirect()->route('makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterBarang $makanan)
    {
        $makanan->findOrFail($makanan);
        $status = $makanan->delete();
        session()->put('success','Data makanan berhasil dihapus.');
        return redirect()->route('makanan.index');

    }

    public function search(Request $request){
        $key = $request->key;
        $makanans = MasterBarang::where('jenis', '=', 'makanan')
            ->where('kategori', 'like', "%" . $key . "%")
            ->orWhere('nama_barang', 'like', "%" . $key . "%")
            ->where('jenis', '=', 'makanan')
            ->paginate(10);
        return view('pages.makanan.makanan', compact('makanans', 'key'));
    }

}
