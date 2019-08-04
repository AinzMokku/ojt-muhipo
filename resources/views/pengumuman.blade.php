@extends('tamplate_fend')

@section('content_fend')

  <div style="position:center;margin-top:100px;">
		<div class="container">
				<div class="col-md-12">
					<div class="jumbotron">
						<h2 class="display-4">{{ $note['feature'] }}</h2>
						<p class="lead" style="font-size:inherit;">{{ $note['created_at'] }}</p>
						<hr>
						<p style="max-width:990px !important;">{!! $note['content'] !!}</p>
						<br>
						<a href="{{ url('/pengumuman/next',$note['id']) }}" class="btn btn-primary">Pengumuman Terbaru</a>
						<a href="{{ url('/pengumuman/prev',$note['id']) }}" style="margin-left: 63%;" class="btn btn-primary">Pengumuman Sebelumnya</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
@stop