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
						<a href="{{ route('post.index') }}" class="btn btn-xs btn-primary pull-right">Kembali</a>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						Tambahkan Komentar
					</div>

					<div class="panel-body">
						<form action="{{ route('post.comment.store', $post) }}" method="post" class="form-horizontal">
							{{ csrf_field() }}
							<textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Berikan komentar ..."></textarea>
							<input type="submit" value="Komentar" class="btn btn-primary">
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection