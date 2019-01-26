<?php
include("templates/header.html");

if (!empty($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'home';
}
$action = basename($action);
if (file_exists("pages/$action.html")) {
	include("pages/$action.html");
} else {
	//echo("<p><br/>$action</p>"); // dangerous code insertion?
	include("pages/404.html");
}

include("templates/footer.html");