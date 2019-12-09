@extends('layouts.app')

@section('title', 'MyPosts')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">	
				<hr>
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">My Posts</h2>
					</div>
				</div>			
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>Post Id</th>
						<th>Title</th>
						<th>Date Created</th>
						<th></th>
					</thead>
					<tbody>
				        <tr>
					        <td>1</td>
					        <td>The Title Of The Post</td>
					        <td>02/09/2019</td>
					        <td><a href="{{ route('posts.edit') }}" class="btn btn-primary btn-sm" role="button">Edit</a>
                            <a href="{{ route('posts.view') }}" class="btn btn-primary btn-sm" role="button">View</a></td>
				        </tr>
                        <tr>
					        <td>1</td>
					        <td>The Title Of The Post</td>
					        <td>02/09/2019</td>
					        <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
					        <button type="button" class="btn btn-primary btn-sm">View</button></td>
				        </tr>
                        <tr>
					        <td>1</td>
					        <td>The Title Of The Post</td>
					        <td>02/09/2019</td>
					        <td><button type="button" class="btn btn-primary btn-sm">Edit</button>
					        <button type="button" class="btn btn-primary btn-sm">View</button></td>
				        </tr>
			        </tbody>
                </table>
            </div>
	  </div>
@endsection
