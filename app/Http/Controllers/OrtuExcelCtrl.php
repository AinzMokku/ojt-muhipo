<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\OrtuExport;
use App\Imports\OrtuImport;
use Maatwebsite\Excel\Facades\Excel;


class OrtuExcelCtrl extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportOrtu()
    {
       return view('import_ortu');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exOrtu() 
    {
        return Excel::download(new OrtuExport, 'ortu.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function imOrtu() 
    {
        Excel::import(new OrtuImport,request()->file('file'));
           
        return back();
    }
}
