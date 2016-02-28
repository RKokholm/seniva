@extends('layout.main')

@section('content')

	@include('partials.admin_sidebar')

	<div class="admin_header">MANAGE ASSOCIATES</div>

	@if(isset($errors))
	
		@foreach($errors->all() as $error)
			{{ $error }}

		@endforeach

	@endif

	<div class="form">
		<form action="{{ Route('user.store') }}" method="POST">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">

			<input type="text" name="first_name"><br>
			<input type="text" name="last_name"><br>
			<input type="text" name="email"><br>
			<input type="password" name="password"><br>
			<input type="password" name="password_confirmation"><br>
			<input type="submit">

		</form>
	</div>

@stop