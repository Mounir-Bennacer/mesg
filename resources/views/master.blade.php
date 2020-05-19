<!DOCTYPE html>

<!--
Author : Mounir Bennacer
Website: http://mounirbennacer.dev
Contact: contact@mounirbennacer.dev
-->

<!--
   __  __  ___  _   _ _  _ ___ ___   ___ ___ _  _ _  _   _   ___ ___ ___
  |  \/  |/ _ \| | | | \| |_ _| _ \ | _ ) __| \| | \| | /_\ / __| __| _ \
  | |\/| | (_) | |_| | .` || ||   / | _ \ _|| .` | .` |/ _ \ (__| _||   /
  |_|  |_|\___/ \___/|_|\_|___|_|_\ |___/___|_|\_|_|\_/_/ \_\___|___|_|_\
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!-- begin::Head -->
    <head>
        <base href="">
        <meta charset="utf-8" />
        <title>APPI | @yield('title')</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700|Roboto:300,400,500,600,700">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Raleway&family=Roboto&family=Oswald&display=swap" rel="stylesheet"> -->

        <!--end::Fonts -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <!-- <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet" type="text/css" > -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    </head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!--[html-partial:include:{"file":"layout.html"}]/-->
		@include("layouts.layout")

		<!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
          var KTAppOptions = {
            "colors": {
              "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
              },
              "base": {
                "label": [
                  "#c5cbe3",
                  "#a1a8c3",
                  "#3d4465",
                  "#3e4466"
                  ],
                "shape": [
                  "#f0f3ff",
                  "#d9dffa",
                  "#afb4d4",
                  "#646c9a"
                ]
              }
            }
          };
    </script>
		<!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
        @yield('scripts')
		<!--end::Page Scripts -->
	</body>
	<!-- end::Body -->
</html>
