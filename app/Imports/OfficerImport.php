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
            // dd($row);
            'id' => auth()->user()->id,
            'username' => $row['username'],
            'password' => $row['password'],
            'nama_petugas' => $row['nama_petugas'],
            'level' => $row['level'],
            'jk' => $row['jk'],
            'no_telp' => $row['no_telp'],
            'alamat' => $row['alamat'],

            // 'id' => auth()->user()->id,
            // 'username' => 1,
            // 'password' => 1,
            // 'nama_petugas' => 1,
            // 'level' => 1,
            // 'jk' => 1,
            // 'no_telp' => 1,
            // 'alamat' => 1,
        ]);
    }

    public function headingRow(): int{
        return 1;
    }
}
