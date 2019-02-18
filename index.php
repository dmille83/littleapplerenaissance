<?php
include("templates/header.php");

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

//include("templates/countlog.php");
include("templates/counter.html");

include("templates/footer.php");
?>