<div id="nav">

	<a href="{{ URL::route('home_path') }}" id="brand_container">
	
		<img id="logo" src="images/logosenivalightblue.png">
		<span id="brand">SENIVA</span>

	</a>

	<div id="menu">
		
		<ul>
			
			<a href="{{ URL::route('about_path') }}"><li>Om</li></a>
			<a href="{{ URL::route('prices_path') }}"><li>Priser</li></a>
			<a href="{{ URL::route('orders_path') }}"><li>Bestilling</li></a>
			<a href="{{ URL::route('portfolio_path') }}"><li>Portfolio</li></a>

		</ul>

	</div>

	<i class="fa fa-bars"></i>

</div>

	<div id="menu_collapsed">
		
		<ul>
			
			<a href="{{ URL::route('about_path') }}"><li>Om</li></a>
			<a href="{{ URL::route('prices_path') }}"><li>Priser</li></a>
			<a href="{{ URL::route('orders_path') }}"><li>Bestilling</li></a>
			<a href="{{ URL::route('portfolio_path') }}"><li>Portfolio</li></a>

		</ul>

	</div>