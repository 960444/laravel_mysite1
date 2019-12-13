
@extends('layouts.app')

@section('title', 'Edit comment')


@section('content')
<div class="container">
  <div class="card border-primary mb-3" style="max-width: 70rem;">
    <div class="card-header">Edit Comment</div>
    <div class="card-body text-primary">
      <form method="POST" action="{{ route('comments.update', ['id' => $comment->id])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <textarea class="form-control" name="content" rows="5">{{ $comment->content }}</textarea>
        </div>
        <input type="submit" value="Edit Comment" class="btn btn-primary btn-lg btn-block">
      </form>
    </div>
</div>
@endsection
