
@extends('layouts.app')

@section('title', 'Edit Post')


@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<h1>Edit Post</h1>
				@if ($errors->any())
					<div>
						Errors:
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<hr>
				<form method="POST" action="#">
					@csrf
					<div class="form-group">
						<label for="title">Post Title:</label>
						<input type="input" type="text" class="form-control" name="title" value="Title">
					</div>
					<div class="form-group">
						<label for="content">Post Content:</label>
						<textarea class="form-control" name="content" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="tag">Tags:</label>
						<input type="input" class="form-control" name="tags">
					</div>
					<input type="submit" value="Create!" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>
</div>
@endsection
