@extends('layout.main')

@section('title', 'Edit Project')

@section('content')

	@include('partials.admin_sidebar')

	<div class="admin_header">Edit Project</div>

	<form action="#" method="POST" accept-charset="UTF-8">
		
		<input type="text" placeholder="Title" value="{{ $project->title }}" required><br>
		<textarea name="description" id="" cols="30" rows="10" placeholder="Description" required>{{ $project->title }}</textarea>
		<input type="submit" value="Update">
		<a href="{{ route('admin_projects_path') }}">Back</a>

	</form>

@stop