<?php

namespace App\Http\Controllers;

use App\Models\Smk;
use Illuminate\Http\Request;

class SmkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $smk = Smk::all();
        return view('smk.index', compact('smk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $smk = new Smk();
        $smk->nama = $request->nama;
        $smk->alamat = $request->alamat;
        $smk->save();

       return redirect('/')->with('success', 'Data smk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $smk = Smk::find($id);
        return view('smk.edit', compact('smk'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smk  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;

        $smk = Smk::find($id);
        $smk->nama = $nama;
        $smk->alamat = $alamat;
        $smk->save();

       return redirect('/')->with('success', 'Data smk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smk  
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $smk = Smk::find($id);
        $smk->delete();

        return redirect('/')->with('success', 'Data smk berhasil dihapus');
    }
}