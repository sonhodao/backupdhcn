<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-slide.css">
	<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/flex.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

    @include('courses.layouts.header')
    @yield('content')
    @include('courses.layouts.footer')

</body>
</html>