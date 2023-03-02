<?php

namespace App\Imports;

use App\Models\Spp;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SppImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Spp([
            'id' => auth()->user()->id,
            'tahun' => $row['tahun'],
            'nominal' => $row['nominal'],
        ]);
    }

    public function headingRow(): int{
        return 3;
    }
}
