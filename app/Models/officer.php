<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    use HasFactory;

    protected $table = 'officer';

    protected $fillable = ['username', 'password', 'nama_petugas', 'level', 'jk',
    'no_telp', 'alamat'];
}
