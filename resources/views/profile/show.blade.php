
@extends('layouts.app')

@section('title', 'Profile')


@section('content')
 <div class="container">
    <div class="card">
        <div class="card-header">
          <b>{{ $profile->user->name }}'s profile!</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">User Profession: {{ $profile->profession }}</h5>
            <p class="card-text"> User Description: {{ $profile->description }}</p>
            <p class="card-text"> Phone Number: {{ $profile->phone_number }}</p>
            <a href="#" class="btn btn-secondary" role="button">View Posts</a>
        </div>
    </div>
  </div>
@endsection
