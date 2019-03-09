<?php
/***
	TITLE:	LOAD FILES FROM A GOOGLE DRIVE FOLDER AS A PHOTO ALBUM
	USES: 	GOOGLE DRIVE + PHP
	SOURCE:	http://htmlparsing.com/php.html
	SOURCE:	https://stackoverflow.com/questions/20681974/how-to-embed-a-google-drive-folder-in-a-website
	SOURCE:	https://www.publicalbum.org/blog/embedding-google-photos-albums
	PROS:	easy to build, dynamically updates with the folder
	CONS:	alphabetical with no custom sorting (yet)
	
	***
	
	WRAPPER OPTIONS:

	<script src="https://cdn.jsdelivr.net/npm/publicalbum@latest/dist/pa-embed-player.min.js" async></script>
	<div class="pa-embed-player" style="width:100%; max-width:800px; height:480px; display:none;"
		data-link=""
		data-title="Little Apple Ren Fest"
		data-description="Album by Little Apple Ren Fest">
	</div>
	
	<div class="photo-container" title="click on a photo to expand">
		<?php loadPhotosGDrive('17n-iswLPlotLuCsP2t70a7KDK2Indi2m'); ?>
	</div>

***/

function loadPhotosGDrive($gdrive_folder_id) {
	// FIND THE IMAGE URLS
	$url = 'https://drive.google.com/embeddedfolderview?id=' . $gdrive_folder_id . '#grid';
	$page = file_get_contents($url);
	$dom = new DOMDocument;
	libxml_use_internal_errors(true);
	$dom->loadHTML($page);
	foreach($dom->getElementsByTagName('img') as $link) {
		$img_src = $link->getAttribute('src');
		$img_title = $link->getAttribute('title');
		if (strpos($img_src, '/type/image/') == false) {
			echo '<img data-src="' . str_replace('=s190', '=s1080', $img_src) . '" title="' . $img_title . '" src="" alt="">';
		}
	}
}
?>