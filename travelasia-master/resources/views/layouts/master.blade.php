<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Travel Asia</title>

		<link href="https://fonts.googleapis.com/css?family=Cuprum:400,700&display=swap&subset=cyrillic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('css/main.css') }}">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">

						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="/"><img src="{{ asset('img/logo.png') }}" alt=""></a>
							</div>

							<div class="main-menubar d-flex align-items-center">
								
								<nav class="hide">
									<a href="/#home">Нүүр</a>
									<a href="/#booking">Захиалах</a>
									<a href="/#package">Аялалууд</a>
									<a href="/#contact">Холбогдох</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>

								<div class="user" style="width: 22px;">
									<a href="/user/{{session('username')}}"> <span class="lnr lnr-user"></span> </a> 
								</div> 
							</div>

						</div>
					</div>
				</div>
            </header>
            

            @yield('content');


            	<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-6  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Бидний тухай</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Цахим сувгууд</h6>
								<p>Like! Comment! Share!</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
						<p class="footer-text m-0">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
			<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
			<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('js/jquery.sticky.js') }}"></script>
			<script src="{{ asset('js/parallax.min.js') }}"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>
			<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
		</body>
    </html>
    

