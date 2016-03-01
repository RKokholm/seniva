		<div id="footer">


				<div class="col-4">
					
					@if(Auth::check())

						<a href="{{ route('logout_path') }}"><div class="team_login">Logout</div></a>

					@else

						<a href="{{ route('login_path') }}"><div class="team_login">Team</div></a>	

					@endif

				</div>

				<div class="col-4">	

				Copyright @ 2015 | Seniva - All Rights Reserved

				</div>

				<div class="col-4"></div>

		</div>