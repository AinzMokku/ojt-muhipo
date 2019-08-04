<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MSekolah;
use App\MControl;

class SekolahCtrl extends Controller
{
    function Index(){
        $sekolah = MSekolah::all();
        return view('sekolah',compact('sekolah'));
    }

    function add(){
        $sekolah = MControl::Get_Row_Empty('asal_sekolah');
        return view('form_sekolah',compact('sekolah'));
    }

    function edit($id_sekolah){
        $sekolah = MSekolah::where('id_sekolah',$id_sekolah)->first();
        return view('form_sekolah',compact('sekolah'));
    }

    function save(Request $req){
        if($req->get('id_sekolah')==""){
            
            $newsekolah = DB::select('SHOW TABLE STATUS LIKE "asal_sekolah"');
            $id_sekolah = sprintf('%03d',$newsekolah[0]->Auto_increment);
            
            $sekolah = new MSekolah([
                'id_sekolah' => $id_sekolah,
                'nama_sekolah' => $req->get('nama_sekolah'),
                'alamat_sekolah' => $req->get('alamat_sekolah'),
            ]);
            $sekolah->save();
        } else {
            $sekolah = MSekolah::where('id_sekolah',$req->get('id_sekolah'));
            $sekolah->update([
                'nama_sekolah' => $req->get('nama_sekolah'),
                'alamat_sekolah' => $req->get('alamat_sekolah'),
            ]);
        }
        return redirect('sekolah');
    }

    function delete($id_sekolah){
        $sekolah = MSekolah::where('id_sekolah',$id_sekolah);
        $sekolah->delete();
        return redirect('sekolah');
    }
}
