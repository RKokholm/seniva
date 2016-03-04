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
	</div>

	<div class="admin_page_area">

		<a href="{{ route('admin_project_create_path') }}" class="create_project_button">Create Project<i class="fa fa-plus"></i></a>

	</div>

@stop

