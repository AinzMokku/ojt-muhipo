<?php

namespace App\Imports;

use App\MOrtu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OrtuImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MOrtu([

            'no_daftar'          => $row['no_daftar'],
            'nama_ayah'          => $row['nama_ayah'],
            'pekrejaan_ayah'     => $row['pekrejaan_ayah'],
            'alamat_ayah'        => $row['alamat_ayah'],
            'nohp_ayah'          => $row['nohp_ayah'],
            'nama_ibu'           => $row['nama_ibu'],
            'pekrejaan_ibu'      => $row['pekrejaan_ibu'],
            'alamat_ibu'         => $row['alamat_ibu'],
            'nohp_ibu'           => $row['nohp_ibu'],

        ]);
    }
}
