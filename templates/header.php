<!DOCTYPE html>
<html>
<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134815320-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-134815320-1');
	</script>
	
	<?php
	$date = new DateTime();
	$timestamp = $date->format('ymdhis');
	?>
	
	<title>Little Apple Renaissance Festival</title>
	<link rel="shortcut icon" href="img/bookmark.ico">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Little Apple Renaissance Festival">
	<meta name="author" content="Ann Warren, Dane Miller">
	
	<meta name="keywords" content="Kansas, KS, Manhattan, Little Apple, Renaissance, Ren Fest, Ren Fair, Festival, Fair, Italy, Italian, Calendar, Manhattan Calendar, Little Apple Calendar, Events, Manhattan Events, Little Apple Events">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="/css/styles.css?v=<?php echo $timestamp; ?>">
	<script src="/js/swipe.js?v=<?php echo $timestamp; ?>"></script>
	<script src="/js/main.js?v=<?php echo $timestamp; ?>"></script>
	
</head>
<body>

<!-- Simulate a smartphone / tablet -->
<div class="col-container">
	
	<!-- Mobile: top nav-menu menu -->
	<!-- Desktop: column 1 left -->
	<div id="nav-menu" class="col-nav">
		
		<a href="/">Home</a>
		
		<div>About</div>
		<a href="calendar">Calendar</a>
		<a href="admission">Admission</a>
		<a href="photo-gallery">Photo Gallery</a>
		<!--<a href="schedule">Festival Schedule</a>-->
		
		<div>Become Involved</div>
		<a href="donate">Donate</a>
		<a href="sponsor">Become a Vendor</a>
		<a href="sponsor">Become a Sponsor</a>
		<a href="volunteer">Volunteer at Event</a>
		
		<div>FAQ</div>
		<!--<a href="faq">FAQ</a>-->
		<a href="contact">Contact Us</a>
		<a href="https://www.facebook.com/LittleAppleRenFest" target=_blank>Facebook</a>
		
	</div>
	<a href="javascript:void(0);" class="nav-icon" onclick="navMenu()" title="menu">
		<i class="fa fa-bars"></i>
	</a>
	<!-- End: column 1 left -->
	
	<!-- Mobile: page below nav -->
	<!-- Desktop: nav in column 1 page in column 2 -->
	<div class="col-page">
		
		<!-- Banner title -->
		<div id="banner" class="parchment-floral" title="Little Apple Renaissance Festival">
			<div></div>
			<a class="banner-mobile" href="javascript:void(0);" onclick="navMenu()"></a>
			<a class="banner-desktop" href="/"></a>
			<!--<h3>Little Apple Renaissance Festival</h3>-->
		</div>
		
		<!-- Page content start -->
		<div id="content-container">