@extends('tamplate')

@section('judul')
Data Sekolah
@stop

@section('subjudul')
detail
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ url('sekolah/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Sekolah</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($sekolah as $skl)
                <tr>
                    <td>{{ $skl['id_sekolah'] }}</td>
                    <td>{{ $skl['nama_sekolah'] }}</td>
                    <td>{{ $skl['alamat_sekolah'] }}</td>
                    <td>
                    <a href="{{ url('/sekolah/edit',$skl['id_sekolah']) }}"><button type="button" class="btn bg-yellow btn-flat tombol"><i class="fa fa-pencil"></i></button></a>
                    <a link="{{ url('/sekolah/delete',$skl['id_sekolah']) }}"><button type="button" class="btn bg-red btn-flat tombol"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
