@extends('layout.main')

@section('title', 'Seniva')

@section('content')

    @include('partials.nav')

    <div class="container_medium">

	    <div class="row">

	        <div class="title">Vælg din bestillingstype</div>

			<div class="col-4">
				
				<div class="item">
					
					<div class="category_title">Enkelt produkt</div>

					<i class="fa fa-file-image-o"></i>

				</div>

			</div>
			
			<div class="col-4">
				
				<div class="item">
					
					<div class="category_title">Færdige pakker</div>

					<i class="fa fa-archive"></i>

				</div>

			</div>
			<div class="col-4">
				
				<div class="item">
					
					<div class="category_title">Byg selv</div>

					<i class="fa fa-cogs"></i>

				</div>

			</div>

	    </div>

    </div>

@stop