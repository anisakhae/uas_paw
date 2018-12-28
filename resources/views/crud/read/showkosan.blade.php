@extends('layouts.crud.index')
@include('layouts.app')
@section('content')
<div class="section">
	@foreach($kosans as $tambah_kosan)

	<div class="row">
		<div class="col s12">
			

			
			@if (Route::has('login'))

			@auth

			@if (auth()->id()==$tambah_kosan->user_id)
			<form action="" method="post"> </form>
			{{csrf_field()}}
			{{method_field('delete')}}

			<h5>{{ $tambah_kosan->nama }}</h5>
            
            <div class="divider"></div>
            <p>Rp. {!!substr($tambah_kosan->harga,0,200)!!}...</p>
            <img src="{{ asset('images/'.$tambah_kosan->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
			<a href="{{url('readkosan', $tambah_kosan->slug_kosan)}}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
			<a href="{{ url('editkosan', $tambah_kosan->id) }}" class="btn btn-flat blue darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
			<a href="{{ url('deletekosan', $tambah_kosan->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>

			@endif

			@endauth

			@endif

			<!-- <a href="{{url('editketring', $ketring->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a href="{{url('deleteketring', $ketring->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>   
            <button><a href="{{url('read', $ketring->id)}}">Readmore</a>
            <button>Edit 
            <button>Delete  -->
		</div>
	</div>
	@endforeach

</div>
@endsection