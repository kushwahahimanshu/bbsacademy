<!DOCTYPE html>
<html class="no-js" lang="">
	<head>

		@include('common.meta')
		@include('common.css')
	</head>
	<body style="background-color: rgba(0,0,0,0);">
		<!-- Main Body Area Start Here -->
		<div id="wrapper">
			@include('common.header')

			@yield('main_body')

			@include('common.footer')
		</div>
		@include('common.js')
	</body>
</html>