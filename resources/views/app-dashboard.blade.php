<!DOCTYPE html>
<html ng-app="tutasim">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TutaCOIN</title>
	<meta name="author" content="Irfan Mahfudz Guntur">
	<meta name="Copyright" content="DIGITAL TUTA NETWORK - mytuta.com" />
	<meta name="revised" content="TutaCOIN v0.4" />

	<link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('/mytuta/css/mytuta.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('/images/tutaico.png') }}" type="image/x-icon" />
</head>
<body>

	@include('menu-dashboard')
	@yield('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div align="right" class="text-success"><em>*Server Berlaku 12.12.2015 s/d 12.01.2016</em></div>
			</div>
		</div>
	</div>

	<footer class="footer hidden-print">
      <div class="container">
        <p class="text-muted">You are using <a href="http://fly.mytuta.com/tutacoin">TutaCOIN</a> v0.4 by <a href="https://twitter.com/tutacare">Irfan Mahfudz Guntur</a>.
        </p>
      </div>
    </footer>
	<!-- Scripts -->
<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
