<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kosan;
use App\User;

class Kosan extends Model
{
    //
    protected $table = 'tambah_kosan';
    protected $fillable = ['nama_kosan','nama_pemilik','alamat','wifi'
    ,'ac','kamar_mandi','lemari','kasur','meja','slug_kamar','ukuran_kamar','harga','gambar'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
