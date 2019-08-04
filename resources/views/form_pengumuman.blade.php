@extends('tamplate')

@section('judul')
Pengumuman
@stop

@section('content')

<form id="frmPengumuman" action="{{ route('summernoteeditor.post') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $summernote['id'] }}">
    <label for="usr">Judul:</label>
        <input type="text" class="form-control" name="feature" value="{{ $summernote['feature'] }}">
    </div>
        <div class="form-group">
            <strong>Konten:</strong>
            <textarea class="form-control summernote" name="detail">{{ $summernote['content'] }}</textarea>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@stop