<?php

namespace App\Http\Controllers;

use App\Models\Sma;
use Illuminate\Http\Request;

class SmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sma = Sma::all();
        return view('sma.index', compact('sma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $sma = new Sma();
        $sma->nama = $request->nama;
        $sma->alamat = $request->alamat;
        $sma->save();

       return redirect('/')->with('success', 'Data Sma berhasil ditambahkan');
    }

    public function edit($id)
    {
        $sma = Sma::find($id);
        return view('sma.edit', compact('sma'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sma  $sma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $sma = Sma::find($id);
        $sma->nama = $nama;
        $sma->alamat = $alamat;
        $sma->save();

       return redirect('/')->with('success', 'Data Sma berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sma  $sma
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $sma = Sma::find($id);
        $sma->delete();

        return redirect('/')->with('success', 'Data Sma berhasil dihapus');
    }
}