<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doctor's | @yield('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
	@yield('content')
	@include('Doctor.Auth.includes.footer')

</body>
</html>