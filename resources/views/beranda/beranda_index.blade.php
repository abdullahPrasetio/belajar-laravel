<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('wedding/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('wedding/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('wedding/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('wedding/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('wedding/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('wedding/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('wedding/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('wedding/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Wedding<strong>.</strong></a></div>
				</div>
			</div>
			
		</div>
	</nav>

	<?php
		$banner = \DB::table('banner')->first();
	?>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ asset('uploads/'.$banner->gambar) }});background-size: 100%;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>{{ $banner->nama1 }} &amp; {{ $banner->nama2 }}</h1>
							<h2>{{ $banner->title }}</h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php
		$penganten = \DB::table('penganten')->first();
	?>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>{{ $penganten->salam }}</h2>
					<h3>{{ $penganten->tanggal }}</h3>
					<p>{{ $penganten->title }}</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="{{asset('uploads/'.$penganten->gambar1)}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>{{ $penganten->nama1 }}</h3>
						<p>{{ $penganten->keterangan1 }}</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="{{asset('uploads/'.$penganten->gambar2)}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>{{ $penganten->nama2 }}</h3>
						<p>{{ $penganten->keterangan2 }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url({{asset('wedding/images/img_bg_3.jpg')}});">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<!-- <span>Our Special Events</span> -->

					<h2>{{ \DB::table('acara_title')->where('acara_title_id',1)->value('title') }}</h2>
				</div>
			</div>
			<?php
				$akad = \DB::table('acara_akad')->first();
				$resepsi = \DB::table('acara_resepsi')->first();
			?>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>{{ $akad->nama }}</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>{{ $akad->jam1 }}</span>
										<span>{{ $akad->jam2 }}</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>{{ $akad->tanggal1 }}</span>
										<span>{{ $akad->tanggal2 }}</span>
									</div>
									<p>{{ $akad->keterangan }}</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>{{ $resepsi->nama }}</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>{{ $resepsi->jam1 }}</span>
										<span>{{ $resepsi->jam2 }}</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>{{ $resepsi->tanggal1 }}</span>
										<span>{{ $resepsi->tanggal2 }}</span>
									</div>
									<p>{{ $resepsi->keterangan }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		$st = \DB::table('story_title')->first();
		$story = \DB::table('story')->orderBy('story_id','asc')->get();
	?>

	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>{{ $st->title1 }}</span>
					<h2>{{ $st->title2 }}</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						@foreach($story as $index=>$rt)
						<?php
							$kelas = '';
							if($index % 2 != 0){
								$kelas = 'timeline-inverted animate-box';
							}else{
								$kelas = 'animate-box';
							}
						?>
						<li class="{{$kelas}}">
							<div class="timeline-badge" style="background-image:url({{asset('uploads/'.$rt->gambar)}});"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">{{ $rt->judul }}</h3>
									<span class="date">{{ $rt->tanggal }}</span>
								</div>
								<div class="timeline-body">
									<p>{{ $rt->keterangan }}</p>
								</div>
							</div>
						</li>
						@endforeach
			    	</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>{{ \DB::table('jasa_title')->value('title') }}</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-circle"></i>
						</span>
						<div class="feature-copy">
							<h3>{{ \DB::table('jasa_tenda')->value('nama') }}</h3>
							<p>{{ \DB::table('jasa_tenda')->value('keterangan') }}</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>{{ \DB::table('jasa_rias')->value('nama') }}</h3>
							<p>{{ \DB::table('jasa_rias')->value('keterangan') }}</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>{{ \DB::table('jasa_photo')->value('nama') }}</h3>
							<p>{{ \DB::table('jasa_photo')->value('keterangan') }}</p>
						</div>
					</div>

				</div>
			</div>

			
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						<small class="block">Modified by <a href="http://sangcahaya.com/" target="_blank">sangcahaya.com</a> | Fadly Shafa</small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('wedding/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('wedding/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('wedding/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('wedding/js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('wedding/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('wedding/js/jquery.countTo.js')}}"></script>

	<!-- Stellar -->
	<script src="{{asset('wedding/js/jquery.stellar.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('wedding/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('wedding/js/magnific-popup-options.js')}}"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="{{asset('wedding/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('wedding/js/main.js')}}"></script>

	<script>
    var d = new Date(new Date("{{ $banner->waktu_mundur }}").getTime());

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>

