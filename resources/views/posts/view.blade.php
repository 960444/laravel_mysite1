@extends('layouts.app')

@section('title', 'My Blog')

@section('content')
	  <div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<hr>
				<div class="card">
					<div class="card-header">
						Post By: Author                                               
					</div>
					<div class="card-body">
						<h2 class="card-title">Post Title</h2>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					</div>
					
					<div class="card-header">
						<i>Date Posted: 05/12/2019</i>
					</div>
				</div>
				<hr>
			</div>
		</div>
		



			<h4>Comments:</h4>
		</div>
		<div class="card border-primary mb-3" style="max-width: 70rem;">
			<div class="card-header">User said:</div>
			<div class="card-body text-primary">
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		
		<div class="card border-primary mb-3" style="max-width: 70rem;">
			<div class="card-header">User said:</div>
			<div class="card-body text-primary">
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-primary mb-3" style="max-width: 70rem;">
			<div class="card-header">Comment on this blog!</div>
			<div class="card-body text-primary">
				<form method="POST" action="#">
					@csrf
					<div class="form-group">
						<textarea class="form-control" name="content" rows="5"></textarea>
					</div>
					<input type="submit" value="Post Comment" class="btn btn-primary btn-lg btn-block">
				</form>
			</div>
		</div>
	  </div>
@endsection