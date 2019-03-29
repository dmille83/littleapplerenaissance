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
if (!empty($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}
$page = basename($page);
if (file_exists("pages/$page.php")) {
	include("pages/$page.php");
} elseif (file_exists("pages/$page.html")) {
	include("pages/$page.html");
} else {
	//echo("<p><br/>$page</p>"); // dangerous code insertion?
	include("pages/404.html");
}

// Page View Counter
include("templates/counter.php");

// Page Footer
include("templates/footer.php");

?>