<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\siswa;
use App\MControl;
use App\MSiswa;
use App\MOrtu;
use App\MSekolah;
use App\Summernote;

class dashboard extends Controller
{
    //
    function preview(){
        $note = DB::select("SELECT * FROM summernotes ORDER BY id DESC");
        // dd($note);
        return view('/welcome',compact('note'));
    }

    function list(){
        $siswa = Msiswa::all();
        // dd($note);
        return view('/list_siswa',compact('siswa'));
    }

    function list_p($id){
        $note = Summernote::where('id',$id)->first();
        return view('/pengumuman',compact('note'));
    }

    function list_p_prev($id){
        $note = $id -1;
        if($note==0){
            $note = Summernote::where('id',1)->first();
            return view('/pengumuman',compact('note'));
        } else {
            $note = Summernote::where('id',$id -1)->first();
            return view('/pengumuman',compact('note'));
        };
    }
    function list_p_next($id){
        $up = DB::select('select count(*) as max from summernotes');
        $js = $up[0]->max;
        $note = $id +1;
        // dd($note);
        if($note>=$js){
            // dd($note);
            $note = Summernote::where('id',$js)->first();
            return view('/pengumuman',compact('note'));
        } else {
            $note = Summernote::where('id',$id +1)->first();
            return view('/pengumuman',compact('note'));
        };
    }

    function tambah(){
        $siswa = MControl::Get_Row_Empty('siswa');
        $orangtua = MControl::Get_Row_Empty('orangtua');
        $sekolah = MSekolah::all();
        // dd($siswa,$orangtua,$sekolah);
        return view('/daftar',compact('siswa','sekolah','orangtua'));
    }

    function save(siswa $req){
        
        if($req->get('no_daftar')==""){
            $no = $req->jenis_kelamin == 'Laki-Laki' ? 1 : 0;
            $newid = DB::select("SELECT max(SUBSTR(siswa.no_daftar, -3, 3)) AS num FROM siswa WHERE (substr(siswa.no_daftar, -3, 3) % 2) = $no");

            if($req->get('id_sekolah')==""){
                $sekolah = MControl::Get_Row_Empty('asal_sekolah');
                $newsekolah = $sekolah;
                $id_sekolah = sprintf('%03d',$newsekolah[0]->Auto_increment);
                
                $sekolah = new MSekolah([
                    'id_sekolah' => $id_sekolah,
                    'nama_sekolah' => $req->get('nama_sekolah'),
                    'alamat_sekolah' => $req->get('alamat_sekolah'),
                ]);
                $sekolah->save();
            }


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
        
        return view('/thank_you',compact('siswa'));
    }

    
    // function add_sekolah(){
    //     $sekolah = MControl::Get_Row_Empty('asal_sekolah');
    //     return view('daftar_sekolah',compact('sekolah'));
    // }

    function save_sekolah(Request $req){
            $newsekolah = DB::select('SHOW TABLE STATUS LIKE "asal_sekolah"');
            $id_sekolah = sprintf('%03d',$newsekolah[0]->Auto_increment);
            
            $sekolah = new MSekolah([
                'id_sekolah' => $id_sekolah,
                'nama_sekolah' => $req->get('nama_sekolah'),
                'alamat_sekolah' => $req->get('alamat_sekolah'),
            ]);
            $sekolah->save();

        return redirect('/daftar/add');
    }

    function ty(){
        $note = DB::select("SELECT * FROM summernotes ORDER BY id DESC");
        $siswa = MSiswa::all();
        // dd($note);
        return view('/welcome',compact('note','siswa'));
    }
    function j_siswa(){
        $bilpa = DB::select('select count(*) as jumlah from siswa where program = "Bilingual Ipa"');
        $B_ipa = $bilpa[0]->jumlah;
        $bilps = DB::select('select count(*) as jumlah from siswa where program = "Bilingual Ips"');
        $B_ips = $bilps[0]->jumlah;
        $rilpa = DB::select('select count(*) as jumlah from siswa where program = "Reguler Ipa"');
        $R_ipa = $rilpa[0]->jumlah;
        $rilps = DB::select('select count(*) as jumlah from siswa where program = "Reguler Ips"');
        $R_ips = $rilps[0]->jumlah;
        $ta = DB::select('select count(*) as jumlah from siswa where program = "Tahfidz"');
        $Tahfidz = $ta[0]->jumlah;
        $mipa = DB::select('select count(*) as jumlah from siswa where program = "MIPA"');
        $MIPA = $mipa[0]->jumlah;
        $ips = DB::select('select count(*) as jumlah from siswa where program = "MIPA"');
        $IPS = $ips[0]->jumlah;
        return view('/dashboard', compact('B_ipa','B_ips','R_ipa','R_ips','Tahfidz','MIPA','IPS'));
    }
}
