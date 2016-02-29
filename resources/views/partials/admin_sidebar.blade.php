	<div class="admin_side_panel">

		<a href="{{ route('home_path') }}" class="admin_return"><i class="fa fa-angle-double-left"></i></a>

		<div class="admin_welcome">

			
			<h2>WELCOME</h2>
			<h3>{{ mb_strtoupper(Auth::user()->first_name) }} {{ mb_strtoupper(Auth::user()->last_name) }}</h3>


		</div>

		<nav class="admin_nav">
			
			<ul>
				
				<a href="{{ route('admin_path') }}"><li>DASHBOARD</li></a>
				<a href="{{ route('admin_users_path') }}"><li>MANAGE ASSOCIATES</li></a>
				<a href="{{ route('admin_projects_path') }}"><li>MANAGE PROJECTS</li></a>

			</ul>

		</nav>

	</div>