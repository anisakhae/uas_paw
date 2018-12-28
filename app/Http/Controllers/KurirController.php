<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Kurir;
use App\User;

class KurirController extends Controller
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

    public function kurir()
    {
        //
        return view('crud.kurir');
    }

    public function liat()
    {
        //
        $kurirs = Kurir::orderBy('id','DESC')->paginate(4);
        return view('crud.read.showkurir',compact('kurirs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function datakurir(Request $request)
    {
        //
        $tambah = new Kurir();
        $tambah->nama = $request->get('nama');
        $tambah->user_id =  auth()->id();
        $tambah->alamat = $request->get('alamat');
        $tambah->no_tlp = $request->get('no_tlp');
        $tambah->slug_kurir = Str::slug($request->get('nama'));
        $tambah->jenis_mobil = $request->get('jenis_mobil');

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
        $tampilkan = Kurir::where('slug_kurir',$slug)->first();
        return view('crud.read.rmkurir',compact('tampilkan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editkurir($id)
    {
        //
        $tampiledit = Kurir::where('id', $id)->first();
        return view('crud.update.updatekurir')->with('tampiledit', $tampiledit);
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
        $update = Kurir::where('id', $id)->first();
        $update->nama = $request['nama'];
        $update->alamat = $request['alamat'];
        $update->no_tlp = $request['no_tlp'];
        $update->jenis_mobil = $request['jenis_mobil'];
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

        return redirect()->to('/showkurir');
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
        $hapus = Kurir::find($id);
        $hapus->delete();

        return redirect()->to('/showkurir');
    }
}
