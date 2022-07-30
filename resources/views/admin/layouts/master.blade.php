<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>byu Admin</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('img/icon.ico')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('css/fonts.min.css') }}">
	
	<!-- Fonts and icons -->
	<script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/atlantis.min.css')}}">
</head>
<body>
	<div class="wrapper sidebar_minimize">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')
		<div class="main-panel">
			@yield('content')
			@include('admin.layouts.footer')
		</div>
	</div>
	<!--   Core JS Files   -->
@include('admin.layouts.script')
</body>
</html>