@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">
                    <div class="jumbotron">
                        <h3 class="display-4">Welcome to BlogSpot!</h3>
                        <p class="lead">Here you can create, view and comment on countless amounts of blog posts.</p>
                        <hr class="my-4">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg" role="button">Create a Post</a></td>
                     </div>
                 </div>
            </div>
        </div>
    </div>

    @foreach ($posts as $post)
    <div class="card">
        <div class="card-header">
            {{ date('M j, Y h:ia', strtotime($post->created_at)) }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text"> {{ $post->content }}</p>
            <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-secondary" role="button">View Post</a>
        </div>
    </div>
    @endforeach

    

    <div class="text-center" style="margin-left: 500px;margin-top: 20px;">
	    {!! $posts->links(); !!}
    </div>


@endsection
