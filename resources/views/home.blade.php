@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">
                    <div class="jumbotron">
                        <h2 class="display-4">Welcome to BlogSpot!</h2>
                        <p class="lead">Here you can create, view and comment on countless amounts of blog posts.</p>
                        <hr class="my-4">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg" role="button">Create a Post</a></td>
                     </div>
                 </div>
            </div>
        </div>
    </div>

    <div class="card">
    <div class="card-header">
    Date Posted: 06/12/2019
  </div>
  <div class="card-body">
    <h5 class="card-title">Post Title</h5>
    <p class="card-text">This is where the post content will go!</p>
   
    <a href="{{ route('posts.view') }}" class="btn btn-secondary" role="button">View Post</a>
  </div>
</div>

  <div class="card">
    <div class="card-header">
    Date Posted: 06/12/2019
  </div>
  <div class="card-body">
    <h5 class="card-title">Post Title</h5>
    <p class="card-text">This is where the post content will go!</p>
    <a href="#" class="btn btn-secondary">View Post</a>
  </div>
</div>


  <div class="card">
    <div class="card-header">
    Date Posted: 06/12/2019
  </div>
  <div class="card-body">
    <h5 class="card-title">Post Title</h5>
    <p class="card-text">This is where the post content will go!</p>
    <a href="#" class="btn btn-secondary">View Post</a>
  </div>
</div>


</div>
@endsection
