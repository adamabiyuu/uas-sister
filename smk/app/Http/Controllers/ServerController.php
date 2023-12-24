<?php

namespace App\Http\Controllers;

use App\Models\Smk;
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
        return Smk::all();
    }

    /**
     * Fungsi create untuk menambahkan Mahasiswi baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $smk = new Smk();
       $smk->nama = $request->nama;
       $smk->alamat = $request->alamat;
       $smk->save();

       return "Data Smk berhasil ditambahkan";
    }

    /**
     * Fungsi update untuk merubah data Mahasiswi
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smk  $mahasiswi
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

        return "Data Smk berhasil diubah";
    }

    /**
     * Fungsi untuk menghapus data Mahasiswi
     *
     * @param  \App\Models\Smk  $mahasiswi
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $smk = Smk::find($id);
        $smk->delete();

        return "Data Smk berhasil dihapus";
    }
}