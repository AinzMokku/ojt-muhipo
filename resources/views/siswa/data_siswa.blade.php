@extends('tamplate')

@section('judul')
Data Siswa
@stop

@section('subjudul')
detail
@stop

@section('content')


<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <form action="{{ route('imSiswa') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <a href="{{ url('/data_siswa/add') }}"><button type="button" class="btn bg-green margin">Add New</button></a>
                <!-- <button class="btn btn-info margin">Import Siswa Data</button> -->
                <a class="btn btn-warning margin" href="{{ route('exSiswa') }}">Export Siswa Data</a>
                <a class="btn btn-warning margin" href="{{ route('exOrtu') }}">Export Orang Tua Data</a>
                <!-- <input type="file" name="file" class="form-control" style="width:20% !important;"> -->
            </form style="margin-bottom">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table id="example1" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No Daftar</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telepon/HP</th>
                            <th>Asal Sekolah</th>
                            <th>Program</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswa as $swa)
                        <tr>
                            <td>{{ $swa['no_daftar'] }}</td>
                            <td>{{ $swa['nama'] }}</td>
                            <td>{{ $swa['alamat'] }}</td>
                            <td>{{ $swa['jenis_kelamin'] }}</td>
                            <td>{{ $swa['nohp'] }}</td>
                            <td>{{ App\MControl::Get_Sekolah($swa->id_sekolah) }}</td>
                            <td>{{ $swa['program'] }}</td>
                            <td>{{ $swa['status'] }}</td>
                            <td>
                            <a href="{{ url('/data_siswa/print',$swa['no_daftar']) }}"><button type="button" class="btn bg-green btn-flat tombol"><i class="fa fa-print"></i></button></a>
                            <a href="{{ url('siswa/edit_status',$swa['no_daftar']) }}"><button type="button" class="btn bg-orange btn-flat tombol"><i class="fa fa-edit"></i></button></a>
                            <a href="{{ url('/data_siswa/edit',$swa['no_daftar']) }}"><button type="button" class="btn bg-yellow btn-flat tombol"><i class="fa fa-pencil"></i></button></a>
                            <a href="/data_siswa/delete/{{ $swa->no_daftar }}"><button type="button" class="btn bg-red btn-flat tombol"><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.box -->
</div>
@stop
