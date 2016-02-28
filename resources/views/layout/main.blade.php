<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel=“stylesheet” href=“https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css”/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:600,600italic,400italic,700,700italic,800,800italic,300,300italic,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin:400,500,400italic,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic|Roboto+Condensed:400,700italic,700,400italic,300,300italic|Source+Sans+Pro:400,200italic,200,300,300italic,400italic,600,600italic,700,700italic,900,900italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300,300italic,100,100italic' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script>

			$(document).ready(function(){

				$('.fa.fa-bars').click(function(){

					$('#menu_collapsed').slideToggle();

				});

			});

			$(document).ready(function(){
   				$(".fade").hide(0).delay(600).fadeIn(1800)
			});

			$(function() {
			    $('.error_box').delay(3000).fadeOut('slow');
			});

	</script>

	<link rel="icon" href="/images/logosenivablue.png">

</head>
<body>


	<div id="content">
		@yield('content')
    </div>


  
    	

</body>
</html>