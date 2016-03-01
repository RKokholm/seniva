@extends('layout.main')

@section('content')

	@include('partials.admin_sidebar')

	<div class="admin_header">MANAGE ASSOCIATES</div>
	
	<div class="admin_page_area">

		<span class="admin_page_title">CURRENT ASSOCIATES</span>

		@if(isset($users))

			<table cellspacing="0">

					<tr>
						<td>First name</td>
						<td>Last name</td>
						<td>Email</td>
						<td>Hired</td>
						<td>Actions</td>
					</tr>
				
				@foreach ($users->all() as $user)
					
		
					<tr>
						<td>{{ $user->first_name }}</td>
						<td>{{ $user->last_name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at->format('j. F Y') }}</td>
						<td>
							<form action="{{ Route('user.destroy', $user->id) }}" method="POST">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="user_action" alt="Delete user"><i class="fa fa-times"></i></i></button>
							</form>
						
							<form action="" method="POST">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="user_action"><i class="fa fa-pencil"></i></i></button>
							</form>
						</td>
					</tr>

				@endforeach

			</table>
		
		@endif

	</div>

	<div class="admin_page_area">
		
	<div class="col-12">

		<div class="col-6">

			<span class="admin_page_title">ADD ASSOCIATE</span>

			@if(isset($errors))
			
				@foreach($errors->all() as $error)
					{{ $error }}

				@endforeach

			@endif

			<div class="form">
				<form action="{{ Route('user.store') }}" method="POST">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">

					<input type="text" name="first_name" placeholder="First Name" required><br>
					<input type="text" name="last_name" placeholder="Last Name" required><br>
					<input type="text" name="email" placeholder="Email"  required><br>
					<input type="password" name="password" placeholder="Password"  required><br>
					<input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
					<input type="submit" value="Add">

				</form>
			</div>

		</div>



		<div class="col-6">
			
			<span class="admin_page_title">ASSOCIATE STATISTICS</span>

			<div id="curve_chart" style="

			width: 800px; 
			height: 450px; 

			width: 100%; 
			height: 287px; 

			border: 1px solid #D1D1D1;
			"></div>

		</div>
	</div>

@stop