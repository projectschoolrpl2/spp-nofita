<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model
{
    use HasFactory;

    protected $table = 'detail_pembayaran';
    protected $fillable = ['id_pembayaran', 'tahun_bayar', 'bulan_bayar', 'id_spp'];
}
