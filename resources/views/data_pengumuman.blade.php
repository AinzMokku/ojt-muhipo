@extends('tamplate')

@section('judul')
Data Pengumuman
@stop

@section('content')
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <a href="{{ url('form_pengumuman') }}"><button type="button" class="btn bg-green margin">Add New</button></a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Waktu Pembuatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($summernote as $snote)
                <tr>
                    <td>{{ $snote['id'] }}</td>
                    <td>{{ $snote['feature'] }}</td>
                    <td>{{ $snote['created_at'] }}</td>
                    <td>
                    <a href="{{ url('/pengumuman/edit',$snote['id']) }}"><button type="button" class="btn bg-yellow btn-flat tombol"><i class="fa fa-pencil"></i></button></a>
                    <a link=""><button type="button" class="btn bg-red btn-flat tombol"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
