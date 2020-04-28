<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title') | Beauty Salon Cleoparta
	</title>
	<link rel="stylesheet"  href="{{ asset('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


</head>
<body>

	@include('layouts.inc.navbar')

	<div class="content">
		@yield('content')
		
	</div>

	@include('layouts.inc.footer')

	<script src = "{{ asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src = "{{ asset('frontend/js/popper.min.js')}}"></script>
	<script src = "{{ asset('frontend/js/jquery-3.4.1.js')}}"></script>
	
	@yield('scripts')

</body>
</html>