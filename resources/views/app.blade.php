<!DOCTYPE html>
<html ng-app="jmApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TUTACOIN - @yield('title', '[DEMO] Tempatnya jual beli BITCOIN yang tercepat, termudah dan terpercaya.')</title>
	<meta name="description" content="@yield('description', 'TUTACOIN adalah website layanan jual beli bitcoin Terpercaya')">
	<meta name="author" content="Irfan Mahfudz Guntur">
	<meta name="Copyright" content="DIGITAL TUTA NETWORK - mytuta.com" />
	<meta name="revised" content="TutaCOIN v0.4" />
	<meta name="Keywords" content="demo, aplikasi, website, jual, beli, bitcoin" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="all" />
	<link rel="image_src" href="{{url('/images/kiosbitcoin.jpg')}}" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
	<link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/socicon/css/socicon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/mobirise/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/mobirise/css/mbr-additional.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/mytuta/css/mytuta.css') }}">
	<link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
	<link rel="shortcut icon" href="{{ asset('/images/tutaico.png') }}" type="image/x-icon" />
</head>
<body>
	@include('app-menu')
	@yield('content')


	<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-9" style="background-color: rgb(60, 60, 60);">

	    <div class="mbr-section__container container">
	        <div class="mbr-contacts mbr-contacts--wysiwyg row">
	            <div class="col-sm-4">
	                <img class="mbr-contacts__img mbr-contacts__img--left" alt="" src="/assets/images/footer-logo.png">
	            </div>
	            <div class="col-sm-8">
	                <div class="row">
	                    <div class="col-sm-4">
	                        <p class="mbr-contacts__text"><strong>ALAMAT</strong><br>
	Lorem ipsum dolor<br>
	Lorem ipsum dolor<br />
	Lorem ipsum dolor Lorem ipsum<br />
	Lorem ipsum</p>
	                    </div>
	                    <div class="col-sm-4">
	                        <p class="mbr-contacts__text"><strong>KONTAK</strong><br>
														<i class="fa fa-phone"></i>&nbsp;&nbsp;: +62000 0000 0000<br>
														<i class="fa fa-envelope-o"></i>&nbsp;: +62000 0000 0000<br>
														<i class="fa fa-whatsapp"></i>&nbsp;&nbsp;: +62000 0000 0000</p>
	                    </div>
	                    <div class="col-sm-4"><p class="mbr-contacts__text"><strong>MENU</strong></p><ul class="mbr-contacts__list">
												<li><a class="mbr-contacts__link text-gray" href="/">Beranda</a></li>
												<li><a class="mbr-contacts__link text-gray" href="{{ url('/jual') }}">Jual Bitcoin</a></li>
												<li><a class="mbr-contacts__link text-gray" href="{{ url('/beli') }}">Beli Bitcoin</a></li>
												</ul></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-10" style="background-color: rgb(68, 68, 68);">

	    <div class="mbr-section__container container">
	        <div class="mbr-footer mbr-footer--wysiwyg row">
	            <div class="col-sm-12">
	                <p class="mbr-footer__copyright">Copyright (c) 2015 DIGITAL TUTA NETWORK. You are using <a class="mbr-footer__link text-gray" href="http://fly.mytuta.com/tutacoin">TutaCOIN</a>  v0.4 by <a class="mbr-footer__link text-gray" href="https://twitter.com/tutacare">Irfan Mahfudz Guntur</a></p>
	            </div>
	        </div>
	    </div>
	</footer>

	<!-- Scripts -->
<script src="{{ asset('/assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/bower_components/angular/angular.min.js') }}"></script>
<script src="{{ asset('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/smooth-scroll/SmoothScroll.js') }}"></script>
<script src="{{ asset('/assets/jarallax/jarallax.js') }}"></script>
<script src="{{ asset('/assets/social-likes/social-likes.js') }}"></script>
<script src="{{ asset('/assets/mobirise/js/script.js') }}"></script>
<script src="{{ asset('/mytuta/js/mytuta.js') }}"></script>
</body>
</html>
