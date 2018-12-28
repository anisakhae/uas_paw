@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>
@extends('layouts.crud.index')
@include('layouts.app')
@section('content')

<div class="section">
<form action="{{ url('update', $tampiledit->id) }}" enctype="multipart/form-data" method="POST">
  {!! csrf_field() !!}
  <div class="row">
  <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="nama" value="{{ $tampiledit->nama }}">
            <label for="title">nama</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="alamat" value="{{ $tampiledit->alamat }}">
            <label for="title">alamat</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="no_tlp" value="{{ $tampiledit->no_tlp }}">
            <label for="title">no HP</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="jenis_mobil" value="{{ $tampiledit->jenis_mobil }}"></textarea>
          <label for="textarea1">jenis mobil</label>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <img src="{{ asset('images/'.$tampiledit->gambar) }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input type="file" id="inputgambar" name="gambar" class="validate"/ >
        </div>
    </div>
    <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>
@endsection