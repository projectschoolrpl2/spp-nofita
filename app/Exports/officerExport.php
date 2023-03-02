<?php

namespace App\Exports;

use App\Models\officer;
use Maatwebsite\Excel\Concerns\FromCollection;

class officerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return officer::all();
    }
}
