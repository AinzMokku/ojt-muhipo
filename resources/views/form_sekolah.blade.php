@extends('tamplate')

@section('judul')
Form Sekolah
@stop

@section('content')
<form id="frmAddSekolah" class="form-horizontal" action="{{ url('/sekolah/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Sekolah</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_sekolah" class="col-sm-2 control-label">Nama Sekolah</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_sekolah" value="{{ $sekolah['id_sekolah'] }}">
                            <input type="text" class="form-control" id="nama_sekolah" placeholder="Nama Sekolah" name="nama_sekolah" value="{{ $sekolah['nama_sekolah'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat Sekolah</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat Sekolah" name="alamat_sekolah">{{ $sekolah['alamat_sekolah'] }}</textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop