<!DOCTYPE html>
<html lang="en">

<head>
	<title>JorisDek.nl</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Select2 css,js -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/select2/4.0.0/css/select2.min.css" />
	<link rel="stylesheet" href="/css/app.css" />

	
</head>
<body>
	

	<div class="container" style="padding:50px 0 0 0;">
		@include('particles.flash')
		
		@yield('content')
	</div>

	
	<!-- jQuery library -->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="https://cdn.jsdelivr.net/select2/4.0.0/js/select2.min.js"></script>
	@yield('footer')
	

	<script>
		$('div.alert').not('alert-important').delay(3000).slideUp(300);
	</script>

</body>
</html>