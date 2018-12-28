@include('layouts.app')
@extends('layouts.crud.index')
@section('content')
<div class="section">
<ul>
    <li><a href="{{url('kosan')}}">Tambah Kosan</a></li>
    <li><a href="{{url('kurir')}}">Daftar Kurir</a></li>
</ul>
</div>
@endsection