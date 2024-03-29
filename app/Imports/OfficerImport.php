<?php

namespace App\Imports;

use App\Models\Officer;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OfficerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Officer([
            'id' => auth()->user()->id,
            'username' => $row['username'],
            'password' => $row['password'],
            'nama_petugas' => $row['nama_petugas'],
            'level' => $row['level'],
            'jk' => $row['jk'],
            'no_telp' => $row['no_telp'],
            'alamat' => $row['alamat'],
        ]);
    }

    public function headingRow(): int{
        return 3;
    }
}
