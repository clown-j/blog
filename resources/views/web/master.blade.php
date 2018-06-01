<!doctype html>
<html lang="en">
<head>
	<title>Typography</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="web/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="web/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="web/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="web/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="web/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="web/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="web/assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
        {{--  NAVBAR  --}}
        @include('web.component.navbar')
        {{--  END NAVBAR  --}}

        {{--  LEFT SIDEBAR  --}}
        @include('web.component.sidebar')
        {{--  END LEFT SIDEBAR  --}}

		{{--  MAIN  --}}
		<div class="main">

            {{--  MAIN CONTENT  --}}
            @yield('content')
            {{--  END MAIN CONTENT  --}}

		</div>
		{{--  END MAIN  --}}
		<div class="clearfix"></div>


        {{--  FOOTER  --}}
        @include('web.component.footer')
        {{--  END FOOTER  --}}


	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="web/assets/vendor/jquery/jquery.min.js"></script>
	<script src="web/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="web/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="web/assets/scripts/klorofil-common.js"></script>
</body>

</html>
