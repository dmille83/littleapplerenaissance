<?php
// Page Header
include("templates/header.php");

// Photo Gallery Generator
include("templates/photos_gdrive.php");

// Load Current Page
if (!empty($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'home';
}
$action = basename($action);
if (file_exists("pages/$action.html")) {
	include("pages/$action.html");
} elseif (file_exists("pages/$action.php")) {
	include("pages/$action.php");
} else {
	//echo("<p><br/>$action</p>"); // dangerous code insertion?
	include("pages/404.html");
}

// Page View Counter
//include("templates/countlog.php");
include("templates/counter.html");

// Page Footer
include("templates/footer.php");
?>