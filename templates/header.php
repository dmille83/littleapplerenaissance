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
	<div id="nav-menu" class="col-mobile parchment">
		
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
		
		<div class="background parchment-floral"></div>
		
		<!-- Banner title -->
		<div id="banner" title="Little Apple Renaissance Festival">
			<a class="banner-mobile" href="javascript:void(0);" onclick="navMenu()"><img src="./img/banner.png"></a>
			<a class="banner-desktop" href="?action=home"><img src="./img/banner.png"></a>
			<!--<div>Little Apple Renaissance Festival</div>-->
		</div>
		
		<!-- Page content -->
		<div id="nav-content" class="col-mobile">