@extends('layout.main')

@section('title', 'Seniva')

@section('content')

    @include('partials.nav')

    <div class="container_medium">

	    <div class="row">

	        <div class="title">Vælg din bestillingstype</div>

			<div class="col-4">

				<a href="{{ URL::route('order_single_path') }}">
					
					<div class="item">
						
						<i class="fa fa-file-image-o"></i>

						<div class="category_title">Enkelt produkt</div>

						<span>Bestilling af et enkelt produkt</span>

					</div>
		
				</a>
	
			</div>
			
			<div class="col-4">
				
				<a href="{{ URL::route('order_packs_path') }}">

					<div class="item">
						
						<i class="fa fa-archive"></i>

						<div class="category_title">Færdige pakker</div>

						<span>Bestilling af en færdig pakke produkter</span>

					</div>
				
				</a>
			
			</div>
			<div class="col-4">

				<a href="{{ URL::route('order_custom_path') }}">
					
					<div class="item">
						
						<i class="fa fa-cogs"></i>

						<div class="category_title">Byg selv</div>

						<span>Skræddersy din egen pakke</span>

					</div>

				</a>				

			</div>

	    </div>

    </div>

@stop