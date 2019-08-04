<?php

namespace App\Exports;

use App\MOrtu;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrtuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MOrtu::all();
    }
}
