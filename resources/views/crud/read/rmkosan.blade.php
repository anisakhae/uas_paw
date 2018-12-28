@extends('layouts.crud.index')
@include('layouts.app')
@section('content')

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $tampilkan->nama_kosan}}</h5>

			<p>nama pemilik : <a href="{{ url('readkosan', $tampilkan->user_id)}}">{{$tampilkan->user->name}}</a></p> 
            <P>Alamat: {{$tampilkan->alamat}}</P>
            <P>Wifi: {{$tampilkan->wifi}}</P> 
            <P>Ac: {{$tampilkan->ac}}</P> 
            <P>Kamar Mandi: {{$tampilkan->kamar_mandi}}</P> 
            <P>Lemari: {{$tampilkan->lemari}}</P> 
            <P>Kasur: {{$tampilkan->kasur}}</P> 
            <P>Meja: {{$tampilkan->meja}}</P> 
            <P>Ukuran Kamar: {{$tampilkan->ukuran_kamar}}</P> 
			<div class="divider"></div>
			<p>Rp. {!! $tampilkan->harga !!}</p>

			
			<img src="{{ asset('images/'.$tampilkan->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"><br>
			<br><a href="" class="btn btn-flat blue darken-4 waves-effect waves-light white-text">Pesan Sekarang <i class="material-icons right">mode_edit</i></a>


                
		</div>
	</div>

</div>

@endsection