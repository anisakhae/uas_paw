@extends('layouts.crud.index')
@include('layouts.app')
@section('content')

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $tampilkan->nama }}</h5>

			<p>nama pemilik : <a href="{{ url('readkurir', $tampilkan->user_id)}}">{{$tampilkan->user->name}}</a></p> 
            <P>Alamat: {{$tampilkan->alamat}}</P>
            <P>No HP: {{$tampilkan->no_tlp}}</P> 
            <P>Jenis Mobil: {{$tampilkan->jenis_mobil}}</P>
			<div class="divider"></div>

			
			<img src="{{ asset('images/'.$tampilkan->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"><br>
			<br><a href="" class="btn btn-flat blue darken-4 waves-effect waves-light white-text">Pesan Sekarang <i class="material-icons right">mode_edit</i></a>


                
		</div>
	</div>

</div>

@endsection