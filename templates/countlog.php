<?php
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
?>