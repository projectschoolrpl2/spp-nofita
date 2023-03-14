<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $fillable = ['id_petugas', 'id_siswa', 'tgl_bayar'];

    // public function pembayaran(){
    //     return $this->hasMany('App\Models\Pembayaran', 'id_petugas');
    // }
}
