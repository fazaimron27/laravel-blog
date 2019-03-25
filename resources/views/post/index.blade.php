@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@foreach ($posts as $post)
					<div class="panel panel-default">
						<div class="panel-heading">
							{{ $post->title }} | <small>{{ $post->created_at->diffForHumans() }}</small>

							<div class="pull-right">
								<form action="{{ route('post.destroy', $post) }}" method="post">
									{{ csrf_field() }}
									<a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-success">Edit</a>
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-xs btn-danger">Hapus</button>
								</form>
							</div>
						</div>

						<div class="panel-body">
							<p>{{ str_limit($post->content, 100, ' ...') }}</p>
							<a href="{{ route('post.show', $post) }}" class="btn btn-xs btn-primary">Read More</a>
						</div>
					</div>
				@endforeach

					{!! $posts->render() !!}

			</div>
		</div>
	</div>
@endsection