@extends('layout.main')

@section('title', 'Seniva')

@section('content')

        <div id="cover">

            @include('partials.front_page_nav')
        	
        	<div class="container_wide">
        		
        		<div class="col-8">

        			<div class="welcome_wrapper">

    	    			<span class="welcome_headline fade">Lorem Ipsum</span>
	        			<span class="welcome_underline fade">Lorem ipsum dolor sit</span>

	        		</div>

        		</div>

        	</div>

        </div>

    @include('partials.footer')

@stop