<?php
$date = new DateTime();
$timestamp = $date->format('ymdhis');
?>

<!DOCTYPE html>
<html>
<head>
<title>Little Apple Renaissance Festival</title>
<link rel="shortcut icon" href="img/bookmark.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="./css/styles.css?v=<?php echo $timestamp; ?>">
<script src="./js/main.js?v=<?php echo $timestamp; ?>"></script>
</head>
<body>

<!-- Simulate a smartphone / tablet -->
<div class="col-container">

	<!-- Mobile: top nav-menu menu -->
	<!-- Desktop: column 1 left -->
	<div id="nav-menu" class="col-mobile">
		
		<a href="?action=home">Home</a>
		
		<div>About</div>
		<a href="?action=calendar">Calendar</a>
		<a href="?action=schedule">Festival Schedule</a>
		
		<div>Become Involved</div>
		<a href="?action=donate">Donate</a>
		<a href="?action=sponsor">Become a Vendor</a>
		<a href="?action=sponsor">Become a Sponsor</a>
		<a href="?action=volunteer">Volunteer at Event</a>
		
		<div>FAQ</div>
		<a href="?action=faq">FAQ</a>
		<a href="?action=contact">Contact Us</a>
		
	</div>
	<a href="javascript:void(0);" class="nav-icon" onclick="navMenu()">
		<i class="fa fa-bars"></i>
	</a>
	<!-- End: column 1 left -->
	
	<!-- Mobile: page below -->
	<!-- Desktop: column 2 right -->
	<div class="content-container">
		
		<svg class="parchment">
		  <defs>
			<filter id="filter1" height="1.4" width="1.4">
			  <feTurbulence baseFrequency="0.12" numOctaves="2" type="fractalNoise" result="result1" />
			  <feDisplacementMap in2="result1" scale="99" result="result2" xChannelSelector="R" in="SourceGraphic" />
			  <feComposite in2="result2" in="SourceGraphic" operator="atop" result="fbSourceGraphic" />
			</filter>
			<filter id="filter2" height="1.4" width="1.4">
			  <feTurbulence baseFrequency="0.02" numOctaves="2" type="fractalNoise" result="result1" />
			  <feDisplacementMap in2="result1" scale="99" result="result2" xChannelSelector="R" in="SourceGraphic" />
			  <feComposite in2="result2" in="SourceGraphic" operator="atop" result="fbSourceGraphic" />
			</filter>
			<filter id="filter3" height="1.4" width="1.4">
			  <feTurbulence baseFrequency="10.02" numOctaves="3" type="fractalNoise" result="result1" />
			  <feDisplacementMap in2="result1" scale="99" result="result2" xChannelSelector="R" in="SourceGraphic" />
			  <feComposite in2="result2" in="SourceGraphic" operator="atop" result="fbSourceGraphic" />
			</filter>
		  </defs>
		  <rect fill="#83662C" width="100%" height="100%" x="0" y="0" />
		  <rect fill="#C0AC79" filter="url(#filter1)" width="100%" height="100%" x="0" y="0" />
		  <rect fill="#CDC5B4" filter="url(#filter2)" width="90%" height="90%" x="5%" y="5%" />
		  <rect fill="#E0DAD0" filter="url(#filter3)" width="90%" height="90%" x="5%" y="5%" />
		</svg>
		
		<!-- Banner title -->
		<div id="banner" title="Little Apple Renaissance Festival">
			<a class="banner-mobile" href="javascript:void(0);" onclick="navMenu()"><img src="./img/banner.png"></a>
			<a class="banner-desktop" href="?action=home"><img src="./img/banner.png"></a>
			<!--<div>Little Apple Renaissance Festival</div>-->
		</div>
		
		<!-- Page content -->
		<div id="nav-content" class="col-mobile">