<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('tile_front')</title>

		{{-- <meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template"> --}}
        @yield('head_front')
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{url('assets/img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{url('img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href={{url("assets/vendor/bootstrap/css/bootstrap.min.css")}}>
		<link rel="stylesheet" href={{url("assets/vendor/fontawesome-free/css/all.min.css")}}>
		<link rel="stylesheet" href={{url("assets/vendor/animate/animate.compat.css")}}>
		<link rel="stylesheet" href={{url("assets/vendor/simple-line-icons/css/simple-line-icons.min.css")}}>
		<link rel="stylesheet" href={{url("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}>
		<link rel="stylesheet" href={{url("assets/vendor/owl.carousel/assets/owl.theme.default.min.css")}}>
		<link rel="stylesheet" href={{url("assets/vendor/magnific-popup/magnific-popup.min.css")}}>

		<!-- Theme CSS -->
		<link rel="stylesheet" href={{url("assets/css/theme.css")}}>
		<link rel="stylesheet" href={{url("assets/css/theme-elements.css")}}>
		<link rel="stylesheet" href={{url("assets/css/theme-blog.css")}}>
		<link rel="stylesheet" href={{url("assets/css/theme-shop.css")}}>

		<!-- Demo CSS -->
		<link rel="stylesheet" href={{url("assets/css/demos/demo-digital-agency-2-dark.css")}}>

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href={{url("assets/css/skins/skin-digital-agency-2.css")}}>

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href={{url("assets/css/custom.css")}}>

		<!-- Head Libs -->
		<script src={{url("assets/vendor/modernizr/modernizr.min.js")}}></script>
        @stack('css_scripts')

	</head>

<body data-plugin-page-transition>
    @yield('content')


    	<!-- Vendor -->
		<script src='{{url("assets/vendor/jquery/jquery.min.js")}}'></script>
		<script src='{{url("assets/vendor/jquery.appear/jquery.appear.min.js")}}'></script>
		<script src='{{url("assets/vendor/jquery.easing/jquery.easing.min.js")}}'></script>
		<script src='{{url("assets/vendor/jquery.cookie/jquery.cookie.min.js")}}'></script>
		<script src='{{url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
		<script src='{{url("assets/vendor/jquery.validation/jquery.validate.min.js")}}'></script>
		<script src='{{url("assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js")}}'></script>
		<script src='{{url("assets/vendor/jquery.gmap/jquery.gmap.min.js")}}'></script>
		<script src='{{url("assets/vendor/lazysizes/lazysizes.min.js")}}'></script>
		<script src='{{url("assets/vendor/isotope/jquery.isotope.min.js")}}'></script>
		<script src='{{url("assets/vendor/owl.carousel/owl.carousel.min.js")}}'></script>
		<script src='{{url("assets/vendor/magnific-popup/jquery.magnific-popup.min.js")}}'></script>
		<script src='{{url("assets/vendor/vide/jquery.vide.min.js")}}'></script>
		<script src='{{url("assets/vendor/vivus/vivus.min.js")}}'></script>

		<!-- Theme Base, Components and Settings -->
		<script src='{{url("assets/js/theme.js")}}'></script>

		<!-- Current Page Vendor and Views -->
		<script src='{{url("assets/js/views/view.contact.js")}}'></script>

		<!-- Theme Custom -->
		<script src='{{url("assets/js/custom.js")}}'></script>

		<!-- Theme Initialization Files -->
		<script src='{{url("assets/js/theme.init.js")}}'></script>

    @stack('js_scripts')
</body>
</html>
