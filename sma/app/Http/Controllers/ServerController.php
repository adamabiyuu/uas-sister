<?php

namespace App\Http\Controllers;

use App\Models\Sma;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    /**
     * Fungsi index untnuk menampilkan data semua Mahasiswi
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sma::all();
    }

    /**
     * Fungsi create untuk menambahkan Mahasiswi baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $sma = new Sma();
       $sma->nama = $request->nama;
       $sma->alamat = $request->alamat;
       $sma->save();

       return "Data Sma berhasil ditambahkan";
    }

    /**
     * Fungsi update untuk merubah data Mahasiswi
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sma  $mahasiswi
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

        return "Data Sma berhasil diubah";
    }

    /**
     * Fungsi untuk menghapus data Mahasiswi
     *
     * @param  \App\Models\Sma  $mahasiswi
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $sma = Sma::find($id);
        $sma->delete();

        return "Data Sma berhasil dihapus";
    }
}