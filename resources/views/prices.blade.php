@extends('layout.main')

@section('title', 'Seniva')

@section('content')

    @include('partials.nav')

    <div class="container">
			
			<div class="seperator">

				<div class="row">
					
					<div class="col-4"> <div class="left_line"></div> </div>
					<div class="col-4 change_pos">Enkeltløsninger</div>
					<div class="col-4"> <div class="right_line"></div> </div>

				</div>

			</div>
	
	<div class="price_wrapper">

		   <div class="row">

			        <div class="col-3">
			        	
			        	<div class="item"></div>

			        </div>

			        <div class="col-3">
			        	
			      		<div class="item"></div>

			        </div>


			        <div class="col-3">
			        	
			        	<div class="item"></div>
			        	
			        </div>


			        <div class="col-3">
			        	
						<div class="item"></div>

			        </div>
		   
			</div>

		</div>

			<div class="seperator">

				<div class="row">
					
					<div class="col-4"> <div class="left_line"></div> </div>
					<div class="col-4 change_pos">Pakkeløsninger</div>
					<div class="col-4"> <div class="right_line"></div> </div>

				</div>

			</div>

		<div class="row">
			
			<div class="col-3">
			        	
			    <div class="item"></div>

			</div>

	        <div class="col-3">
	        	
	      		<div class="item"></div>

	        </div>


	        <div class="col-3">
	        	
	        	<div class="item"></div>
	        	
	        </div>


	        <div class="col-3">
	        	
				<div class="item"></div>

	        </div>
		        
		</div>

	</div>

@stop