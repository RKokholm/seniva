@extends('layout.main')

@section('title', 'Seniva')

@section('content')

        <div id="cover">

            @include('partials.front_page_nav')
        	
        	<div class="container_wide">
        		
        		<div class="col-8">

        			<div class="welcome_wrapper">

    	    			<h1>Hi, we are Seniva</h1>
	        			<h2>The spark that ignites your dream</h2>

                        <a href="#" class="call_to_action">Our Work</a>

	        		</div>

        		</div>

        	</div>

        </div>

    @include('partials.footer')

@stop