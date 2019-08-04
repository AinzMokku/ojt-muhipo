<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class SiswaExcelCtrl extends Controller
{
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportSiswa()
    {
       return view('import_siswa');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exSiswa() 
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function imSiswa() 
    {
        Excel::import(new SiswaImport,request()->file('file'));
           
        return back();
    }
}
