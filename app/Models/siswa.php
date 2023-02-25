<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = ['nisn', 'nis', 'nama', 'id_kelas', 'alamat', 'no_telp', 'id_spp', 'jk',
    'username', 'password'];
}
