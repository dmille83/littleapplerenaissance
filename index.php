<?php

// Config Settings / Global Variables
include("templates/config.php");

// Photo Gallery Generator
include("templates/photos-google-drive.php");

// Google Form Loader
include("templates/forms-google-forms.php");

// Wufoo Form Loader
include("templates/forms-wufoo.php");

// Page Header
include("templates/header.php");

// Load Current Page
if (!empty($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'home';
}
$action = basename($action);
if (file_exists("pages/$action.php")) {
	include("pages/$action.php");
} elseif (file_exists("pages/$action.html")) {
	include("pages/$action.html");
} else {
	//echo("<p><br/>$action</p>"); // dangerous code insertion?
	include("pages/404.html");
}

// Page View Counter
include("templates/counter.php");

// Page Footer
include("templates/footer.php");

?>