<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kurir;
use App\User;

class Kurir extends Model
{
    //
    protected $table = 'daftar_kurir';
    protected $fillable = ['nama','alamat','no_tlp','slug_kurir','jenis_mobil','gambar'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
