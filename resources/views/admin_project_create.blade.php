@extends('layout.main')



	@if(isset($errors))
	
		@foreach($errors->all() as $error)
			{{ $error }}

		@endforeach

	@endif

<div class="form_area">
	<div class="title">Create Project</div>
		<form action="{{ Route('project.store') }}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<input type="text" name="title" maxlength="20" placeholder="Title" required><br>
			<textarea placeholder="Description" cols="30" rows="10" name="description" maxlength="650" wrap="hard" required></textarea><br>
			<label for="image_file" class="file_upload_button" id="file_upload_button_id">Choose images<i class="fa fa-cloud-upload" id="cloud"></i></label><br>
			<input type="file" name="image_file" id="image_file" onchange="buttonChange()" multiple required><br>
			<input type="submit" value="Create"><a href="{{ route('admin_projects_path') }}">Back</a>
		</form>
</div>

