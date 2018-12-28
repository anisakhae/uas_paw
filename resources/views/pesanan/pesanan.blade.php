<div class="section">
<form action="{{ url('storedekor') }}" enctype="multipart/form-data" method="POST">
  {!! csrf_field() !!}
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="nama">
            <label for="title"></label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="validate" name="alamat">
            <label for="title">Alamat</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="harga"></textarea>
          <label for="textarea1">Harga</label>
        </div>
    </div>
</form>
</div>
