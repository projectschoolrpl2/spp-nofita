<?php

namespace App\Imports;

use App\Models\Grade;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GradeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Grade([
            'id' => auth()->user()->id,
            'nama_kelas' => $row['nama_kelas'],
            'kompetensi_keahlian' => $row['kompetensi_keahlian'],
        ]);
    }

    public function headingRow(): int{
        return 3;
    }
}
