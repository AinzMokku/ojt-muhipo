<?php

namespace App\Exports;

use App\MSiswa;
use App\MOrtu;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        // return MOrtu::all();
        return MSiswa::all()
        ->where("status",'=',"Diterima");
    }
}
