<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Kosan;
use App\User;

class KosanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function kosan()
    {
        //
        return view('crud.kosan');
    }

    public function liat()
    {
        //
        $kosans = Kosan::orderBy('id','DESC')->paginate(4);
        return view('crud.read.showkosan',compact('kosans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function datakosan(Request $request)
    {
        //
        $tambah = new Kosan();
        $tambah->nama_kosan = $request['nama_kosan'];
        $tambah->user_id =  auth()->id();
        $tambah->nama_pemilik = $request['nama_pemilik'];
        $tambah->alamat = $request['alamat'];
        $tambah->wifi = $request['wifi'];
        $tambah->ac = $request['ac'];
        $tambah->kamar_mandi = $request['kamar_mandi'];
        $tambah->lemari = $request['lemari'];
        $tambah->kasur = $request['kasur'];
        $tambah->meja = $request['meja'];
        $tambah->slug_kamar = Str::slug($request->get('nama_kosan'));
        $tambah->ukuran_kamar = $request['ukuran_kamar'];
        $tambah->harga = $request['harga'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("images/", $fileName);

        $tambah->gambar = $fileName;
        $tambah->save();

        return redirect()->to('/tampilan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $tampilkan = Kosan::where('slug_kamar',$slug)->first();
        return view('crud.read.rmkosan',compact('tampilkan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editkosan($id)
    {
        //
        $tampiledit = Kosan::where('id', $id)->first();
        return view('crud.update.updatekosan')->with('tampiledit', $tampiledit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = Kosan::where('id', $id)->first();
        $update->nama_kosan = $request['nama_kosan'];
        $update->nama_pemilik = $request['nama_pemilik'];
        $update->alamat = $request['alamat'];
        $update->wifi = $request['wifi'];
        $update->ac = $request['ac'];
        $update->kamar_mandi = $request['kamar_mandi'];
        $update->lemari = $request['lemari'];
        $update->kasur = $request['kasur'];
        $update->meja = $request['meja'];
        $update->slug_kamar = Str::slug($request->get('nama_kosan'));
        $update->ukuran_kamar = $request['ukuran_kamar'];
        $update->harga = $request['harga'];
        if($request->file('gambar') == "")
        {
            $update->gambar = $update->gambar;
        } 
        else
        {
            $file       = $request->file('gambar');
            $fileName   = $file->getClientOriginalName();
            $request->file('gambar')->move("images/", $fileName);
            $update->gambar = $fileName;
        }
        
        $update->update();

        return redirect()->to('/showkosan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hapus = Kosan::find($id);
        $hapus->delete();

        return redirect()->to('/showkosan');
    }
}
