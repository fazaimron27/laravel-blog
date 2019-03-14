@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Post</div>

					<div class="panel-body">
						<form action="{{ route('post.update', $post) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('PATCH') }}
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" name="title" placeholder="Post title" value="{{ $post->title }}">
							</div>

							<div class="form-group">
								<label for="title">Category</label>
								<select name="category_id" id="" class="form-control">
									@foreach ($categories as $category)
										<option value="{{ $category->id }}"> {{ $category->name }} </option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="content">Content</label>
								<textarea name="content" id="" cols="30" rows="5" class="form-control" placeholder="Post content">{{ $post->content }}</textarea>
							</div>

							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Save">
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection