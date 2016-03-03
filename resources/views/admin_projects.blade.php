@extends('layout.main')

@section('title', 'Seniva | Admin')

@section('content')

	@include('partials.admin_sidebar')

	<div class="admin_header">MANAGE PROJECTS</div>
	
	<div class="admin_page_area">

			@if(isset($projects))
	
				@foreach($projects->all() as $project)
						
					@foreach($project->images as $project_image)

								<div class="image_preview">
									<img src="{{ cloudinary_url($project_image->public_id, ['cloud_name' => 'seniva', 'crop' => 'fill', 'width' => '200', 'height' => '200']) }}">
										<div class="hover_over">
											
											<div class="image_content">

												<a href="{{ route('project.edit', $project->id) }}" class="fa fa-pencil"></a>
												
												<form action="{{ route('project.destroy', $project->id) }}" method="POST">
													<input type="hidden" name="_token" value="{!! csrf_token() !!}">
													<input type="hidden" name="_method" value="DELETE">
													<button type="submit" class="fa fa-trash-o"></button>
												</form>
												

												<div class="project_title">{{ $project->title }}</div>
												
											</div>

										</div>
									</img>
								</div>

					@endforeach

				@endforeach

			@endif


			<div class="col-8">

				<span class="admin_page_title">ADD PROJECT</span>

				@if(isset($errors))
				
					@foreach($errors->all() as $error)
						{{ $error }}

					@endforeach

				@endif

				<div class="col-4">
					<form action="{{ Route('project.store') }}" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="text" name="title" maxlength="20" placeholder="Title" required><br>
						<textarea placeholder="Description" name="description" maxlength="650" wrap="hard" required></textarea><br>
						<label for="image_file" class="file_upload_button" id="file_upload_button_id">Choose images<i class="fa fa-cloud-upload" id="cloud"></i></label><br>
						<input type="file" name="image_file" id="image_file" onchange="buttonChange()" required><br>
						<input type="submit" value="Add">
					</form>
				</div>

			</div>

	</div>

@stop