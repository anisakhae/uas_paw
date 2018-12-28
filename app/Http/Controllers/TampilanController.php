<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Kurir;
use App\Kosan;
use App\User;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurirs = Kurir::orderBy('id','DESC')->paginate(4);
        $kosans = Kosan::orderBy('id','DESC')->paginate(4);
        return view('home.home',compact('kurirs','kosans'));
        // $datas = Dekorasi::orderBy('id','ASC')->paginate(6);
        // return view('home.home',compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.add');
    }

    
    public function home()
    {
        //
        $kurirs = Kurir::orderBy('id','DESC')->paginate(4);
        $kosans = Kosan::orderBy('id','DESC')->paginate(4);
        return view('home.home',compact('kurirs','kosans'));
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
}
