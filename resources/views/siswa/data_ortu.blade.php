@extends('tamplate')

@section('judul')
Data Orang Tua
@stop

@section('subjudul')
detail
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <form action="{{ route('imOrtu') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <button class="btn btn-info margin">Import Orang Tua Data</button>
            <a class="btn btn-warning margin" href="{{ route('exOrtu') }}">Export Orang Tua Data</a>
            <input type="file" name="file" class="form-control" style="width:20% !important;">
        </form>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Alamat Ayah</th>
                    <th>No Hp Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Alamat Ibu</th>
                    <th>No Hp Ibu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orangtua as $ortu)
                <tr>
                    <td>{{ App\MControl::Get_Siswa($ortu->no_daftar) }}</td>
                    <td>{{ $ortu['nama_ayah'] }}</td>
                    <td>{{ $ortu['pekerjaan_ayah'] }}</td>
                    <td>{{ $ortu['alamat_ayah'] }}</td>
                    <td>{{ $ortu['nohp_ayah'] }}</td>
                    <td>{{ $ortu['nama_ibu'] }}</td>
                    <td>{{ $ortu['pekerjaan_ibu'] }}</td>
                    <td>{{ $ortu['alamat_ibu'] }}</td>
                    <td>{{ $ortu['nohp_ibu'] }}</td>
                    <td>
                    <a href="{{ url('/data_siswa/print',$ortu['no_daftar']) }}"><button type="button" class="btn bg-green btn-flat  tombol"><i class="fa fa-print"></i></button></a>
                    <a href="{{ url('/data_siswa/edit',$ortu['no_daftar']) }}"><button type="button" class="btn bg-yellow btn-flat tombol"><i class="fa fa-pencil"></i></button></a>
                    <a link="/data_siswa/delete/{{ $ortu->no_daftar }}"><button type="button" class="btn bg-red btn-flat tombol"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
