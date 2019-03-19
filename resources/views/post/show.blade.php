@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<div class="panel panel-default">
					<div class="panel-heading">
						{{ $post->title }} | <small>{{ $post->category->name }}</small>
					</div>

					<div class="panel-body">
						<p>{{ $post->content }}</p>
						<a href="{{ route('post.index') }}" class="btn btn-xs btn-primary">Kembali</a>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection