<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MControl extends Model
{
    
    public static function Get_Row_Empty($table){
        $columns = DB::select('show columns from ' . $table);
        foreach($columns as $col){
            $columns[$col->Field]="";
        }

        return $columns;
    }

    public static function Get_Sekolah($id_sekolah){
        $sekolah = DB::table('asal_sekolah')->where('id_sekolah',$id_sekolah)->first();
        if($sekolah!= ""){
            $nama = $sekolah->nama_sekolah;
        } else {
            $nama = " - not set -";
        }

        return $nama;
    }

    public static function Get_Alamat($id_sekolah){
        $sekolah_alamat = DB::table('asal_sekolah')->where('id_sekolah',$id_sekolah)->first();
        if($sekolah_alamat!= ""){
            $alamat = $sekolah_alamat->alamat_sekolah;
        }else{
            $alamat = " - Tidak di Temukan - ";
        }
        
        return $alamat;
    }

    public static function Get_Siswa($no_daftar){
        $siswa = DB::table('siswa')->where('no_daftar',$no_daftar)->first();
        if($siswa!= ""){
            $nama = $siswa->nama;
        } else {
            $nama = " - not set -";
        }

        return $nama;
    }
}
