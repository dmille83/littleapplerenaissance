<?php
include("templates/header.html");

if (!empty($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'home';
}
$action = basename($action);
include("pages/$action.html");

include("templates/footer.html");