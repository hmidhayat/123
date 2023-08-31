<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        return view('buku.buku',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create_buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku = new Buku;
        $buku->kode_buku = $request->kode;
        $buku->judul_buku = $request->judul;
        $buku->penulis_buku = $request->penulis;
        $buku->penerbit_buku = $request->penerbit;
        $buku->tahun_penerbit = $request->thn_terbit;
        $buku->stock = $request->stock;
       if ($buku->save()){
        return redirect()->route('buku');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('buku.edit_buku',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $buku = Buku::find($request->id_data);
        $buku->kode_buku = $request->kode;
        $buku->judul_buku = $request->judul;
        $buku->penulis_buku = $request->penulis;
        $buku->penerbit_buku = $request->penerbit;
        $buku->tahun_penerbit = $request->thn_terbit;
        $buku->stock = $request->stock;
        if($buku->update()){
            return redirect()->route('buku');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        if (Buku::destroy($buku->id)){
            return redirect()->route('buku');
        }
    }
}
