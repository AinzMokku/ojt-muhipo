@extends('tamplate_fend')

@section('content_fend')
<div class="w3-container"  id="list"  style="margin-top:200px 16px;">
  <h3 class="w3-center">Daftar Peserta Didik Baru</h3>
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
        <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table id="example1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No Daftar</th>
                                        <th>Nama</th>
                                        <td>Asal Sekolah</td>
                                        <th>Nisn</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswa as $swa)
                                    <tr>
                                        <td>{{ $swa['no_daftar'] }}</td>
                                        <td>{{ $swa['nama'] }}</td>
                                        <td>{{ App\MControl::Get_Sekolah($swa->id_sekolah) }}</td>
                                        <td>{{ $swa['nisn'] }}</td>
                                        <td>{{ $swa['jenis_kelamin'] }}</td>
                                        <td>{{ $swa['status'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
      </div>
</div>
@stop