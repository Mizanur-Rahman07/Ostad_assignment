<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mizanur Portfolio - @yield('title')</title>
    <!-- Bootstrap CSS -->

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

	<!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all" />
</head>
<body>
	<!-- Header Section -->
  @include('components.header')

  @yield('content')

  <!-- Footer Section -->
  @include('components.footer')
	
	
	
    <!-- Bootstrap JS and Popper.js -->
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   
</body>
</html>
