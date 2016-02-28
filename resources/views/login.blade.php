@extends('layout.main')

@section('content')

	<div id="login_cover">


		<div class="login_area">
			
			<a href="{{ route('home_path') }}"><img src="/images/logosenivawhite.png"></a>
			
			@if (session('errors'))
	
				<div class="error_box">
					{{ session('errors') }}
				</div>

			@endif

			<form action="/login" method="POST">

				<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				<div class="form_group">
					<input type="text" name="username" placeholder="Username" required>
				</div>

				<div class="form_group">
					<input type="password" name="password" placeholder="Password" required>
				</div>

				<div class="form_group">
					<input type="submit" value="Login">
				</div>

			</form>

		</div>

	</div>

@stop

