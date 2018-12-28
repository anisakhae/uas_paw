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
@include('layouts.app')
@extends('layouts.crud.index')
@section('content')

<div class="section">
<form action="{{ url('datakosan') }}" enctype="multipart/form-data" method="POST">
  {!! csrf_field() !!}
  <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="nama_kosan">
            <label for="title">nama_kosan</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="nama_pemilik">
            <label for="title">nama_pemilik</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="alamat">
            <label for="title">Alamat</label>
        </div>
    </div>
    <div class="form-group">
                <label for="">wifi</label>
                    <select name="wifi" id="" class="form-control">
                    <option value="iya">iya</option>
                    <option value="tidak">tidak</option>
                    </select>
                </div>
                
    <div class="form-group">
                <label for="">ac</label>
                    <select name="ac" id="" class="form-control">
                    <option value="iya">iya</option>
                    <option value="tidak">tidak</option>
                    </select>
                </div>
                
    <div class="form-group">
                <label for="">kamar mandi</label>
                    <select name="kamar_mandi" id="" class="form-control">
                    <option value="iya">di dalam</option>
                    <option value="tidak">di luar</option>
                    </select>
                </div>

                
    <div class="form-group">
                <label for="">lemari</label>
                    <select name="lemari" id="" class="form-control">
                    <option value="iya">iya</option>
                    <option value="tidak">tidak</option>
                    </select>
                </div>
                
    <div class="form-group">
                <label for="">kasur</label>
                    <select name="kasur" id="" class="form-control">
                    <option value="iya">iya</option>
                    <option value="tidak">tidak</option>
                    </select>
                </div>
                
    <div class="form-group">
                <label for="">meja</label>
                    <select name="meja" id="" class="form-control">
                    <option value="iya">iya</option>
                    <option value="tidak">tidak</option>
                    </select>
                </div>
                
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="ukuran_kamar">
            <label for="title">ukuran kamar</label>
        </div>
    </div>
                
    <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="harga"></textarea>
          <label for="textarea1">Harga</label>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input type="file" id="inputgambar" name="gambar" class="validate"/>
        </div>
    </div>
    <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>
@endsection