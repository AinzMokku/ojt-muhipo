
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <style>
        body{
            /* background-image: linear-gradient(to left top, #49484a, #5c5969, #676c8b, #6883af, #5c9bd3, #4cade2, #39c0ec, #2bd2f3, #5ddfe7, #88e9dd, #aff3d7, #d3fbd8); */
            }

        .jumbotron{
            
            width:auto;
            height: 100%;
            background-color: #ffffff !important;
            /* background-image: linear-gradient(to left top, #49484a, #5c5969, #676c8b, #6883af, #5c9bd3, #4cade2, #39c0ec, #2bd2f3, #5ddfe7, #88e9dd, #aff3d7, #d3fbd8); */
            }

        .siswa{
                background-color:#f5f5f5 !important;
                padding: 10px 10px 20px 10px;
                border: 1px solid #BFBFBF;
                /* box-shadow: 10px 10px 5px #aaaaaa !important; */
            }

        .ortu{
                background-color:#f5f5f5 !important;
                padding: 10px 10px 20px 10px;
                border: 1px solid #BFBFBF;
                /* box-shadow: 10px 10px 5px #aaaaaa !important; */
            }
    </style>
    @include('sc_head') 
<!-- Custom Tabs -->
 
</head>
<body>


@if ($errors->any())
  <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <em>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </em>
</div>
@endif




<div class="jumbotron">
  <div class="container">
  <form id="frmSiswa" class="form-horizontal" action="{{ url('/daftar/save') }}" method="post">
    @csrf
    <div class="row">
        <div class="fForm col-md-6">
            <div class="box siswa">
                <b><h2 class="box-header box-title" style="text-align:center;">Data Diri</h2></b>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Siswa" name="nama" value="{{ $siswa['nama'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id_sekolah" class="col-sm-2 control-label">SMP / MTS</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="id_sekolah" value="{{ $siswa['id_sekolah'] }}">
                                <option value="">- Pilih Sekolah -</option>
                                @foreach($sekolah as $skl)
                                <option {{ $siswa['id_sekolah']==$skl['id_sekolah'] ? 'selected' : "" }} value="{{ $skl['id_sekolah'] }}">{{ $skl['nama_sekolah'] }}</option>
                                @endforeach        
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Tambah Baru
                        </button>
                        <!-- <a href="{{ url('/add') }}"><button type="button" class="btn bg-green btn-flat margin tombol">Tambah Baru</button></a> -->
                        </div>
                    <div class="form-group">
                        <label for="nisn" class="col-sm-2 control-label">NISN</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="nisn" placeholder="NISN" name="nisn" value="{{ $siswa['nisn'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jenis_kelamin" value="{{ $siswa['jenis_kelamin'] }}">
                                <option value="">- Pilih Jenis Kelamin -</option>
                                <option {{ $siswa['jenis_kelamin']=='Laki-Laki' ? 'selected' : '' }} value="Laki-Laki">Laki-Laki</option>
                                <option {{ $siswa['jenis_kelamin']=='Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tempat" placeholder="Tempat Lahir" name="tempat" value="{{ $siswa['tempat'] }}">
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input id="datepicker" type="text" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{ $siswa['tgl_lahir'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama" class="col-sm-2 control-label">Agama</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama" value="{{ $siswa['agama'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat">{{ $siswa['alamat'] }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="info" class="col-sm-2 control-label">Info</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="info" value="{{ $siswa['info'] }}">
                                <option value="">Info Dari</option>
                                <option {{ $siswa['info']=='Pamflet' ? 'selected' : '' }} value="Pamflet">Pamflet</option>
                                <option {{ $siswa['info']=='Brosur' ? 'selected' : '' }} value="Brosur">Brosur</option>
                                <option {{ $siswa['info']=='Baliho' ? 'selected' : '' }} value="Baliho">Baliho</option>
                                <option {{ $siswa['info']=='Radio' ? 'selected' : '' }} value="Radio">Radio</option>
                                <option {{ $siswa['info']=='Saudara' ? 'selected' : '' }} value="Saudara">Saudara</option>
                                <option {{ $siswa['info']=='Guru' ? 'selected' : '' }} value="Guru">Guru</option>
                                <option {{ $siswa['info']=='Sosialisasi' ? 'selected' : '' }} value="Sosialisasi">Tim Sosialisasi</option>
                                <option {{ $siswa['info']=='Lainnya' ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nohp" class="col-sm-2 control-label">Telepon</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" id="nohp" placeholder="Telepon" name="nohp" value="{{ $siswa['nohp'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="program" class="col-sm-2 control-label">Pilihan Program</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="program" value="{{ $siswa['program'] }}">
                                <option value="">Pilih Salah Satu</option>
                                <option {{ $siswa['program']=='Bilingual Ipa' ? 'selected' : '' }} value="Bilingual">Bilingual Ipa</option>
                                <option {{ $siswa['program']=='Bilingual Ips' ? 'selected' : '' }} value="Bilingual">Bilingual Ips</option>
                                <option {{ $siswa['program']=='Reguler Ipa' ? 'selected' : '' }} value="Reguler">Reguler Ipa</option>
                                <option {{ $siswa['program']=='Reguler Ips' ? 'selected' : '' }} value="Reguler">Reguler Ips</option>
                                <option {{ $siswa['program']=='Tahfidz' ? 'selected' : '' }} value="Tahfidz">Tahfidz</option>
                                <option {{ $siswa['program']=='MIPA' ? 'selected' : '' }} value="MIPA">MIPA</option>
                                <option {{ $siswa['program']=='IPS' ? 'selected' : '' }} value="IPS">IPS</option>
                            </select>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="no_ijazah" class="col-sm-2 control-label">No Ijazah</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="no_ijazah" class="form-control" placeholder="No Ijazah" name="no_ijazah" value="{{ $siswa['no_ijazah'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fForm col-md-6">
            <div class="box ortu">
                <b><h2 class="box-header box-title" style="text-align:center;">Data Orang Tua</h2></b>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_ayah" class="col-sm-2 control-label">Nama Ayah</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="no_daftar" value="{{ $orangtua['no_daftar'] }}">
                            <input type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah" name="nama_ayah" value="{{ $orangtua['nama_ayah'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ayah" class="col-sm-2 control-label">Pekerjaan Ayah</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah" value="{{ $orangtua['pekerjaan_ayah'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat_ayah" class="col-sm-2 control-label">Alamat Ayah</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat Ayah" name="alamat_ayah">{{ $orangtua['alamat_ayah'] }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nohp_ayah" class="col-sm-2 control-label">Telepon Ayah</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" id="nohp_ayah" placeholder="Telepon Ayah" name="nohp_ayah" value="{{ $orangtua['nohp_ayah'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu" class="col-sm-2 control-label">Nama Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu" name="nama_ibu" value="{{ $orangtua['nama_ibu'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ibu" class="col-sm-2 control-label">Pekerjaan Ibu</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu" value="{{ $orangtua['pekerjaan_ibu'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat_ibu" class="col-sm-2 control-label">Alamat Ibu</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat Ibu" name="alamat_ibu">{{ $orangtua['alamat_ayah'] }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nohp_ibu" class="col-sm-2 control-label">Telepon Ibu</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" id="nohp_ibu" placeholder="Telepon Ibu" name="nohp_ibu" value="{{ $orangtua['nohp_ibu'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">      
    <form id="frmSekolah" class="form-horizontal" action="{{ url('/save') }}" method="post">
    @csrf
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">SMP / MTS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_sekolah" class="col-sm-2 control-label">Nama Sekolah</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id_sekolah">
                        <input type="text" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah" name="nama_sekolah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat Sekolah</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="Alamat Sekolah" name="alamat_sekolah"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right">SAVE</button>
            </div>
            </div>
        </div>
    </form>
</div>

@include('sc_footer')
</body>
</html>
