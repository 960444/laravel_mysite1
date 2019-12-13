@extends('layouts.app')

@section('title', 'My Blog')

@section('content')
	  <div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
                @if (session('message'))
                    <p class="text-success"><b>{{ session('message') }}</b></p>
                @endif
								@if ($errors->any())
									<div>
										Errors:
										<ul>
											@foreach ($errors->all() as $error)
												<div class="text-danger"><li>{{ $error }}</li></div>
											@endforeach
										</ul>
									</div>
								@endif
                <hr>
				<div class="card">
					<div class="card-header">
						Post By: {{ $post->user->name }}
					</div>
					<div class="card-body">
						<h2 class="card-title">{{ $post->title }}</h2>
						<p class="card-text">{{ $post->content }}</p>
					</div>

					<div class="card-header">
						<i>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</i>
					</div>
				</div>
				<hr>
			</div>
		</div>





	    <h4>Comments:</h4>

			@foreach ($comments as $comment)
				<div class="card border-primary mb-3" style="max-width: 70rem;">
					@if ($user_id = auth()->user()->id === $comment->user->id)
    				<div class="card-header">Comment by: <b>{{ $comment->user->name }}</b> at <i>{{ date('M j, Y h:ia', strtotime($comment->created_at)) }}</i>
								<a href="{{ route('comments.edit', ['id' => $comment->id])  }}" class="btn btn-primary btn-sm" role="button">Edit</a>
						</div>
					@else
						<div class="card-header">Comment by: <b>{{ $comment->user->name }}</b> at <i>{{ date('M j, Y h:ia', strtotime($comment->created_at)) }}</i></div>
					@endif
					<div class="card-body text-primary">
						<p class="card-text">{{ $comment->content }}</p>
					</div>
				</div>
			@endforeach

		<div class="card border-primary mb-3" style="max-width: 70rem;">
			<div class="card-header">Comment on this blog!</div>
			<div class="card-body text-primary">
				<form method="POST" action="{{ route('comments.store', ['post_id' => $post->id])  }}">
					@csrf
					<div class="form-group">
						<textarea class="form-control" name="content" rows="5"></textarea>
					</div>
					<input type="submit" value="Post Comment" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>

		<div class="text-center" style="margin-left: 500px;margin-top: 20px;">
	    {!! $comments->links(); !!}
    </div>

	  </div>







@endsection
