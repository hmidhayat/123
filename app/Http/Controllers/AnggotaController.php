<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $jk_str = [
            'l' => 'Laki-laki',
            'p' => 'Perempuan'
    ];
    public function index()
    {
        $str_jkelamin = $this->jk_str;
        $data = Anggota::all();
        return view('anggota.anggota',compact('data','str_jkelamin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create_anggota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anggota = new Anggota;
        $anggota->kode_anggota = $request->kode;
        $anggota->nama_anggota = $request->nama;
        $anggota->jk_anggota = $request->jk;
        $anggota->jurusan_anggota = $request->jurusan;
        $anggota->no_telp_anggota = $request->tlp;
        $anggota->alamat_anggota = $request->alamat;
        if ($anggota->save()){
            return redirect()->route('anggota');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        //$data = Anggota::find($anggota);
        $str_jkelamin = $this->jk_str;
        return view('anggota.edit_anggota',compact('anggota','str_jkelamin'));
       //return  $this->jk_str['l'];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        $anggota = Anggota::find($request->id_data);
        $anggota->kode_anggota = $request->kode;
        $anggota->nama_anggota = $request->nama;
        $anggota->jk_anggota = $request->jk;
        $anggota->jurusan_anggota = $request->jurusan;
        $anggota->no_telp_anggota = $request->tlp;
        $anggota->alamat_anggota = $request->alamat;
        if ($anggota->update()){
            return redirect()->route('anggota');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        if (Anggota::destroy($anggota->id)){
            return redirect()->route('anggota'); 
        }
    }
}
