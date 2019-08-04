<?php

namespace App\Imports;

use App\MSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MSiswa([ 
            'no_daftar'     => $row['no_daftar'],
            'nama'          => $row['nama'],
            'id_sekolah'    => $row['id_sekolah'],
            'nisn'          => $row['nisn'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'tempat'        => $row['tempat'],
            'tgl_lahir'     => $row['tgl_lahir'],
            'agama'         => $row['agama'],
            'alamat'        => $row['alamat'],
            'info'          => $row['info'],
            'nohp'          => $row['nohp'],
            'program'       => $row['program'],
            'no_ijazah'     => $row['no_ijazah'],
            'status'        => $row['status'],
        ]);
    }
}
