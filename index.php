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


// Opens countlog.txt to read the number of hits.
$path = 'countlog.txt';
$file  = fopen( $path, 'r' );
$count = fgets( $file, 1000 );
fclose( $file );
$count = abs( intval( $count ) ) + 1;
//echo "<p>" . $count . " hits</p>";
$file = fopen( $path, 'w' );
fwrite( $file, $count );
fclose( $file );


include("templates/footer.php");
?>