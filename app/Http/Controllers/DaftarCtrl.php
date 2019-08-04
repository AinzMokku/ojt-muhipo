<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\siswa;
// use PDF;
use Mpdf\Mpdf;
use App\MControl;
use App\MSiswa;
use App\MOrtu;
use App\MSekolah;

class DaftarCtrl extends Controller
{
    function index_siswa(){
        $siswa = MSiswa::all();
        return view('/siswa/data_siswa',compact('siswa'));
    }

    function add_siswa(){
        $siswa = MControl::Get_Row_Empty('siswa');
        $orangtua = MControl::Get_Row_Empty('orangtua');
        $sekolah = MSekolah::all();
        return view('/siswa/form_siswa',compact('siswa','sekolah','orangtua'));
    }

    function edit_siswa($no_daftar){
        $siswa = MSiswa::where('no_daftar',$no_daftar)->first();
        $orangtua = MOrtu::where('no_daftar',$no_daftar)->first();
        $sekolah = MSekolah::all();
        return view('/siswa/form_siswa',compact('siswa','sekolah','orangtua'));
    }

    function save(siswa $req){
        
        if($req->get('no_daftar')==""){
            $no = $req->jenis_kelamin == 'Laki-Laki' ? 1 : 0;
            $newid = DB::select("SELECT max(SUBSTR(siswa.no_daftar, -3, 3)) AS num FROM siswa WHERE (substr(siswa.no_daftar, -3, 3) % 2) = $no");

            $num = $newid[0]->num == null ?  ($req->jenis_kelamin == 'Laki-Laki' ? 1 : 2 ) : $newid[0]->num + 2;
            $no_daftar = date("Y")."A".sprintf('%03d',$num );

            //dd($no_daftar);

            $siswa = new MSiswa([
                'no_daftar'     => $no_daftar,
                'nama'          => $req->get('nama'),
                'id_sekolah'    => $req->get('id_sekolah'),
                'nisn'          => $req->get('nisn'),
                'jenis_kelamin' => $req->get('jenis_kelamin'),
                'tempat'        => $req->get('tempat'),
                'tgl_lahir'     => date("Y-m-d",strtotime($req->get('tgl_lahir'))),
                'agama'         => $req->get('agama'),
                'alamat'        => $req->get('alamat'),
                'info'          => $req->get('info'),
                'nohp'          => $req->get('nohp'),
                'program'       => $req->get('program'),
                'no_ijazah'     => $req->get('no_ijazah'),
                'status'        => 'Pendaftar',
            ]);
            $siswa->save();

            $orangtua = new MOrtu([
                'no_daftar'     => $no_daftar,
                'nama_ayah'      => $req->get('nama_ayah'),
                'pekerjaan_ayah' => $req->get('pekerjaan_ayah'),
                'alamat_ayah'    => $req->get('alamat_ayah'),
                'nohp_ayah'      => $req->get('nohp_ayah'),
                'nama_ibu'       => $req->get('nama_ibu'),
                'pekerjaan_ibu'  => $req->get('pekerjaan_ibu'),
                'alamat_ibu'     => $req->get('alamat_ibu'),
                'nohp_ibu'       => $req->get('nohp_ibu'),
            ]);
            $orangtua->save();
            

        } else {
            
            $siswa = MSiswa::where('no_daftar',$req->get('no_daftar'));
            $siswa->update([
                'nama'          => $req->get('nama'),
                'id_sekolah'    => $req->get('id_sekolah'),
                'nisn'          => $req->get('nisn'),
                'jenis_kelamin' => $req->get('jenis_kelamin'),
                'tempat'        => $req->get('tempat'),
                'tgl_lahir'     => date("Y-m-d",strtotime($req->get('tgl_lahir'))),
                'agama'         => $req->get('agama'),
                'alamat'        => $req->get('alamat'),
                'info'          => $req->get('info'),
                'nohp'          => $req->get('nohp'),
                'program'       => $req->get('program'),
                'no_ijazah'     => $req->get('no_ijazah'),
                'status'        => 'Pendaftar',
            ]);
            
            $orangtua = MOrtu::where('no_daftar',$req->get('no_daftar'));
            $orangtua->update([
                'nama_ayah'      => $req->get('nama_ayah'),
                'pekerjaan_ayah' => $req->get('pekerjaan_ayah'),
                'alamat_ayah'    => $req->get('alamat_ayah'),
                'nohp_ayah'      => $req->get('nohp_ayah'),
                'nama_ibu'       => $req->get('nama_ibu'),
                'pekerjaan_ibu'  => $req->get('pekerjaan_ibu'),
                'alamat_ibu'     => $req->get('alamat_ibu'),
                'nohp_ibu'       => $req->get('nohp_ibu'),
            ]);

        }
        return redirect('/data_siswa');
    }

    function status(){
        $siswa = MSiswa::all();
        return view('/siswa/data_status_siswa',compact('siswa'));
    }

    function edit_status($no_daftar){
        $siswa = MSiswa::where('no_daftar',$no_daftar)->first();
        $siswa->update([
            'status' => 'Diterima',
        ]);
        return redirect('/data_siswa');
    }


    function print($no_daftar){
        $data = DB::select("SELECT siswa.no_daftar,siswa.nama,siswa.nisn,siswa.jenis_kelamin,siswa.tempat,siswa.tgl_lahir,siswa.agama,siswa.alamat,siswa.nohp,asal_sekolah.nama_sekolah,asal_sekolah.alamat_sekolah,siswa.no_ijazah,siswa.info,orangtua.nama_ayah,orangtua.pekerjaan_ayah,orangtua.alamat_ayah,orangtua.nohp_ayah,orangtua.nama_ibu,orangtua.pekerjaan_ibu,orangtua.alamat_ibu,orangtua.nohp_ibu,siswa.program FROM siswa,asal_sekolah,orangtua WHERE siswa.no_daftar=orangtua.no_daftar AND siswa.id_sekolah=asal_sekolah.id_sekolah and siswa.no_daftar='$no_daftar'");
                
       
        // return view('/siswa/myPDF',compact('data'));
        $cetak = view('/siswa/myPDF',compact('data'));

        $pdf = new Mpdf([
            'orientation' => "P",
            'format'      => "A4"
        ]);

        $pdf->WriteHTML($cetak);
        $pdf->Output(public_path()."/Formulir.pdf","I");

    }

    function delete($no_daftar){
        $siswa = MSiswa::where("no_daftar",$no_daftar);
        $orangtua = MOrtu::where("no_daftar",$no_daftar);
        $siswa->delete();
        $orangtua->delete();
        return redirect('/data_siswa');
    }

    function index_orangtua(){
        $orangtua = MOrtu::all();
        return view('/siswa/data_ortu',compact('orangtua'));
    }
}
