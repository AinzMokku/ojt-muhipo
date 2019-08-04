<style>
    .judul{
        padding-top: -30px !important;
    }

   .judul h5,h2,p{
        margin:0;
        text-align: center;
    }

    h2{
        font-size:28;
        color: blue;
    }

    .subjudul{
        margin-top: 12px;
        margin: 0;
        text-align:center;
    }

    .text{
        position: absolute;
        margin-left: 10%;
    }

    .penutup{
        text-align: left !important;
        position: absolute !important;
        padding-left: 72% !important;
    }

   h3{  
        margin:0;
        font-size:15;
    }
    
    .foto {
        margin-top: 10px !important;
        margin-left: 41% !important;
        border: 1px solid !important;
        width: 114x;
        height: 152px;
        border-color: black !important;
    }
    .foto p{
        padding-top: 65px !important;
    }
    
</style>
<div class="judul">
    <b><h5>MAJELIS PENDIDIKAN DASAR DAN MENENGAH</h5></b>
    <b><h5>PIMPINAN WILAYAH MUHAMMADIYAH JAWA TIMUR</h5></b>
    <b><h2>SMA MUHAMMADIYAH 1 PONOROGO</h2></b>
    <p><b>Status : Terakreditasi A</b></p>
    <p>Jl. Batoro Katong No. 6-B Telp/Fax (0352) 481521 Ponorogo 63411</p>
    <p style="position: absolute;margin-left: 60px;text-align: left !important;">e-mail : <i style="color:blue;">muh1po_first@yahoo.co.id</i>
     <i style="color:white">.........................</i> website : <i style="color:blue;">www.smamuhipo.sch.id</i></p>
</div>

<div class="subjudul">
    <h4 style="padding-top:20px !important;">FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br> TAHUN PELAJARAN <?php echo date("Y").' / '.date('Y',strtotime(date("Y-m-d") . " + 365 day")) ?> </H4>
</div>

<div class="box">
    <div class="box-body">
        <table id="example"  class="display" style="width:100%">
            <tbody>
            @foreach($data as $d)
                <tr>
                    <td><b>Data Calon Peserta Didik</b></td>
                </tr>
                <tr>
                    <td style="width: 30% !important;">No. Pendaftaran </td>
                    <td>: {{$d->no_daftar }}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap </td>
                    <td>: {{$d->nama }}</td>
                    
                </tr>
                <tr>
                    <td>Nisn</td>
                    <td>: {{$d->nisn }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: {{$d->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>: {{$d->tempat.' , '.$d->tgl_lahir }}</td></tr>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: {{$d->agama }}</td>
                </tr>
                <tr>
                    <td>Alamat Rumah</td>
                    <td>: {{$d->alamat }}</td>
                </tr>
                <tr>
                    <td>No. HP Calon Siswa</td>
                    <td>: {{$d->nohp }}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>: {{$d->nama_sekolah }}</td>
                </tr>
                <tr>
                    <td>Alamat Sekolah</td>
                    <td>: {{$d->alamat_sekolah }}</td>
                </tr>
                <tr>
                    <td>No. Ijazah</td>
                    <td>: {{$d->no_ijazah }}</td>
                </tr>
                <tr>
                    <td>Mengetahui info dari </td>
                    <td>: {{$d->info }}</td>
                </tr>
                <tr>
                    <td style="color:white;">.</td>
                </tr>
                <tr>
                    <td><b>Data Orang Tua</b></td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>: {{$d->nama_ayah }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{$d->pekerjaan_ayah }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{$d->alamat_ayah }}</td>
                </tr>
                <tr>
                    <td>No. Telp/HP</td>
                    <td>: {{$d->nohp_ayah }}</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>: {{$d->nama_ibu }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>: {{$d->pekerjaan_ibu }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{$d->alamat_ibu }}</td>
                </tr>
                <tr>
                    <td style="padding-bottom:20px  !important;">No. Telp/HP</td>
                    <td style="padding-bottom:20px  !important;">: {{$d->nohp_ibu }}</td>
                </tr>
                <tr>
                    <td style="color:white;">.</td>
                </tr>
                <tr>
                    <td><b>Rencana Pilihan Program</b></td>
                </tr>
                <tr>
                    <td>Pilihan Program </td>
                    <td>: {{$d->program }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="foto">
    <p>Foto 3x4</p> 
</div>

<div class="penutup">
    <p>Ponorogo,............................</p>
    <p style="margin-bottom: 50px !important;">Calon Peserta Didik,</p>
    <p style="color:white;">.</p>
    <p style="color:white;">.</p>
    <p>.....................................</p>
</div>